<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->comment('id');
            $table->string('username', 60)->index('username')->comment('ユーザー名');
            $table->string('name_kana', 60)->index('name_kana')->comment('ユーザー名（カナ）');
            $table->string('mail_address', 255)->unique()->comment('メールアドレス');
            $table->integer('sex')->index('sex')->comment('性別');
            $table->date('birth_day')->index('birth_day')->comment('生年月日');
            $table->integer('role')->index('role')->comment('権限');
            $table->string('password', 191)->comment('パスワード');
            $table->rememberToken();
            $table->string('bio',400)->index('bio')->comment('自己紹介文');
            $table->string('images',255)->default('icon1.png')->comment('活動画像');
            $table->timestamp('created_at')->nullable()->comment('登録日時');
            $table->timestamp('updated_at')->default(DB::raw('current_timestamp on update current_timestamp'))->comment('更新日時');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
