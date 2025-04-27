<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;
use App\Models\Users\User;

class Area extends Model
{
    protected $fillable = [
        'area',
    ];

    //  リレーション_多対多__user対areaの多userから見た記述
    public function users(){
        return $this->belongsToMany('App\Models\Users\User', 'area_users', 'area_id', 'user_id');
        // ２行目は中間テーブル名
    }
}
