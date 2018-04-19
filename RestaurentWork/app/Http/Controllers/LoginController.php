<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function login(){
//        dd('ok');
        return view('login');
    }

    public  function  addlogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->route('admin');
        }
        return redirect()->back()->with(['alert' => 'login is not successful']);

    }
}
