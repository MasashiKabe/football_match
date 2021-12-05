<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //管理者ログイン
    public function login()
    {
        return view ('user.login');
    }
}
