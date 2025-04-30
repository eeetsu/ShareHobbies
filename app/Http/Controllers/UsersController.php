<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
