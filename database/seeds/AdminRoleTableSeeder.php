<?php

use Illuminate\Database\Seeder;
use App\model\AdminRole;
class AdminRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admin_roles')->delete();

        $db = new AdminRole();
        $db->id = 1;
        $db->user_name = '终级管理员';
        $db->nav_menu_ids = '1|2|3|4|5|6|7|8';
        $db->created_at = time();
        $db->updated_at = time();
        $db->status = 1;
        $db->save();


        $db = new AdminRole();
        $db->id = 2;
        $db->user_name = '初级管理员';
        $db->nav_menu_ids = '1|2|3|5';
        $db->created_at = time();
        $db->updated_at = time();
        $db->status = 1;
        $db->save();

    }
}
