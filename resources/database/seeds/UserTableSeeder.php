<?php

use Illuminate\Database\Seeder;
use \App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();

        $db = new User();
        $db->id = 1;
        $db->user_name = 'MoTzxx';
        $db->password = md5('123456');
        $db->head_portrait = 'home/images/user_img1.jpg';
        $db->age = rand(22,25);
        $db->signature = '你若盛开，清风自来';
        $db->created_at = time();
        $db->updated_at = time();
        $db->save();

        $db = new User();
        $db->id = 2;
        $db->user_name = '百里守约';
        $db->password = md5('654321');
        $db->head_portrait = 'home/images/user_img2.jpg';
        $db->age = rand(22,25);
        $db->signature = '放心，我一直都在！';
        $db->created_at = time();
        $db->updated_at = time();
        $db->save();

        $db = new User();
        $db->id = 3;
        $db->user_name = '牧云骑星';
        $db->password = md5('123456');
        $db->head_portrait = 'home/images/user_img3.jpg';
        $db->age = rand(22,25);
        $db->signature = '天上的每一颗星星，都是一个值得还念的故人！';
        $db->created_at = time();
        $db->updated_at = time();
        $db->save();
    }
}
