<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MatchingController extends Controller
{
    //試合依頼→他チーム検索、他チーム一覧、他チーム詳細、応募処理
    public function matchrequest()
    {
        return view ('user.matchrequest');
    }

    public function searchotherteam()
    {
        return view ('user.searchotherteam');
    }

    public function listotherteam()
    {
        return view ('user.listotherteam');
    }

    public function detailotherteam()
    {
        return view ('user.detailotherteam');
    }

    public function apply()
    {
        return view ('user.apply');
    }
}
