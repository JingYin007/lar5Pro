<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NavMenu extends Model
{
    private $adminModel;
    public function __construct()
    {
        $this->adminModel = new Admin();
    }

    /**
     * 获取所有正常状态的菜单列表
     * @return mixed
     */
    public function getNavMenus(){
        $res = $this
            ->select('*')
            ->where('id','>',0)
            ->where('parent_id',0)
            ->where('status',1)
            ->orderBy('list_order','desc')
            ->get()
            ->toArray();
        foreach ($res as $key => $value){
            $parent_id = $value['id'];
            $childRes = $this
                ->where('parent_id',$parent_id)
                ->where('status',1)
                ->orderBy('list_order','desc')
                ->get()
                ->toArray();
            $res[$key]['child'] = $childRes;
        }
        return $res;
    }

    /**
     * 获取当前管理员权限下的 导航菜单
     * @param int $cmsAID
     * @return mixed
     */
    public function getNavMenusShow($cmsAID = 0){

        if (!$cmsAID){
            header('Location:http://lar5pro.com/cms/login/index');
            die;
        }else{
            $str = $this
                ->adminModel
                ->getAdminNavMenus($cmsAID);

            $arr = explode('|',$str);
            $res = $this
                ->select('*')
                ->where('id','>',0)
                ->where('parent_id',0)
                ->where('status',1)
                ->orderBy('list_order','desc')
                ->get()
                ->toArray();
            $res = $this->deal($res,$arr);
            return $res;
        }
    }

    public function deal($res,$arr){
        foreach ($res as $key => $value){
            $parent_id = $value['id'];
            if (!in_array($parent_id,$arr)){
                unset($res[$key]);
            }else{
                $childRes = $this
                    ->where('parent_id',$parent_id)
                    ->where('status',1)
                    ->orderBy('list_order','desc')
                    ->get()
                    ->toArray();
                $childRes = $this->deal2($childRes,$arr);
                $res[$key]['child'] = $childRes;
            }
        }
        return $res;
    }

    public function deal2($res,$arr){
        foreach ($res as $key => $value){
            $parent_id = $value['id'];
            if (!in_array($parent_id,$arr)){
                unset($res[$key]);
            }
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

    /**
     * 获取导航菜单的数目
     * @param null $search
     * @return mixed
     */
    public function getNavMenusCount($search = null){
        if ($search){
            //如果有查询限制
            $res = $this
                ->select('*')
                ->where(
                    [
                        ['id','>',0],
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
                ->orderBy('list_order','desc')
                ->orderBy('created_at','desc')
                ->count();
        }
        return $res;
    }

    /**
     * 按页 获取菜单数据
     * @param $curr_page
     * @param $limit
     * @param null $search
     * @return mixed
     */
    public function getNavMenusForPage($curr_page,$limit,$search = null){
        $res = $this
            ->select('*')
            ->where(
                [
                    ['id','>',0],
                    ['name','like','%'.$search.'%'],
                ])
            //->orWhere('action','like','%'.$search.'%')
            ->orderBy('list_order','desc')
            ->orderBy('created_at','desc')
            ->offset($limit*($curr_page - 1))
            ->limit($limit)
            ->get()
            ->toArray();
        foreach ($res as $key => $v){
            if ($v['status'] == 1){
                $res[$key]['status_tip'] = "<span class=\"layui-badge layui-bg-blue\">正常</span>";
            }else{
                $res[$key]['status_tip'] = "<span class=\"layui-badge layui-bg-cyan\">删除</span>";
            }
        }
        return $res;
    }

    /**
     * 添加新的导航菜单
     * @param $data
     */
    public function addNavMenu($data){
        $this->name = $data['name'];
        $this->parent_id = $data['parent_id'];
        $this->action = $data['action']?$data['action']:'';
        $this->icon = $data['icon']?$data['icon']:'';
        $this->created_at = time();
        $this->updated_at = time();
        $this->list_order = $data['list_order'];
        $this->status = $data['status'];
        $this->save();
    }

    /**
     * 编辑惨淡内容
     * @param $id
     * @param $data
     * @return mixed
     */
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
                        'action' => $data['action']?$data['action']:'',
                        'status' => $data['status'],
                    ]);
        }
        return $tag;
    }
}
