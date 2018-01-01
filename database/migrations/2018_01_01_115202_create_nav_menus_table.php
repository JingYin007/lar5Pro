<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nav_menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('')->comment('菜单名称');
            $table->integer('parent_id')->default(0)->comment('父级菜单ID');
            $table->string('action')->default('')->comment('action地址（etc:admin/home）');
            $table->tinyInteger('status')->default(1)->comment('状态，1：正常，-1：删除');
            $table->tinyInteger('list_order')->default(0)->comment('排序标识，越大越靠前');
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
        Schema::dropIfExists('menus');
    }
}
