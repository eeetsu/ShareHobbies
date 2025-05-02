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
      <!-- グローバルナビゲーション -->
            <nav class="g-navi">
                <form action="{{ route('login_top') }}" method="get" id="userSearchRequest">
                  <ul>
                    <li><input type="text" class="ui inverted input" name="keyword" placeholder="キーワードを検索" form="userSearchRequest"></li>

                    <li>
                      <select name="category" form="userSearchRequest" class="ui dropdown button">
                        <option value="" class="ui dropdown label">カテゴリを選択</option>
                        @php
                          $prefectures = [
                            'スポーツ', '音楽', '勉強会', '手芸', '料理', 'その他'
                          ];
                        @endphp
                        @foreach ($prefectures as $pref)
                          <option value="{{ $pref }}">{{ $pref }}</option>
                        @endforeach
                      </select>
                    </li>
                    <li><input type="submit" class="ui button" name="search_btn" value="　　　　　　検索　　　　　　" form="userSearchRequest" onclick="window.location.href='{{ route('login_top') }}'"></li>
                    <li><input type="reset" class="ui button" value="　　　　　リセット　　　　　" onclick="window.location.href='{{ route('login_top') }}'"></li>
                    <li><a href="/login_profile" class="ui button">プロフィールへ</a></li>
                    <li><a href="{{ route('update_profile') }}" class="ui button">プロフィール編集</a></li>
                    <li><a href="/logout" class="ui button">ログアウト</a></li>
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

      <!-- メインビジュアルの要素が入ります -->
        <section id="main-visual">
          <div class="container mv-wrapper"></div>
        </section>
    </header>
    <!-- コンセプトエリアの要素が入ります -->
    <section id="concept">
      <div class="container">
        @if($users->count())
          @foreach ($users as $user)
            <div class="user">
              <img src="{{ asset('storage/images/' . $user->images) }}" alt="" width="100" height="100" style="border-radius: 10%">
              <p>ユーザー名：{{ $user->username }}</p>
              @foreach ($user->subjects as $subject)
              <p>カテゴリ：{{ $subject->subject }}</p>
              @endforeach

              <p>エリア：{{ $user->areadetail }}</p>
              <p>自己紹介文：{{ $user->bio }}</p>


              @foreach ($user->posts as $post)
              <p>コメント：{{ $post->post }}</p>
              @endforeach

              <div class="post-item">
              <a href="{{ route('profile', ['user_id' => $user->id]) }}" class="ui button" enctype="multipart/form-data">
                <p>詳細</p>
              </a>
              </div>
            </div>
          @endforeach

          @else
           <p>該当するユーザーが見つかりませんでした。</p>
          @endif

      </div>
    </section>

    <!-- フッターエリアの要素が入ります -->
    <footer>
      <div class="container">
        <div class="footer-content">
          <!-- Share Habbies -->
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
