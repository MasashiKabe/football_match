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
                <h1>チーム管理</h1>
            </div>
            <ul>
                <li><a href=" {{ url('/user/teammanagement/newteam') }}">チーム新規登録</a></li>
            </ul>
        </div>
    </body>
</html>