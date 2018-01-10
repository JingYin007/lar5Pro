<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodayWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('today_words', function (Blueprint $table) {
            $table->increments('id');
            $table->string('word')->default('')->comment('摘句内容，不要太长');
            $table->string('from')->default('')->comment('出处');
            $table->string('picture')->nullable()->comment('插图');
            $table->tinyInteger('status')->default(1)->comment('状态，1：正常，-1：删除');
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
        Schema::dropIfExists('today_words');
    }
}
