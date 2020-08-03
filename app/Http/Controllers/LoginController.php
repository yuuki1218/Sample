<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //ログイン画面
    public function loginShow()
    {
        return view('login');
    }
    //新規登録画面
    public function registerShow()
    {
        return view('register');
    }
    //新規登録画面の登録
    public function register(Request $request)
    {
        $this->validate($request, ['name' => 'required','mail-address' => 'required', 'password' => 'required|min:7','password_confirmation' => 'required|same:password']);

        $userName = $request->input('name');
        return view('home', ['userName' => $userName]);
    }
    //HOME画面
    public function homeShow()
    {
        return view('home');
    }
}
