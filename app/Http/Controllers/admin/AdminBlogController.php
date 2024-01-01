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
        $cateData = BlogCate::get();
        return view('admin.blogs.category', compact('cateData'));
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

    public function blogCategoryEdit($id = '')
    {
        $cateData = BlogCate::find($id);
        // pre($cateData);
        return view('admin.blogs.edit-category', compact('cateData'));
    }


    public function blogCategoryUpdate(Request $req, $id = '')
    {
        $input = $req->all();

        $cateData = BlogCate::find($id);

        $cateData->name = $input['name'];

        if ($cateData->save()) {
            return redirect()->back()->with('success', 'Blog category updated successfully');
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
        $blog->description = $input['description'];
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

    public function blogEdit($id = '')
    {
        $blogData = Blogs::findOrFail($id);
        $cateData = BlogCate::get();
        return view('admin.blogs.blog-edit', compact('blogData', 'cateData'));
    }

    public function blogupdate(Request $req, $id = '')
    {
        $input = $req->all();
        // pre($input);

        $blog = Blogs::find($id);

        if (isset($input['img'])) {
            // pre(public_path($blog->img));
            unlink(public_path($blog->img));
            $img = Storage::put('web/img/blogs', $input['img']);
            
            $blog->img = $img;
        }

        $blog->title = $input['name'];
        $blog->description = $input['description'];
        $blog->cate_id = $input['category'];
        $blog->created_by = session('adminId');

        if ($blog->save()) {
            return redirect()->back()->with('success', 'Blog update successfully');
        } else {
            return redirect()->back()->with('success', 'Some error occurred');
        }
    }
}
