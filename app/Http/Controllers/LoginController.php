<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Login;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function check(Request $request){
        $validator=Validator::make($request->all(),[
            'mobile'=>'required',
            'password'=>'required',
        ]);
        if($validator->passes()){
            $result=Login::where('user_mobile',$request->mobile)->where('password',$request->password)->exists();
            if($result==1){
                $request->session()->put('mobile',$request->mobile);
                $request->session()->put('password',$request->password);

                return redirect()->route('layout.default');
                //return redirect()->route('user.index');
            }
            else{
                $request->session()->flash('error','enter valid mobile number or password');
                return redirect()->route('login.index');
            }
         }
        else{
            return redirect()->route('login.index')->withErrors($validator)->withInput();
        }
    }
}
