<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blogs::orderBy('created_at', 'desc')->get();
        return view('web.blogs.index', compact('blogs'));
    }

    public function blogDetails()
    {
        return view('web.blogs.details');
    }
}
