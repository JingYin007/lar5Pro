<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_points', function (Blueprint $table) {
            $table->increments('id')->comment('ID 标识');
            $table->integer('article_id')->nullable()->comment('文章标识');
            $table->integer('view')->default(0)->comment('文章浏览量');
            $table->string('keywords',30)->default('')->comment('关键词');
            $table->string('picture',25)->nullable()->comment('文章配图');
            $table->string('abstract')->nullable()->comment('文章摘要');
            $table->tinyInteger('is_delete')->default(0)->comment('删除标记');
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
        Schema::dropIfExists('article_points');
    }
}
