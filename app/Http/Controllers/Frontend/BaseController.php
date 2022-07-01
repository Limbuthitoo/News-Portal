<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Nepalnews;
use App\Models\Ad;
use App\Models\Category;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct()
    {
        /*===========Company Infomtation=============*/
        $nepalnews =Nepalnews::first();

         /*===========Company Infomtation=============*/
        $menus = Category::all();
         /*===========Ads Infomtation=============*/
        $adstop= Ad::where('slug','topbar-ad')->first();
        $headad= Ad::where('slug','header-ad')->first();
        $bodyad= Ad::where('slug','body-ad')->first();
        $catbodyad= Ad::where('slug','catbody-ad')->first();

        View::share('nepalnews',$nepalnews);
        View::share('menus',$menus);
        View::share('adstop',$adstop);
        View::share('headad',$headad);
        View::share('bodyad',$bodyad);
        View::share('catbodyad',$catbodyad);

    }

}
