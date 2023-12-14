<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
      function index(Request $request)
      {
            // echo "<pre>";
            // print_r(session()->all());

            // $request->session()->forget('userId');


            session(['user_id' => 1]);

            return view('home');
      }

      function save(Request $req)
      {
            print_r($req->all());
      }
}
