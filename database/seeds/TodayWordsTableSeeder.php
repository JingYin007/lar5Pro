<?php

use Illuminate\Database\Seeder;
use \App\model\TodayWord;

class TodayWordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('today_words')->delete();

        $db = new TodayWord();
        $db->id = 1;
        $db->word = '谁的青春不迷茫，其实我们都一样！';
        $db->picture = '/home/images/ps.jpg';
        $db->from = '谁的青春不迷茫';
        $db->created_at = time();
        $db->updated_at = time();
        $db->status = 1;
        $db->save();

        $db = new TodayWord();
        $db->id = 2;
        $db->word = '想和你重新认识一次 从你叫什么名字说起';
        $db->picture = '/home/images/ps2.png';
        $db->from = '你的名字';
        $db->created_at = time();
        $db->updated_at = time();
        $db->status = 1;
        $db->save();

        $db = new TodayWord();
        $db->id = 3;
        $db->word = '我是一只雁，你是南方云烟。但愿山河宽，相隔只一瞬间.';
        $db->picture = '/home/images/ps3.png';
        $db->from = '秦时明月';
        $db->created_at = time();
        $db->updated_at = time();
        $db->status = 1;
        $db->save();

        $db = new TodayWord();
        $db->id = 4;
        $db->word = '人老了的好处，就是可失去的东西越来越少了.';
        $db->picture = '/home/images/ps4.png';
        $db->from = '哈尔的移动城堡';
        $db->created_at = time();
        $db->updated_at = time();
        $db->status = 1;
        $db->save();

        $db = new TodayWord();
        $db->id = 5;
        $db->word = '到底要怎么才能证明自己成长了 那种事情我也不知道啊 但是只要那一抹笑容尚存 我便心无旁骛 ';
        $db->picture = '/home/images/ps5.png';
        $db->from = '声之形';
        $db->created_at = time();
        $db->updated_at = time();
        $db->status = 1;
        $db->save();

        $db = new TodayWord();
        $db->id = 6;
        $db->word = '你觉得被圈养的鸟儿为什么无法自由地翱翔天际？是因为鸟笼不是属于它的东西';
        $db->picture = '/home/images/ps6.png';
        $db->from = '东京食尸鬼';
        $db->created_at = time();
        $db->updated_at = time();
        $db->status = 1;
        $db->save();

        $db = new TodayWord();
        $db->id = 7;
        $db->word = '我手里拿着刀，没法抱你。我放下刀，没法保护你';
        $db->picture = '/home/images/ps7.png';
        $db->from = '死神';
        $db->created_at = time();
        $db->updated_at = time();
        $db->status = 1;
        $db->save();
    }
}
