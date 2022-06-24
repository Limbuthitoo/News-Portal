<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Nepalnews;
use App\Models\Ad;
use App\Models\Category;
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
        return view("frontend.pages.home",compact('nepalnews','adstop','menus'));
    }
    public function category()
    {
        return view('frontend.pages.category');
    }
    public function newsdetail()
    {
        return view('frontend.pages.newsdetail');
    }
}
