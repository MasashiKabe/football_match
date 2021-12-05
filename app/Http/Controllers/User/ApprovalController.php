<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApprovalController extends Controller
{
    //試合承認→他チーム検索、試合依頼一覧、他チーム詳細、承認
    public function matchapproval()
    {
        return view ('user.matchapproval');
    }

    public function searchapprovaldesk()
    {
        return view ('user.searchapprovaldesk');
    }

    public function approvaldesklist()
    {
        return view ('user.approvaldesklist');
    }

    public function detailapprovaldesk()
    {
        return view ('user.detailapprovaldesk');
    }

    public function approval()
    {
        return view ('user.approval');
    }
}
