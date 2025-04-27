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
  crossorigin="anonymous"></script>
  <script src="../js/semantic.js" charset="UTF-8"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
</head>
<body>

  <header>
    <!-- グローバルナビゲーション -->
     <nav class="g-navi">
          <form action="{{ route('top') }}" method="get" id="userSearchRequest">

              <ul>
                <li>
                  <a href="/top" class="ui button">戻る</a></li>



                <li><a href="URL〇〇" class="ui button">活動登録</a></li>
              </ul>
          </form>

    </nav>
    <!-- ヘッダーエリアの要素が入ります -->
    <section id="profile-main-visual">
      <!-- メインビジュアルの要素が入ります -->
      <div class="container mv-wrapper"></div>
    </section>
    <!-- コンセプトエリアの要素が入ります -->
    <div class="container">

      <div class="user">
            <p>ユーザー名：{{ $users->first()->username }}</p>

            <p>エリア：{{ $areas->first()->area }}</p>

            <p>エリア詳細：{{ $users->first()->areadetail }}</p>
            <p>自己紹介文：{{ $users->first()->bio }}</p>

            <p>コメント：</P>
            @foreach($posts as $post)
            <p>{{ $post->post }}</p>
            @endforeach

          </div>

    </div>

      <!-- 共通エリアタイトル -->
      <div class="title">

    </div>
  </section>


  <footer>
    <!-- フッターエリアの要素が入ります -->
    <div class="container">
      <div class="footer-content">
        <!-- Cake Shop -->
        <div class="logo-wrapper">
          <a href="#" class="logo">Share Habbies</a>
          <!-- SNSボックス -->
          <div class="sns-block">
            <a class="mark" href="https://twitter.com/" target="_blank">
              <img class="sns-mark" src="./image/twitter.png" alt="twitter">
            </a>
            <a class="mark" href="https://www.facebook.com/" target="_blank">
              <img class="sns-mark" src="./image/facebook.png" alt="facebook">
            </a>
            <a class="mark" href="https://www.instagram.com/" target="_blank">
              <img class="sns-mark" src="./image/instagram.png" alt="instagram">
            </a>
          </div>
        </div>
        <!-- メニューボックス -->
        <div class="menu">
          <ul>
            <li><a href="#concept">CONCEPT</a></li>
            <li><a href="#feature">FEATURE</a></li>
            <li><a href="#thought">THOUGHT</a></li>
            <li><a href="#lineup">LINE UP</a></li>
            <li><a href="#store">STORE</a></li>
            <li><a href="#contact">CONTACT</a></li>
          </ul>
        </div>
        <!-- 利用規約ボックス -->
        <div class="menu">
          <ul>
            <li><a href="#">利用規約</a></li>
            <li><a href="#">特定商取引法について</a></li>
            <li><a href="#">プライバシーポリシー</a></li>
          </ul>
        </div>
      </div>
      <!-- コピーライトテキスト -->
      <small>
        <!-- コピーライトテキスト内容 -->
        Copyright © 2025 sawada. All Rights Reserved.
      </small>
    </div>
  </footer>





</body>

</html>
