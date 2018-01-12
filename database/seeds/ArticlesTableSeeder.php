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
        DB::table('articles')->delete();
        /*DB::table('articles')->insert([
            'user_id' => 1,
            'title' => '讲个笑话：苹果为了“保护你” 让你手机变卡了',
            'content' => '曾长时间使用过苹果产品的人都会有一个感性的认识，产品用的久了就容易变卡，应用的使用不太顺畅，这种现象在如付费支付、户外定位等急切情况下会令人非常焦急。',
            'sort' => rand(1,7),
            'view' => rand(1,15),
            //'created_at' => time(),
            //'updated_at' => time(),
        ]);*/

        $db = new Article();
        $db->id = 1;
        $db->user_id = 1;
        $db->title = '讲个笑话：苹果为了“保护你” 让你手机变卡了';
        $db->content = '曾长时间使用过苹果产品的人都会有一个感性的认识，产品用的久了就容易变卡，应用的使用不太顺畅，这种现象在如付费支付、户外定位等急切情况下会令人非常焦急。';
        $db->list_order = rand(1,7);
        $db->created_at = time();
        $db->updated_at = time();
        $db->save();

        $db = new Article();
        $db->id = 2;
        $db->user_id = 2;
        $db->title = '放不下的是手机，感受不到的是生活';
        $db->content = '早晨醒来第一件事情便是解锁手机,瞄一眼朋友圈和工作群组的更新消息,手机电量少于30%就开始焦虑恐慌,偶尔和老友涮火锅,吃到一半抱着手机出去回电话,回桌发现涮好的肥牛早就凉了';
        $db->list_order = rand(1,7);
        $db->created_at = time();
        $db->updated_at = time();
        $db->save();

        $db = new Article();
        $db->id = 3;
        $db->user_id = 1;
        $db->title = '魔术97-111不敌鹈鹕 惨遭七连败';
        $db->content = '开场后，第32秒，佩顿在朗多投篮时犯规，送给鹈鹕2次罚球机会。第1分35秒，考辛斯妙传，朱-霍勒迪三分远投命中。第7分28秒，佩顿手滑丢球，被考辛斯抢断。鹈鹕对篮板发起疯狂进攻，本节共抢下16个篮板，包括6个前场篮板，其中戴维斯一人就贡献4个篮板球。';
        $db->list_order = rand(1,7);
        $db->created_at = time();
        $db->updated_at = time();
        $db->save();
    }
}
