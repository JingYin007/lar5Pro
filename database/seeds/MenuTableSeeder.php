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
        $db->status = 1;
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
        $db->status = 1;
        $db->save();

        $db = new NavMenu();
        $db->id = 2;
        $db->name = '菜单列表';
        $db->parent_id = 1;
        $db->action = 'cms/menu/index';
        $db->icon = '/cms/images/icon/menu_list.png';
        $db->created_at = time();
        $db->updated_at = time();
        $db->list_order = 0;
        $db->status = 1;
        $db->save();

        $db = new NavMenu();
        $db->id = 3;
        $db->name = '前台管理';
        $db->parent_id = 0;
        $db->action = '';
        $db->icon = '/cms/images/icon/desktop.png';
        $db->created_at = time();
        $db->updated_at = time();
        $db->list_order = 1;
        $db->status = 1;
        $db->save();

        $db = new NavMenu();
        $db->id = 4;
        $db->name = '今日赠言';
        $db->parent_id = 3;
        $db->action = 'cms/todayWords/index';
        $db->icon = '/cms/images/icon/diplom.png';
        $db->created_at = time();
        $db->updated_at = time();
        $db->list_order = 0;
        $db->status = 1;
        $db->save();

        $db = new NavMenu();
        $db->id = 5;
        $db->name = '文章列表';
        $db->parent_id = 3;
        $db->action = 'cms/article/index';
        $db->icon = '/cms/images/icon/adaptive.png';
        $db->created_at = time();
        $db->updated_at = time();
        $db->list_order = 0;
        $db->status = 1;
        $db->save();

        $db = new NavMenu();
        $db->id = 6;
        $db->name = '管理员';
        $db->parent_id = 0;
        $db->action = '';
        $db->icon = '/cms/images/icon/manage.png';
        $db->created_at = time();
        $db->updated_at = time();
        $db->list_order = 0;
        $db->status = 1;
        $db->save();

        $db = new NavMenu();
        $db->id = 7;
        $db->name = '管理员列表';
        $db->parent_id = 6;
        $db->action = 'cms/admin/index';
        $db->icon = '/cms/images/icon/admin.png';
        $db->created_at = time();
        $db->updated_at = time();
        $db->list_order = 0;
        $db->status = 1;
        $db->save();

        $db = new NavMenu();
        $db->id = 8;
        $db->name = '角色列表';
        $db->parent_id = 6;
        $db->action = 'cms/admin/role';
        $db->icon = '/cms/images/icon/role.png';
        $db->created_at = time();
        $db->updated_at = time();
        $db->list_order = 0;
        $db->status = 1;
        $db->save();
    }
}
