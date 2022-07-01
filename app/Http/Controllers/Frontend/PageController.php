<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Http\Controllers\Frontend\BaseController;
use App\Http\Controllers\Frontend\DB;
use App\Models\Nepalnews;
use App\Models\Ad;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\PostDec;

class PageController extends BaseController
{
    public function home()
    {

        // Latest pOST
        $posts = Post::orderBy('id','desc')->get();

        //Politics
        $category = Category::where('slug','politics')->first();
        $politics = $category->posts;

        //Sports
        $catSport = Category::where('slug','sports')->first();
        $sports = $catSport -> posts;

        return view("frontend.pages.home",compact('posts','politics','category','sports','catSport'));
    }
    public function category($slug)
    {

          /*===========Ads Infomtation=============*/



          /*===========Company category Post=============*/

          $category = Category::where('slug',$slug)->first();
          $posts =  $category->posts;



        return view('frontend.pages.category',compact('posts'));
    }
    public function newsdetail($id)
    {


        /*===========Company Post=============*/
         $post = Post::find($id);

        /*===========update Views Count=============*/
         $post->increment('views');

         return view('frontend.pages.newsdetail',compact('post'));
    }
}
