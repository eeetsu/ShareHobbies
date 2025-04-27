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
    <!-- ヘッダーエリアの要素が入ります -->
    <section id="main-visual">
      <!-- メインビジュアルの要素が入ります -->
      <div class="container mv-wrapper"></div>
    </section>
      <nav class="g-navi">

          <!-- グローバルナビゲーション -->
          <form action="{{ route('top') }}" method="get" id="userSearchRequest">

              <ul>
                <li>
                  <input type="text" class="ui inverted input" name="keyword" placeholder="キーワードを検索" form="userSearchRequest"></li>

                  <li class="ui.white">
                    <select name="category" form="userSearchRequest" class="ui basic floating dropdown button">
                      <option value="" class="ui dropdown label">都道府県を選択</option>
                      @php
                        $prefectures = [
                          '北海道', '青森県', '岩手県', '宮城県', '秋田県', '山形県', '福島県',
                          '茨城県', '栃木県', '群馬県', '埼玉県', '千葉県', '東京都', '神奈川県',
                          '山梨県', '長野県', '新潟県', '富山県', '石川県', '福井県', '岐阜県',
                          '静岡県', '愛知県', '三重県', '滋賀県', '京都府', '大阪府', '兵庫県',
                          '奈良県', '和歌山県', '鳥取県', '島根県', '岡山県', '広島県', '山口県',
                          '徳島県', '香川県', '愛媛県', '高知県', '福岡県', '佐賀県', '長崎県',
                          '熊本県', '大分県', '宮崎県', '鹿児島県', '沖縄県'
                        ];
                      @endphp
                      @foreach ($prefectures as $pref)
                        <option value="{{ $pref }}">{{ $pref }}</option>
                      @endforeach
                    </select>
                  </li>


                <li><input type="submit" class="ui button" name="search_btn" value="　　　　　　検索　　　　　　" form="userSearchRequest"></li>
                <li><input type="reset" class="ui button" value="　　　　　リセット　　　　　" onclick="this.form.reset()" form="userSearchRequest"></li>
              </ul>
          </form>

    </nav>
    <!-- SPのグローバルナビゲーション -->
    <nav class="g-navi-sp">
      <div class="sp-logo">
        <p class="logo-title"></p>
      </div>
      <!-- ハンバーガーメニュー  -->
      <div class="menu-trigger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </nav>
  </header>
  <section id="concept">
    <!-- コンセプトエリアの要素が入ります -->
    <div class="container">
      @if($users->count())
        @foreach ($users as $user)
          <div class="user">
            <p>ユーザー名：{{ $user->username }}</p>
            @foreach ($user->areas as $area)
            <p>エリア：{{ $area->area }}</p>
            @endforeach

            <p>エリア詳細：{{ $user->areadetail }}</p>
            <p>自己紹介文：{{ $user->bio }}</p>


            @foreach ($user->posts as $post)
            <p>コメント：{{ $post->post }}</p>
            @endforeach

          </div>
        @endforeach

        @else
         <p>該当するユーザーが見つかりませんでした。</p>
      @endif

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
