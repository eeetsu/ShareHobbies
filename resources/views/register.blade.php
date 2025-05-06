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
        <script src="{{ asset('js/semantic.js') }}" rel="stylesheet"></script>
        <script src="{{ asset('js/script.js') }}" rel="stylesheet"></script>
        <script src="../js/semantic.js" charset="UTF-8"></script>
        <script src="../js/script.js" charset="UTF-8"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
    </head>
    <body>
      <header>
        <!-- ヘッダーエリアの要素が入ります -->
      </header>
      <!-- コンセプトエリアの要素が入ります -->

      @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif


      <form action="{{ route('registerPost') }}" method="POST" enctype="multipart/form-data">
          <div class="" style="align-items:center; justify-content:center;">
            <div class="">
              <div class="">
              <div class="" style="">
              <div class="" style="">
              @error('username')
                <span class="text-danger">{{ $errors->first('username') }}</span>
              @enderror
              <label class="" style="">ユーザー名</label>
              <div class="" style="">
              <input type="text" style="" class="" name="username"/>
            </div>
          </div>
          <div class="" style="width:140px">
            <label class="" style="font-size:13px">ユーザー名（カナ）</label>
              <div class="" style="width:140px;">
                <input type="text" style="width:140px;" class="" name="name_kana">
                  @error('name_kana')
                  <span class="text-danger">{{ $errors->first('name_kana') }}</span>
                  @enderror
              </div>
          </div>
          <div class="">
            @error('sex')
            <span class="text-danger">{{ $errors->first('sex') }}</span>
            @enderror
              <input type="radio" name="sex" class="sex" value="1">
              <label style="font-size:13px">男性</label>
              <input type="radio" name="sex" class="sex" value="2">
              <label style="font-size:13px">女性</label>
              <input type="radio" name="sex" class="sex" value="3">
              <label style="font-size:13px">その他</label>
          </div>
          <div class="">
            @error('role')
            <span class="text-danger">{{ $errors->first('role') }}</span>
            @enderror
            <label class="" style="font-size:13px">会員種別</label>
              <input type="radio" name="role" class="admin_role role" value="1">
              <label style="font-size:13px">主催ユーザー</label>
              <input type="radio" name="role" class="other_role role" value="2">
              <label style="font-size:13px" class="other_role">参加ユーザー</label>
          </div>
          <div class="select_admin_user d-none">
            <div class="" style="width:140px">
             <label class="" style="font-size:13px">自己紹介文</label>
              <div class="" style="width:140px;">
                <input type="text" style="width:140px;" class="" name="bio">
                  @error('areadetail')
                  <span class="text-danger">{{ $errors->first('bio') }}</span>
                  @enderror
              </div>
            </div>
          </div>
          <div class="">
            @error('mail_address')
              <span class="text-danger">{{ $errors->first('mail_address') }}</span>
            @enderror
            <label class="" style="">メールアドレス</label>
              <div class="">
              <input type="email" class="" name="mail_address">
              </div>
            </div>
          </div>

          <div class="select_admin_user d-none">
            @error('role')
            <span class="text-danger">{{ $errors->first('subject') }}</span>
            @enderror
            <label class="" style="font-size:13px">カテゴリ</label>
              <input type="radio" name="subject" class="admin_role role" value="1">
              <label style="font-size:13px">スポーツ</label>
              <input type="radio" name="subject" class="admin_role role" value="2">
              <label style="font-size:13px">音楽</label>
              <input type="radio" name="subject" class="admin_role role" value="3">
              <label style="font-size:13px" class="admin_role">勉強会</label>
          </div>


          <div class="select_admin_user d-none" style="width:140px">
            <label class="" style="font-size:13px">エリア</label>
              <div class="" style="width:140px;">
                <input type="text" style="width:140px;" class="" name="areadetail">
                  @error('areadetail')
                  <span class="text-danger">{{ $errors->first('areadetail') }}</span>
                  @enderror
              </div>
          </div>
          <div class="select_admin_user d-none">
            <div class="update-label">
              <label for="images">icon image</label>
            </div>
            <input type="file" name="images" accept="image/jpeg,image/png,image/gif">
            @error('images')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

           <div class="">
              @error('password')
              <span class="text-danger">{{ $errors->first('password') }}</span>
              @enderror
              <label class="" style="font-size:13px">パスワード</label>
              <div class="">
                <input type="password" class="" name="password">
              </div>
           </div>
          <div class="">
              @error('password')
              <span class="">{{ $errors->first('password') }}</span>
              @enderror
          <label class="" style="">確認用パスワード</label>
              <div class="">
                <input type="password" class="" name="password_confirmation">
              </div>
          </div>
      <div class="">
        <input type="submit" class="" value="新規登録" onclick="return confirm('登録してよろしいですか？')">
      </div>
      <div class="">
        <a href="{{ route('login') }}">ログイン</a>
      </div>
      </div>
      {{ csrf_field() }}
      </div>
      </form>
    </body>
</html>
