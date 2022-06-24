<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Nepalnews;
use App\Models\Ad;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        /*===========Ads Infomtation=============*/
        $adstop= Ad::where('slug','topad')->first();

        /*===========Company Infomtation=============*/
        $nepalnews =Nepalnews::first();

        /*===========Company Infomtation=============*/
        $menus = Category::all();

        // Latest pOST
        $latestPost = Post::orderBy('id','desc')->limit(3);

        //Society
        $category = $menus->where('slug','society')->first();
        $society = $category->posts;

        return view("frontend.pages.home",compact('nepalnews','adstop','menus','latestPost','society'));
    }
    public function category($slug)
    {
          /*===========Ads Infomtation=============*/
          $adstop= Ad::where('slug','topad')->first();

          /*===========Company Infomtation=============*/
          $nepalnews =Nepalnews::first();

          /*===========Company Infomtation=============*/
          $menus = Category::all();
          $category = Category::where('slug',$slug)->first();
         $posts =  $category->posts;


        return view('frontend.pages.category',compact('nepalnews','adstop','menus','posts'));
    }
    public function newsdetail()
    {
        return view('frontend.pages.newsdetail');
    }
}
