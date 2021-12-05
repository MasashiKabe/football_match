<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    //自チーム管理→新規登録画面
    public function teammanagement()
    {
        return view ('user.teammanagement');
    }

    public function newteam()
    {
        return view ('user.newteam');
    }
}
