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
                <h1>他チーム一覧</h1>
            </div>
            <ul>
                <li><a href=" {{ url('/user/matchrequest/detailotherteam') }}">他チーム詳細</a></li>
            </ul>
        </div>
    </body>
</html>