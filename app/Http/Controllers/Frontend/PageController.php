<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Nepalnews;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $nepalnews =Nepalnews::first();
        return view("frontend.pages.home",compact('nepalnews'));
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
