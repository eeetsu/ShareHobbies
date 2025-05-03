<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\Posts\Post;
use App\Models\Users\Area;
use App\Models\Users\User;
use App\Models\Users\Subject;


class UsersController extends Controller
{
    public function profile($user_id)
    {
         $user = User::with(['areas', 'posts', 'subjects'])->findOrFail($user_id);
         $posts = $user->posts;
         $areas = $user->areas;
         $subjects = $user->subjects;

    return view('profile', [
        'users' => collect([$user]), // profile.blade.php が複数形前提なので wrap する
        'posts' => $posts,
        'areas' => $areas,
        'subjects' => $subjects,
    ]);
    }

    public function profiles($user_id)
    {
         $user = User::with(['areas', 'posts', 'subjects'])->findOrFail($user_id);
         $posts = $user->posts;
         $areas = $user->areas;
         $subjects = $user->subjects;

    return view('profiles', [
        'users' => collect([$user]), // profile.blade.php が複数形前提なので wrap する
        'posts' => $posts,
        'areas' => $areas,
        'subjects' => $subjects,
    ]);
    }



    // プロフィールをアップデート内容を取得する
    public function updateProfile(Request $request)
    {
      $id=$request->input('id');
      $username=$request->input('username');
      $mail_address=$request->input('mail_address');
      $password=$request->input('password');
      $bio=$request->input('bio');

      $user = User::find($id);
      $user->username = $username;
      $user->mail_address = $mail_address;
      $user->bio = $bio;

      if (!empty($password)) {
        $user->password = Hash::make($password);
    }

    // 画像アップロード処理
    if ($request->hasFile('images')) {
        $filename = $request->file('images')->store('public/images');
        $user->images = basename($filename);
    }

      $user->save();

      return redirect()->route('login_profile');
    }

    // プロフィール編集画面を表示する
     public function showUpdateProfileForm(Request $request)
     {
        $users = collect([Auth::user()]);

        return view('updateProfile', compact('users'));
     }

}
