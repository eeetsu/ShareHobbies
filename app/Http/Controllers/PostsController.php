<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts\Post;
use App\Models\Users\User;
use App\Models\Users\Area;
use App\Models\Users\Subject;
class PostsController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::latest()->get();
        $users = User::latest()->get();
        $areas = Area::latest()->get();
        $subjects = Subject::latest()->get();

        $keyword = $request->input('keyword');
        $category = $request->input('category');
        $order = $request->input('updown', 'ASC');

        $users = User::with(['areas', 'posts', 'subjects'])
        ->when($keyword, function ($query) use ($keyword) {
            $query->where(function ($q) use ($keyword) {
                $q->where('username', 'like', "%{$keyword}%")
                  ->orWhere('areadetail', 'like', "%{$keyword}%")
                  ->orWhereHas('areas', function ($areaQuery) use ($keyword) {
                      $areaQuery->where('area', 'like', "%{$keyword}%");
                  })
                  ->orWhereHas('subjects', function ($subjectQuery) use ($keyword) {
                      $subjectQuery->where('subject', 'like', "%{$keyword}%");
                  });
            });
        })
        ->when($category, function ($query) use ($category) {
            $query->where(function ($q) use ($category) {
                $q->where('areadetail', 'like', "%{$category}%")
                  ->orWhereHas('areas', function ($areaQuery) use ($category) {
                      $areaQuery->where('area', 'like', "%{$category}%");
                  })
                  ->orWhereHas('subjects', function ($subjectQuery) use ($category) {
                      $subjectQuery->where('subject', 'like', "%{$category}%");
                  });
            });
        })
        ->orderBy('id', $order)
        ->get();

        return view('top', compact('posts','users','areas'));
    }
}
