<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts\Post;
use App\Models\Users\Area;
use App\Models\Users\User;

class UsersController extends Controller
{
    public function profile()
    {
        $posts = Post::latest()->get();
        $users = User::latest()->get();
        $areas = Area::latest()->get();

        return view('profile', compact('posts','users','areas'));
    }
}
