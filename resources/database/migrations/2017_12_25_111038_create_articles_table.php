<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id')->comment('Article 主键');
            $table->string('title',50)->default('')->comment('标题');
            $table->integer('user_id')->default(0)->comment('作者ID');
            $table->timestamps();
            $table->integer('sort')->default(0)->comment('排序标识 越大越靠前');
            $table->text('content')->comment('文章内容');
            //$table->softDeletes(); //	加入 deleted_at 字段用于软删除操作。
            //$table->engine = 'InnoDB';
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
        Schema::dropIfExists('articles');
    }
}
