<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Nepalnews;
use App\Models\Ad;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\PostDec;

class PageController extends Controller
{
    public function home()
    {
        /*===========Ads Infomtation=============*/
        $adstop= Ad::where('slug','topbar-ad')->first();
        $headad= Ad::where('slug','header-ad')->first();
        $bodyad= Ad::where('slug','body-ad')->first();

        /*===========Company Infomtation=============*/
        $nepalnews =Nepalnews::first();

        /*===========Company Infomtation=============*/
        $menus = Category::all();

        // Latest pOST
        $posts = Post::orderBy('id','desc')->get();

        //Politics
        $category = Category::where('slug','politics')->first();
        $politics = $category->posts;

        //Sports
        $catSport = Category::where('slug','sports')->first();
        $sports = $catSport -> posts;

        return view("frontend.pages.home",compact('nepalnews','adstop','menus','posts','politics','headad','bodyad','category','sports','catSport'));
    }
    public function category($slug)
    {

          /*===========Ads Infomtation=============*/
          $adstop= Ad::where('slug','topbar-ad')->first();
          $catbodyad= Ad::where('slug','catbody-ad')->first();

          /*===========Company Infomtation=============*/
          $nepalnews =Nepalnews::first();

          /*===========Company Infomtation=============*/
          $menus = Category::all();

          /*===========Company category Post=============*/

          $category = Category::where('slug',$slug)->first();
          $posts =  $category->posts;



        return view('frontend.pages.category',compact('nepalnews','adstop','menus','posts','catbodyad'));
    }
    public function newsdetail($id)
    {
         /*===========Ads Infomtation=============*/
         $adstop= Ad::where('slug','topbar-ad')->first();

         /*===========Company Infomtation=============*/
         $nepalnews =Nepalnews::first();

         /*===========Company Infomtation=============*/
         $menus = Category::all();

         /*===========Company Post=============*/

         $posts = Post::find($id);
        return view('frontend.pages.newsdetail',compact('adstop','nepalnews','menus','posts'));
    }
}
