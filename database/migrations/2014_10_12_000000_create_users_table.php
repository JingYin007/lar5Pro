<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id')->comment('User 主键');
            $table->string('user_name',25)->default('')->comment('用户名');
            $table->string('password',50)->default('')->comment('登录密码');
            $table->string('head_portrait',20)->default('')->comment('头像');
            $table->tinyInteger('age')->default(0)->comment('年龄');
            $table->string('signature',50)->nullable()->comment('个性签名');
            $table->timestamps();
            $table->engine = 'MyISAM ';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
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
}
