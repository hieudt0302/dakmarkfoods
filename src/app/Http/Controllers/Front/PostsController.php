<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostTranslation;
use App\Models\Tag;
use Validator;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     
        $tags = Tag::has('posts')->get();
        $comments = Tag::has('posts')->get();
        $post_category = Category::where('slug','posts')->firstOrFail();
        $categories = Category::where('parent_id',$post_category->id)->get();
        $lastPosts = Post::take(5)->get(); ///TODO: move number limit to database setting
        $posts = Post::paginate(10);  ///TODO: move number limit to database setting
        return View('front/posts/index', compact('posts','tags','comments', 'post_category','categories', 'lastPosts'))->with('i', ($page??1 - 1) * 10);
    }


    /**
     * Display a listing of the category.
     *
     * @return \Illuminate\Http\Response
     */
    public function cat($slug)
    {
        //RELATED
        $category = Category::where('slug', $slug)->firstOrFail();
        $tags = Tag::has('posts')->get();
        $comments = Tag::has('posts')->get();
        $lastPosts = Post::where('published',1)->take(5)->get(); ///TODO: move number limit to database setting
        $post_category = Category::where('slug','posts')->firstOrFail();
        $categories = Category::where('parent_id',$post_category->id)->get();
        //POSTS
        $posts = $category->publishedPosts()->paginate(10);  ///TODO: move number limit to database setting

        return View('front/posts/index', compact('posts', 'lastPosts','tags','comments','post_category','categories','category'))
            ->with('i', ($page??1 - 1) * 10);


//        $tags = Tag::has('posts')->get();
//        $comments = Tag::has('posts')->get();
//        $post_category = Category::where('slug','posts')->firstOrFail();
//        $categories = Category::where('parent_id',$post_category->id)->get();
//        $lastPosts = Post::take(10)->get(); ///TODO: move number limit to database setting
//        $posts = Post::paginate(5);  ///TODO: move number limit to database setting
//        return View('front/posts/index', compact('posts','tags','comments', 'post_category','categories', 'lastPosts'))->with('i', ($page??1 - 1) * 5);
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
    public function show($slug)
    {
        $post = Post::where('slug',$slug)->firstOrFail();
        $post_category = Category::where('slug','posts')->firstOrFail();
        $categories = Category::where('parent_id',$post_category->id)->get();
        $last_posts = Post::take(5)->get(); ///TODO: move number limit to database setting
        return View('front/posts/show', compact('post','categories','last_posts','post_category'));
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

    public function search(Request $request){
        $search_key = $request->input('key'); 
        

        $posts = PostTranslation::where("title", "LIKE", "%$search_key%")
        ->paginate(10);  

        $tags = Tag::has('posts')->get();
        $comments = Tag::has('posts')->get();
        $lastPosts = Post::take(10)->get(); ///TODO: move number limit to database setting
        $post_category = Category::where('slug','posts')->firstOrFail();
        $categories = Category::where('parent_id',$post_category->id)->get();        
        return view('front/posts/index',compact('posts','search_key','tags','comments', 'lastPosts','categories','post_category')); 
    }

    public function filterByTag($slug)
    {     
        $tags = Tag::has('posts')->get();
        $lastPosts = Post::where('published',1)->take(4)->get(); 
        $post_category = Category::where('slug','posts')->firstOrFail();
        $categories = Category::where('parent_id',$post_category->id)->get(); 

        
        //POSTS
        $posts = Tag::where('slug', $slug)->first()->posts()->paginate(21);  
        
        return View('front/posts/index', compact('posts', 'lastPosts','tags','post_category','categories'))
        ->with('i', ($page??1 - 1) * 21);    
    }        
}
