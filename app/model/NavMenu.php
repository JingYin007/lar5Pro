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
     * @param null $id 导航菜单 ID 标识
     * @return mixed
     */
    public function getNavMenuByID($id = null){
        $res = $this
            ->select('nav_menus.*','nm2.name as parent_name')
            ->join('nav_menus as nm2', 'nav_menus.parent_id', '=', 'nm2.id')
            ->where('nav_menus.id',$id)
            ->first();

        return $res->toArray();
    }

    public function getNavMenusCount($search = null){
        if ($search){
            //如果有查询限制
            $res = $this
                ->select('*')
                ->where(
                    [
                        ['id','>',0],
                        ['status','=',0],
                        ['name','like','%'.$search.'%'],
                    ])
                //->orWhere('action','like','%'.$search.'%')
                ->orderBy('list_order','desc')
                ->orderBy('created_at','desc')
                ->count();
        }else{
            $res = $this
                ->select('*')
                ->where('id','>',0)
                ->where('status',0)
                ->orderBy('list_order','desc')
                ->orderBy('created_at','desc')
                ->count();
        }
        return $res;
    }
    public function getNavMenusForPage($curr_page,$limit,$search = null){
        $res = $this
            ->select('*')
            ->where(
                [
                    ['id','>',0],
                    ['status','=',0],
                    ['name','like','%'.$search.'%'],
                ])
            //->orWhere('action','like','%'.$search.'%')
            ->orderBy('list_order','desc')
            ->orderBy('created_at','desc')
            ->offset($limit*($curr_page - 1))
            ->limit($limit)
            ->get()
            ->toArray();
        return $res;
    }

    public function addNavMenu($data){
        $this->name = $data['name'];
        $this->parent_id = $data['parent_id'];
        $this->action = $data['action'];
        $this->icon = $data['icon']?$data['icon']:'';
        $this->created_at = time();
        $this->updated_at = time();
        $this->list_order = $data['list_order'];
        $this->status = $data['status'];
        $this->save();
    }

    public function editNavMenu($id,$data){
        $opTag = isset($data['tag']) ? $data['tag']:'edit';
        if($opTag == 'del'){
            $tag = $this
                ->where('id',$id)
                ->update(['status' => -1]);
        }else{
            $tag = $this
                ->where('id',$id)
                ->update(
                    [
                        'name' => $data['name'],
                        'icon' => $data['icon'],
                        'list_order' => $data['list_order'],
                        'parent_id' => $data['parent_id'],
                        'action' => $data['action'],
                        'status' => $data['status'],
                    ]);
        }
        return $tag;
    }
}
