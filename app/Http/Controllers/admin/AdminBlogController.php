<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCate;
use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function blogIndex()
    {
        $blogData = Blogs::with('category')->get();

        return view('admin.blogs.blog', compact('blogData'));
    }

    public function blogAdd()
    {
        $cateData = BlogCate::get();
        return view('admin.blogs.blog-add', compact('cateData'));
    }

    public function blogSave(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'description' => 'required',
            'img' => 'required',
            'category' => 'required',
        ]);
        $input = $req->all();

        $blog = new Blogs();

        $img = Storage::put('web/img/blogs', $input['img']);

        $blog->title = $input['name'];
        $blog->description = $input['name'];
        $blog->cate_id = $input['category'];
        $blog->img = $img;
        $blog->created_by = session('adminId');

        if ($blog->save()) {
            return redirect()->back()->with('success', 'Blog saved successfully');
        } else {
            return redirect()->back()->with('success', 'Some error occurred');
        }
    }

    public function blogDelete($id = '')
    {
        $blog = Blogs::find($id);
        $blog->delete();
        return redirect()->back()->with('success', 'Blog deleted successfully');
    }
}
