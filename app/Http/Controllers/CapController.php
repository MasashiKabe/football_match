<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CapController extends Controller
{
    //チーム代表用　トップ画面、チーム登録、マイページ、投稿、編集、条件検索
    public function top()
    {
        return view ('user.top');
    }

    public function create()
    {
        return view ('cap.team');
    }

    public function mypagetop()
    {
        return view ('cap.mypage');
    }

    public function post()
    {
        return view ('cap.post');
    }

    public function edit()
    {
        return view ('cap.edit');
    }

    public function search()
    {
        return view ('user.search');
    }
}
