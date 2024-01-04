<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AboutPage;
use App\Models\BlogCate;
use App\Models\Blogs;
use App\Models\Comments;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
        $blog = Blogs::count();
        $blogCate = BlogCate::count();
        $comment = Comments::count();

        return view('admin.dashboard', compact('blog', 'blogCate', 'comment'));
    }

    public function aboutPage()
    {
        $aboutData = AboutPage::get();
        return view('admin.about.index', compact('aboutData'));
    }

    public function aboutSave(Request $req)
    {
        $input = $req->all();

        $aboutPage = new AboutPage();

        $aboutPage->title = $input['name'];
        $aboutPage->content = $input['content'];

        if ($aboutPage->save()) {
            return redirect()->back()->with('success', 'About saved successfully');
        } else {
            return redirect()->back()->with('success', 'Some error occurred');
        }
    }

    public function aboutDelete($id = '')
    {
        $about = AboutPage::find($id);
        $about->delete();
        return redirect()->back();
    }

    public function logout()
    {
        session()->forget(['adminId', 'adminName', 'adminEmail']);
        return redirect()->route('admin.login');
    }
}
