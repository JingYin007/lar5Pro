<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NavMenu extends Model
{
    /**
     * 获取当前管理员权限下的 导航菜单
     * @return mixed
     */
    public function getNavMenusShow(){
        $res = $this
            ->select('*')
            ->where('id','>',0)
            ->where('parent_id',0)
            ->where('status',0)
            ->orderBy('list_order','desc')
            ->get()
            ->toArray();
        foreach ($res as $key => $value){
            $parent_id = $value['id'];
            $childRes = $this
                ->where('parent_id',$parent_id)
                ->where('status',0)
                ->orderBy('list_order','desc')
                ->get()
                ->toArray();
            $res[$key]['child'] = $childRes;
        }
        return $res;
    }

    /**
     * 获取全部可修改状态的 导航菜单数据
     * @return mixed
     */
    public function getAllNavMenus(){
        $res = $this
            ->select('*')
            ->where('id','>',0)
            ->where('status',0)
            ->orderBy('created_at','desc')
            ->get()
            ->toArray();
        return $res;
    }
}
