<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="description" content="社会人サークルホームページ。あらゆるジャンルの好きなことの集まりで広がる輪。童心に戻って楽しむを目的としたサイトを運営しています">
        <meta name="keywords" content="サークル,社会人サークル,スポーツ,運動,運動不足,音楽,楽器,勉強会,趣味,教え合う,趣味,趣味のシェア,シェア,特技">
        <title>Share Hobbies</title>
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/semantic.css">
        <script
          src="https://code.jquery.com/jquery-3.1.1.min.js"
          integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
          crossorigin="anonymous">
        </script>
        <script src="../js/semantic.js" charset="UTF-8"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
    </head>
    <body>
      <header>
        <!-- ヘッダーエリアの要素が入ります -->
      </header>
      <!-- コンセプトエリアの要素が入ります -->
        <div id="container">
          <form method="POST" action="/login" accept-charset="UTF-8">
            @csrf
            <div class="logout-form">
              <p class="">Share Hobbies Login</p>
              <div class="">
                <p class="p-title">Share Hobbiesへようこそ</p>

                <p class="">mail adress</p>
                <input class="ui input" name="mail_address" type="text">

                <p class="">passwod</p>
                <input class="ui input" name="password" type="password">

                <div class="btn">
                  <button type="submit" class="ui button">ログイン</button>
                </div>
                <div class="btn">
                  <a href="{{ route('registerView') }}" class="ui button">新規登録</a>
                </div>
              </div>
            </div>
          </form>
        </div>
    </body>

</html>
