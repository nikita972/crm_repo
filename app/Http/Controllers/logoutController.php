<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logoutController extends Controller
{
    public function logout(Request $request){
         $request->session()->forget('mobile');
         $request->session()->forget('password');
         return redirect()->route('login.index');
    }
}
