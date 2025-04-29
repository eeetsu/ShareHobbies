<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts\Post;
use App\Models\Users\Area;
use App\Models\Users\User;

class UsersController extends Controller
{
    public function profile($user_id)
    {
         $user = User::with(['areas', 'posts'])->findOrFail($user_id);
    $posts = $user->posts;
    $areas = $user->areas;

    return view('profile', [
        'users' => collect([$user]), // profile.blade.php が複数形前提なので wrap する
        'posts' => $posts,
        'areas' => $areas,
    ]);
    }
}
