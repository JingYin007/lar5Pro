<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index(){
        $this->redisFun();
       return view('test');
    }


    /**
     * Redis 的使用测试
     */
    public function redisFun(){
        $redis = new \Redis();
        $redis->connect('192.168.236.131', '6379');
        $redis->set('say','moTzxx say hello !');
        echo $redis->get('say');
        $redis->set('string1','HAHAHHA');
        echo $redis->get('string1');

        //phpinfo();
        die;
    }














}
