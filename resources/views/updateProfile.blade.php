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
          <form action="{{ route('login_profile') }}" method="get" id="">
              <ul>
                <li><a href="/login_profile" class="ui button">プロフィール画面へ戻る</a></li>
              </ul>
          </form>
      </nav>
    <!-- ヘッダーエリアの要素が入ります -->
    <section id="profile-main-visual" style="background-image: url({{ asset('storage/images/' . $users->first()->images) }})">
      <!-- メインビジュアルの要素が入ります -->
      <div class="container mv-wrapper"></div>
    </section>
    <!-- コンセプトエリアの要素が入ります -->
  <section id="concept">
    <div class="container">
      <div class="abc">
      <div class="update">
        <div class="update-form-icon">
          <form action="{{ url('/update_profile') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ Auth::user()->id }}">

            @if(Auth::user()->images)
              <img src="{{ asset('storage/images/' . Auth::user()->images) }}" width="64" height="64" style="border-radius: 50%">
            @else
              <img src="{{ asset('storage/images/' . Auth::user()->image) }}" width="64" height="64" style="border-radius: 50%">
            @endif
        </div>

        <div class="update-form">

          <div class="update-block">
            <div class="update-label">
              <label for="username">user name</label>
            </div>
            <input type="text" name="username" value="{{ old('username', Auth::user()->username) }}" class="update-block-form">
            @error('username')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="update-block">
            <div class="update-label">
              <label for="mail">mail address</label>
            </div>
            <input type="email" name="mail_address" value="{{ old('mail_address', Auth::user()->mail_address) }}" class="update-block-form">
            @error('mail_address')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="update-block">
            <div class="update-label">
              <label for="password">new password</label>
            </div>
            <input type="password" name="password" class="update-block-form">
            @error('password')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="update-block">
            <div class="update-label">
              <label for="password_confirmation">password confirmation</label>
            </div>
            <input type="password" name="password_confirmation" class="update-block-form">
            @error('password_confirmation')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="update-block">
            <div class="update-label">
              <label for="bio">bio</label>
            </div>
            <input type="text" name="bio" value="{{ old('bio', Auth::user()->bio) }}" class="update-block-form">
            @error('bio')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="update-block">
            <div class="update-label">
              <label for="images">icon image</label>
            </div>
            <input type="file" name="images" accept="image/jpeg,image/png,image/gif">
            @error('images')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="update-btn">
            <button type="submit" class="btn btn-danger">　　　更新　　　</button>
          </div>
        </div>
      </form>
      </div>
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
