<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\Comments;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blogs::with('category', 'user', 'comments')->orderBy('created_at', 'desc')->paginate(1);
        return view('web.blogs.index', compact('blogs'));
    }

    public function blogDetails($id = '')
    {
        $blog = Blogs::with('category', 'user', 'comments')->find($id);
        return view('web.blogs.details', compact('blog'));
    }

    public function commentSave(Request $req, $id)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:6|max:50',
            'message' => 'required|min:10|max:500',
        ]);
        $input = $req->all();
        $data = new Comments();

        $data->blog_id = $id;
        $data->name = $input['name'];
        $data->email = $input['email'];
        $data->subject = $input['subject'];
        $data->comment = $input['message'];

        if ($data->save()) {
            return redirect()->back()->with('success', 'Comment done');
        } else {
            return redirect()->back()->with('success', 'Some error occurred');
        }
    }
}
