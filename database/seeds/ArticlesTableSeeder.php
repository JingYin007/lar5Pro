<?php

use App\model\Article;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('articles')->insert([
                    'title' => '讲个笑话：苹果为了“保护你” 让你手机变卡了',
                    'view' => rand(15),
                    'content' => '曾长时间使用过苹果产品的人都会有一个感性的认识，产品用的久了就容易变卡，应用的使用不太顺畅，这种现象在如付费支付、户外定位等急切情况下会令人非常焦急。',
                    'user_id' => 1,
                    'sort' => rand(7),
                ]);*/
        //
        $db = new Article();
        $db->user_id = 1;
        $db->title = '讲个笑话：苹果为了“保护你” 让你手机变卡了';
        $db->content = '曾长时间使用过苹果产品的人都会有一个感性的认识，产品用的久了就容易变卡，应用的使用不太顺畅，这种现象在如付费支付、户外定位等急切情况下会令人非常焦急。';
        $db->sort = rand(1,7);
        $db->created_at = time();
        $db->updated_at = time();
        $db->user_id = 1;
        $db->save();

        $db = new Article();
        $db->user_id = 2;
        $db->title = '放不下的是手机，感受不到的是生活';
        $db->content = '早晨醒来第一件事情便是解锁手机,
                        瞄一眼朋友圈和工作群组的更新消息,
                        手机电量少于30%就开始焦虑恐慌,
                        偶尔和老友涮火锅,
                        吃到一半抱着手机出去回电话,
                        回桌发现涮好的肥牛早就凉了';
        $db->sort = rand(1,7);
        $db->created_at = time();
        $db->updated_at = time();
        $db->user_id = 2;
        $db->save();
    }
}
