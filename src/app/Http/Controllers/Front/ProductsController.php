<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Lang;
use App\Models\Tag;
use App\Models\Comment;
use Validator;
use \Cart as Cart;
use DB;
use DateTime;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::has('products')->get();
        $results = Product::where('published',1)->paginate(12);

        //Miss: Product categories
        $best_sellers_products = Product::join('order_details','products.id', '=', 'order_details.product_id')
            ->select('products.*', DB::raw('COUNT(order_details.product_id) as count'))
            ->groupBy('product_id')
            ->orderBy('count', 'desc')
            ->limit(4)
            ->get();

        return View('front/products/index',compact('results','tags', 'best_sellers_products'));
    }

    /**
     * Display Best Seller
     *
     * @return \Illuminate\Http\Response
     */
    public function bestseller()
    {
        $tags = Tag::has('products')->get();
        $results = Product::join('order_details','products.id', '=', 'order_details.product_id')
            ->select('products.*', DB::raw('COUNT(order_details.product_id) as count'))
            ->groupBy('product_id')
            ->orderBy('count', 'desc')
            ->paginate(12);

        $headerlang = Lang::get('home.best-sellers-products');

        $new_products = Product::orderBy('created_at', 'desc')->limit(4)->get();

        return View('front/products/hotproduct',compact('results','tags', 'new_products', 'headerlang'));
    }

    /**
     * Display Best Seller
     *
     * @return \Illuminate\Http\Response
     */
    public function salesproduct()
    {
        $tags = Tag::has('products')->get();

        $results = Product::where('published',1)
            ->where('special_price', '>', 0)
            ->where('special_price_start_date', '<=', date('Y-m-d', time()))
            ->where('special_price_end_date', '>=', date('Y-m-d', time()))
            ->orderBy('created_at', 'desc')
            ->paginate(12);

        $headerlang = Lang::get('home.sale-products');

        $new_products = Product::orderBy('created_at', 'desc')->limit(4)->get();

        return View('front/products/hotproduct',compact('results','tags', 'new_products', 'headerlang'));
    }

    /**
     * Display a listing of the cat.
     *
     * @return \Illuminate\Http\Response
     */
    public function cat($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $tags = Tag::has('products')->get();
        $comments = Tag::has('products')->get();
        $lastProducts = Product::where('published',1)->take(4)->get(); ///TODO: move number limit to database setting
        //PRODCTS
        $results = $category->publishedProducts()->paginate(12);  ///TODO: move number limit to database setting
        $best_sellers_products = Product::join('order_details','products.id', '=', 'order_details.product_id')
            ->select('products.*', DB::raw('COUNT(order_details.product_id) as count'))
            ->groupBy('product_id')
            ->orderBy('count', 'desc')
            ->limit(4)
            ->get();
        return View('front/products/index', compact('results','tags','comments', 'lastProducts','category', 'best_sellers_products'))
            ->with('i', ($page??1 - 1) * 12);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showsingle($parent, $slug)
    {

        $category = Category::where('slug', $parent)->firstOrFail();
        $product = Product::where('slug',$slug)->firstOrFail();
        if(empty($product))
            return abort(404);
        $starAvg = $product->comments->avg('rate');

        $is_sales = false;
        if(!empty($product->special_price_start_date) && !empty($product->special_price_end_date)){
            if($product->special_price_start_date <= date('Y-m-d H:i:s') && $product->special_price_end_date >= date('Y-m-d H:i:s') ){
                $is_sales = true;
            }
        }

        return View('front.products.show', compact('product','starAvg','is_sales'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug',$slug)->firstOrFail();
        if(empty($product))
            return abort(404);
        $starAvg = $product->comments->avg('rate');
        
        $is_sales = false;
        if(!empty($product->special_price_start_date) && !empty($product->special_price_end_date)){
            if($product->special_price_start_date <= date('Y-m-d H:i:s') && $product->special_price_end_date >= date('Y-m-d H:i:s') ){
                $is_sales = true;
            }
        }

        return View('front.products.show', compact('product','starAvg','is_sales'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addToCart(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'name' => 'required',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|numeric|min:1',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'ERROR-INPUT: Code EI1004',
                'status' => 'error',
                'newCartItemCount' => Cart::count()
            ]);
        }
       

        $product = Product::find($request->id);
        
        if(empty($product))
        {
            return response()->json([
                'message' => 'Product not found!',
                'status' => 'error',
                'newCartItemCount' => Cart::count()
            ]);
        }

        $price = $product->price;
        if(!empty($product->special_price_start_date) && !empty($product->special_price_end_date)){
            if($product->special_price_start_date <= date('Y-m-d H:i:s') && $product->special_price_end_date >= date('Y-m-d H:i:s') ){
                $price = $product->special_price;
            }
        }

        $cartItem = Cart::add($request->id, $request->name, $request->quantity,  $price, ['summary'=>$product->translation->summary??'', 'source' =>  $product->GetMediaByOrderAsc()->source??'']);

        return response()->json([
            'message' => 'Đã thêm '. $request->quantity .' sản phẩm vào giỏ hàng!',
            'status' => 'success',
            'newCartItemCount' => Cart::count()
        ]);
    }

    public function addToWishlist(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'name' => 'required',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|numeric|min:1',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'ERROR-INPUT: Code EI1004',
                'status' => 'error',
                'newWishlistItemCount' => Cart::instance('wishlist')->count()
            ]);
        }
       
        $product = Product::find($request->id);
        $cartItem = Cart::instance('wishlist')->add($request->id, $request->name, $request->quantity, $request->price, ['summary'=>$product->translation->summary??'', 'source' =>  $product->GetMediaByOrderAsc()->source??'']);

        return response()->json([
            'message' => 'Đã thêm '. $request->quantity .' sản phẩm vào wishlist!',
            'status' => 'success',
            'newWishlistItemCount' => Cart::instance('wishlist')->count()
        ]);
    }

    public function search(Request $request){
        $search_key = $request->input('key'); 
        

        $products = Product::where('published',1)
        ->whereNull('deleted_at')
        ->where("name", "LIKE", "%$search_key%")
        ->paginate(10);  

        //TODO search multilang
        $tags = Tag::has('products')->get();
        $comments = Tag::has('products')->get();
        $lastProducts = Product::take(10)->get(); ///TODO: move number limit to database setting        

        return view('front/products/index',compact('products','search_key','tags','comments', 'lastProducts'));
    }     
}
