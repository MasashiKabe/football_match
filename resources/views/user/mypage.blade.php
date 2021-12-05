<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Football Match</title>
    </head>
    <body>
        <div class="content">
            <div class="title m-b-md">
                <h1>マイページ</h1>
            </div>
            <ul>
                <li><a href=" {{ url('/user/mypage/matchinglist') }}">マッチング一覧</a></li>
                <li><a href=" {{ url('/user/mypage/registrationedit') }}">チーム登録・編集</a></li>
                <li><a href=" {{ url('/user/mypage/myteamdetail') }}">自チーム詳細</a></li>
            </ul>
        </div>
    </body>
</html>