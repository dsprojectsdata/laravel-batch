<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCate;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function category()
    {
        return view('admin.blogs.category');
    }

    public function blogCategorySave(Request $req)
    {
        $req->validate([
            'name' => 'required'
        ]);
        $input = $req->all();

        $blogCate = new BlogCate();

        $blogCate->name = $input['name'];

        if ($blogCate->save()) {
            return redirect()->back()->with('success', 'Blog category saved successfully');
        } else {
            return redirect()->back()->with('error', 'Some error occurred');
        }
    }
}
