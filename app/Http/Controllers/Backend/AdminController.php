<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {
      return view('Backend.home');
    }
    public function login_post(Request $request)
    {
        $request->validate([

            'email'=>'email|required',
            'password'=>'required'

        ]);
        $logins = $request->only('email','password');

        if (Auth::attempt($logins)){
            $request->session()->regenerate();

            return redirect()->route('admin.dashboard')->with('massage',' Admin Login Successfully');
        }

        return back()->withErrors([

            'email'=>'Invalid Credential',

        ]);
    }
    public function logout()
    {
       Auth::logout();

        return redirect()->route('admin.index')->with('massage','Admin Logout Sucsessfully');

    }
    public function dashboard()
    {
       return view('Backend.layout.dashboard');
    }
}
