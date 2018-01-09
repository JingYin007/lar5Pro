<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use \App\model\Comment;
class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->delete();

        $db = new Comment();
        $db->id = 1;
        $db->user_id = 2;
        $db->article_id = 1;
        $db->reply_id = 0;
        $db->created_at = time();
        $db->updated_at = time();
        $db->content = '这是一个神奇的世界，你是个神奇的人！';
        $db->save();

        $db = new Comment();
        $db->id = 2;
        $db->user_id = 1;
        $db->article_id = 1;
        $db->reply_id = 1;
        $db->created_at = time();
        $db->updated_at = time();
        $db->content = '嗯，你说的对！';
        $db->save();

        $db = new Comment();
        $db->id = 3;
        $db->user_id = 2;
        $db->article_id = 2;
        $db->reply_id = 0;
        $db->created_at = time();
        $db->updated_at = time();
        $db->content = '我们啊，其实都一样';
        $db->save();
    }
}
