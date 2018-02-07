<?php

use Illuminate\Database\Seeder;
use \App\model\Admin;
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admins')->delete();

        $db = new Admin();
        $db->id = 1;
        $db->user_name = '百里守约';
        $db->picture = '/cms/images/user.png';
        $db->password = md5(base64_encode('123456'));
        $db->role_id = 1;
        $db->created_at = time();
        $db->updated_at = time();
        $db->status = 1;
        $db->save();

        $db = new Admin();
        $db->id = 2;
        $db->user_name = '百里玄策';
        $db->picture = '/cms/images/user.png';
        $db->password = md5(base64_encode('123456'));
        $db->role_id = 2;
        $db->created_at = time();
        $db->updated_at = time();
        $db->status = 1;
        $db->save();

        $db = new Admin();
        $db->id = 3;
        $db->user_name = 'moTzxx@admin';
        $db->picture = '/cms/images/user.png';
        $db->password = md5(base64_encode('admin'));
        $db->role_id = 1;
        $db->created_at = time();
        $db->updated_at = time();
        $db->status = 1;
        $db->save();
    }
}
