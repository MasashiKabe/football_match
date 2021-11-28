<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>football Match</title>
    </head>
    <body>
    <div class="content">
        <div class="title m-b-md">
            <h1>Football Match</h1>
            <p>～対戦相手が見つかるサイト～</p>
        </div>
        <ul>
            <li><a href=" {{ url('/user/postlist') }}">投稿一覧</a></li>
            <li><a href=" {{ url('/user/search') }}">検索</a></li>
        </ul>
    </div>
    </body>
</html>