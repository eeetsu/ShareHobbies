<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterFormRequest;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\Posts\Post;
use App\Models\Users\Area;
use App\Models\Users\User;
use App\Models\Users\Subject;

class RegisterController extends Controller
{
    public function registerView(Request $request)
    {
        return view('register');
    }

    public function registerPost(RegisterFormRequest $request){

            DB::beginTransaction();
            try{

                // 画像取得
                if ($request->hasFile('images')) {
                    $filename = $request->file('images')->store('public/images');
                    $image = basename($filename);
                } else {
                    $image = null;
                }

                $user = User::create([
                    'username' => $request->username,
                    'name_kana' => $request->name_kana,
                    'mail_address' => $request->mail_address,
                    'sex' => $request->sex,
                    'role' => $request->role,
                    'password' => bcrypt($request->password),
                    // 主催ユーザーを選択した場合の「自己紹介文」「エリア」処理を追加
                    'bio' => $request->role == 1 ? $request->bio : null,
                    'areadetail' => $request->role == 1 ? $request->areadetail : null,
                    'images' => $image,
                ]);


                // 主催ユーザーならカテゴリ（subject）も登録
                if ($request->role == 1 && $request->has('subject')) {
                $user->subjects()->attach($request->subject);
                }



                DB::commit();
                return redirect()->route('login');
                } catch(\Exception $e){
                    dd($e->getMessage());
                DB::rollback();
                return redirect()->route('login');
                }
    }
}
