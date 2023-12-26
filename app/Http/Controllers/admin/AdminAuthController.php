<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function loginVerify(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $input = $request->all();

        $userData = User::where('email', $input['email'])->first();

        if ($userData) {
            $status = Hash::check($input['password'], $userData->password);

            if ($status) {
                $userInfo = [
                    'adminId' => $userData->id,
                    'adminEmail' => $userData->email,
                    'adminName' => $userData->name,
                ];

                session($userInfo);
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->back()->with('error', 'Invalid credentials');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid credentials');
        }
    }
}
