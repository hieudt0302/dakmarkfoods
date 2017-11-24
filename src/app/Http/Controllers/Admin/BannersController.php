<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use DB;
use Validator;
use Intervention\Image\Facades\Image;

class BannersController extends Controller
{
   	public function index(Request $request){
    }

    public function create(){

    }

    public function store(Request $request){

    }

    public function edit()
    {
        return View('admin.banners.edit');
    }

    public function update(Request $request)
    {   
        if (request()->hasFile('banner-1')) {
            $banner = $request->file('banner-1');            
            $img = Image::make($banner->getRealPath());
            $img->fit(530, 632)->save(public_path('images/foods/banner-1.jpg'));                      
        } 
        if (request()->hasFile('banner-2')) {
            $banner = $request->file('banner-2');            
            $img = Image::make($banner->getRealPath());
            $img->fit(530, 632)->save(public_path('images/foods/banner-2.jpg'));                      
        } 
        if (request()->hasFile('banner-3')) {
            $banner = $request->file('banner-3');            
            $img = Image::make($banner->getRealPath());
            $img->fit(530, 632)->save(public_path('images/foods/banner-3.jpg'));                      
        }         
      
        return redirect()->back()
        ->with('message', 'Banner đã được cập nhật')
        ->with('status', 'success');
    }

   

    public function destroy($id){

    }

}
