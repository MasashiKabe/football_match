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
            <h1>Myページ</h1>
        </div>
        <ul>
            <li><a href=" {{ url('/cap/mypage/post') }}">投稿する</a></li>
            <li><a href=" {{ url('/cap/mypage/edit') }}">Myチーム編集</a></li>
            <li><a href=" {{ url('/cap/search') }}">検索</a></li>
        </ul>
    </div>
    </body>
</html>