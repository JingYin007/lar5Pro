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
        $db = new User();
        $db->user_name = 'MoTzxx';
        $db->password = md5('123456');
        $db->head_portrait = '';
        $db->age = rand(22,25);
        $db->signature = '你若盛开，清风自来';
        $db->created_at = time();
        $db->updated_at = time();
        $db->save();

        $db = new User();
        $db->user_name = '百里守约';
        $db->password = md5('654321');
        $db->head_portrait = '';
        $db->age = rand(22,25);
        $db->signature = '放心，我一直都在！';
        $db->created_at = time();
        $db->updated_at = time();
        $db->save();
    }
}
