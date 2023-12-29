<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AboutPage;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
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
}
