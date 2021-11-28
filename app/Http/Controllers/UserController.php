<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //一般ユーザー用　トップ画面、投稿一覧、条件検索
    public function top()
    {
        return view ('user.top');
    }

    public function postlist()
    {
        return view ('user.postlist');
    }

    public function search()
    {
        return view ('user.search');
    }
}
