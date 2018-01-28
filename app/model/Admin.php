<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    public function getadminsForPage($curr_page,$limit){
        $res = $this
            ->select('admins.*','ar.user_name as role_name')
            ->join('admin_roles as ar','admins.role_id','=','ar.id')
            ->orderBy('admins.id','desc')
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

    public function getAdminsCount(){
        $res = $this
            ->select('*')
            ->get()
            ->count();
        return $res;
    }
}
