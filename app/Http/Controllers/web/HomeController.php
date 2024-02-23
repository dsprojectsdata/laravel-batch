<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\AboutPage;
use App\Models\BlogCate;
use App\Models\Blogs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $blogData = Blogs::with('category', 'user')->orderBy('created_at', 'desc')->get();

        $recentBlogs = Blogs::orderBy('created_at', 'desc')->take(3)->get();
        $cateData = BlogCate::get();
        // return ($blogData);
        return view('web.pages.home', compact('blogData', 'cateData', 'recentBlogs'));
    }

    public function aboutPage()
    {
        $aboutData = AboutPage::get();
        return view('web.pages.about', compact('aboutData'));
    }

    public function contactPage()
    {
        $a = '5';       // Integer
        var_dump($a);


        $a = (int) $a;

        var_dump($a);


        die;
        return view('web.pages.contact');
    }
}
