<?php

namespace App\Models\Users;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;
use App\Models\Posts\Post;
use App\Models\Users\Area;
use App\Models\Users\Subject;



class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username','bio','areadetail','mail_address','password','images',
    ];

    // リレーション_1対多__user対posts_userの1から見た記述
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    //  リレーション_多対多__user対areaの多areaから見た記述
    public function areas()
    {
         return $this->belongsToMany('App\Models\Users\Area', 'area_users', 'user_id','area_id' );
    }

    public function subjects()
    {
        return $this->belongsToMany('App\Models\Users\Subject', 'subject_users', 'user_id','subject_id' );
    }
}
