<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index(){
        //$this->redisFun();
        $this->redisUp();


        die;
        return view('test');
    }

    /** Redis 升级训练 */
    public function redisUp(){
        $redis = new \Redis();
        $redis->connect('192.168.236.131', '6379');
        $redis->set('say','moTzxx say hello !');
        echo $redis->get('say');
    }

    /**
     * Redis 的使用测试
     */
    public function redisFun(){
        $redis = new \Redis();
        $redis->connect('192.168.236.131', '6379');
        $redis->set('say','moTzxx say hello !');
        echo $redis->get('say');

        $redis->delete('myname');
        $redis->set('myname','moTzxx');
        echo $redis->get('myname').'<br>'; # 返回:moTzxx

        var_dump($redis->del('myname'));# 返回 TRUE(1)
        var_dump($redis->get('myname')); # 返回 bool(false)

        //$redis->set('tag',10);
        $redis->delete('tag');
        $redis->incr('tag');
        //$redis->incrBy('tag',3);
        var_dump($redis->get('tag'));
        echo '<hr/>';

        $redis->delete('list1');
        $redis->lPush('list1','hello');
        $redis->rPush('list1','miss');
        var_dump($redis->rPop('list1')); #string(4) "miss"
        echo '<hr/>';

        $redis->delete('set1');
        $redis->sAdd('set1','a');
        $redis->sAdd('set1',2);
        $redis->sAdd('set1','ok');
        $redis->sAdd('set1','ok');//TODO 集合的唯一性

        $val = $redis->sCard('set1');
        var_dump($val); #int(3)
        $val2 = $redis->sMembers('set1');
        var_dump($val2);#array(3) { [0]=> string(2) "ok" [1]=> string(1) "2" [2]=> string(1) "a" }
        echo '<br/>';

        $redis->set('key1', 'value', 111);
        var_dump($redis->get('key1'));

        $redis->getSet('key1','value11');
        var_dump($redis->mget(['tag','key1']));
        var_dump($redis->type('tag'));
        echo '<hr/>';

        $redis->delete('driver1');
        $redis->hSet("driver1",'name','moTzxx');
        $redis->hSet("driver1",'age',12);
        $redis->hSet('driver1','gender',1);
        $val = $redis->hGet("driver1",'name');
        var_dump($val);#string(6) "moTzxx"
        $val = $redis->hMGet("driver1",['name','gender']);
        var_dump($val); #array(2) { ["name"]=> string(6) "moTzxx" ["gender"]=> string(1) "1" }
        echo '<hr/>';

        $redis->delete('pats');
        $redis->zAdd('pats',1,'cat1');  # 构建一个zset (sorted set) // int(1)
        $redis->zAdd('pats',3,'dog3');
        $redis->zAdd('pats',2,'monkey2');
        $redis->zAdd('pats',2,'pig2');
        $val = $redis->zRange('pats',0,-1); #从低到高
        var_dump($val); //array(4) { [0]=> string(4) "cat1" [1]=> string(7) "monkey2" [2]=> string(4) "pig2" [3]=> string(4) "dog3" }

        $val2 = $redis->zRevRange('pats',0,-1); #从高到低
        var_dump($val2);//array(4) { [0]=> string(4) "dog3" [1]=> string(4) "pig2" [2]=> string(7) "monkey2" [3]=> string(4) "cat1" }
        var_dump($redis->TYPE('pats')); //zset / int(4)

        //事务处理
        $redis->multi(1);
        $redis->set('book-name','Welcome');
        $redis->exec();

        echo $redis->get('book-name'); #Welcome
        
        //phpinfo();
    }














}
