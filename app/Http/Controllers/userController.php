<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\LoginRequest;


class userController extends Controller
{

    public function index(){
      if(!\Auth::check())   {
             return redirect()->route('login');
        } else{
        return view('admin.home');
       }
    }

    public function showlogin(){
      if(\Auth::check())   {
             return redirect()->route('home');
        } else{
      return view('login');
        }
    }

    public function dologin(LoginRequest $request){
    //  echo "string"; die;
      if(\Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
        return redirect()->route('home');
      }
      else{
        return redirect()->back()->with('message','Invalid Email or password');
       }
    }
}
