<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

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
        $userName = $request->input('name');
        return redirect('home', ['userName' => $userName]);
    }
    //HOME画面
    public function homeShow()
    {
        return view('home');
    }
}
