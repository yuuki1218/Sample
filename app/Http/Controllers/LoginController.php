<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRule;

class LoginController extends Controller
{
    //ログイン画面
    public function loginIndex()
    {
        return view('login');
    }
    //新規登録画面
    public function registerIndex()
    {
        return view('register');
    }
    //新規登録画面の登録
    public function register(RegisterRule $request)
    {
        $userName = $request->input('name');
        return view('home', ['userName' => $userName]);
    }
    //HOME画面
    public function homeShow()
    {
        return view('home');
    }
}
