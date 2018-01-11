<?php

use Illuminate\Database\Seeder;
use \App\model\ArticlePoint;

class ArticlePointsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_points')->delete();

        $db = new ArticlePoint();
        $db->id = 1;
        $db->article_id = 1;
        $db->abstract = '曾长时间使用过苹果产品的人都会有一个感性的认识，产品用的久了就容易变卡，应用的使用不太顺畅，这种现象在如付费支付、户外定位等急切情况下会令人非常焦急。';
        $db->picture = '/home/images/article_1.jpg';
        $db->view = rand(1,15);
        $db->save();

        $db = new ArticlePoint();
        $db->id = 2;
        $db->article_id = 2;
        $db->abstract = '早晨醒来第一件事情便是解锁手机,瞄一眼朋友圈和工作群组的更新消息,手机电量少于30%就开始焦虑恐慌';
        $db->picture = '/home/images/article_2.jpg';
        $db->view = rand(1,15);
        $db->save();

        $db = new ArticlePoint();
        $db->id = 3;
        $db->article_id = 3;
        $db->abstract = '北京时间12月23日，NBA常规赛继续进行，新奥尔良鹈鹕客场挑战奥兰多魔术，魔术97-111不敌鹈鹕，惨遭七连败。';
        $db->picture = '/home/images/article_3.jpg';
        $db->view = rand(1,15);
        $db->save();

    }
}
