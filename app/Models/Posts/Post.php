<?php

namespace App\Models\Posts;

use Illuminate\Database\Eloquent\Model;
use App\Models\Users\User;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'post',
    ];

    // リレーション_１対多__user対posts_postsの多から見た記述
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
