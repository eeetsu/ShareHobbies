<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\Posts\Post;
use App\Models\Users\Area;
use App\Models\Users\User;
use App\Models\Users\Subject;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    // ログアウト
    public function logout(Request $request) {
        Auth::logout(); // 認証を解除する
        return redirect('/top'); // ログアウト後のリダイレクト先を指定する
    }
    // ログイン
    public function login(Request $request){
        if($request->isMethod('post')){

            // 入力されたメールでユーザーを探す
        $users = User::where('mail_address', $request->input('mail_address'))->first();

        // ユーザーが存在し、かつパスワードが一致するかチェック
        if ($users && Hash::check($request->input('password'), $users->password)) {
            Auth::login($users); // 手動でログイン処理
            return redirect()->route('login_profile'); // 成功時の遷移先
        }

        // 認証失敗時の処理（必要に応じて）
        return back()->withErrors([
            'mail' => 'メールアドレスまたはパスワードが正しくありません。',
        ]);
    }

    return view("login");
    }
}
