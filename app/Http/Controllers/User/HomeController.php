<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //マイページ→マッチング一覧、自チーム登録・編集リンク、自チーム詳細　
    public function mypage()
    {
        return view ('user.mypage');
    }
    
    public function matchinglist()
    {
        return view ('user.matchinglist');
    }

    public function registrationedit()
    {
        return view ('user.registrationedit');
    }

    public function myteamdetail()
    {
        return view ('user.myteamdetail');
    }
}
