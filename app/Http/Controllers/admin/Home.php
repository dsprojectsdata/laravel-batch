<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Home extends Controller
{
      function index(Request $request)
      {

            
            $data = Product::get();

            echo "<pre>";

            print_r($data);
            die;
            // print_r(session()->all());
            return view('home', ['product' => $data]);
      }

      function save(Request $req)
      {
            $req->validate(
                  [
                        'name' => 'required|alpha',
                        'email' => 'required|email|unique:users',
                        'password' => 'required|confirmed|min:5|max:10',
                  ],
                  [
                        'password.confirmed' => 'Password not match'
                  ]
            );


            echo "<pre>";
            print_r($req->all());
      }
}
