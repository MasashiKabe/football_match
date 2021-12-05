<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'user'], function() {  
    Route::get('login', 'LoginController@login');
    Route::get('mypage', 'User\HomeController@mypage');
    Route::get('mypage/matchinglist', 'User\HomeController@matchinglist');
    Route::get('mypage/registrationedit', 'User\HomeController@registrationedit');
    Route::get('mypage/myteamdetail', 'User\HomeController@myteamdetail');
    Route::get('teammanagement', 'User\TeamController@teammanagement');
    Route::get('teammanagement/newteam', 'User\TeamController@newteam');
    Route::get('matchrequest', 'User\MatchingController@matchrequest');
    Route::get('matchrequest/searchotherteam', 'User\MatchingController@searchotherteam');
    Route::get('matchrequest/listotherteam', 'User\MatchingController@listotherteam');
    Route::get('matchrequest/detailotherteam', 'User\MatchingController@detailotherteam');
    Route::get('matchrequest/apply', 'User\MatchingController@apply');
    Route::get('matchapproval', 'User\ApprovalController@matchapproval');
    Route::get('matchapproval/searchapprovaldesk', 'User\ApprovalController@searchapprovaldesk');
    Route::get('matchapproval/approvaldesklist', 'User\ApprovalController@approvaldesklist');
    Route::get('matchapproval/detailapprovaldesk', 'User\ApprovalController@detailapprovaldesk');
    Route::get('matchapproval/approval', 'User\ApprovalController@approval');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
