<?php

use App\model\NavMenu;
use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('nav_menus')->delete();

        $db = new NavMenu();
        $db->id = 3;
        $db->name = '根级菜单';
        $db->parent_id = 0;
        $db->action = '';
        $db->icon = '/cms/images/icon/menu_icon.png';
        $db->created_at = time();
        $db->updated_at = time();
        $db->list_order = 0;
        $db->status = 0;
        $db->save();

        $db = new NavMenu();
        $db->where('id',3)
            ->update(['id'=>0]);

        $db = new NavMenu();
        $db->id = 1;
        $db->name = '菜单管理';
        $db->parent_id = 0;
        $db->action = '';
        $db->icon = '/cms/images/icon/menu_icon.png';
        $db->created_at = time();
        $db->updated_at = time();
        $db->list_order = 2;
        $db->status = 0;
        $db->save();

        $db = new NavMenu();
        $db->id = 2;
        $db->name = '菜单列表';
        $db->parent_id = 1;
        $db->action = 'cms/menu';
        $db->icon = '/cms/images/icon/menu_list.png';
        $db->created_at = time();
        $db->updated_at = time();
        $db->list_order = 0;
        $db->status = 0;
        $db->save();
    }
}
