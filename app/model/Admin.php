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

    /**
     * 获取后台可显示管理员用户的数目
     * @return mixed
     */
    public function getAdminsCount(){
        $res = $this
            ->select('*')
            ->get()
            ->count();
        return $res;
    }

    public function getAdminData($id){
        $res = $this
            ->select('admins.*','ar.user_name as role_name')
            ->join('admin_roles as ar','ar.id','=','admins.role_id')
            ->where('admins.id',$id)
            ->first()->toArray();
        return $res;
    }

    public function addAdmin($input){
        $sameTag = $this->chkSameUserName($input['user_name']);
        if ($sameTag){
            return showMsg(0,'此昵称已被占用，请换一个！');
        }else{
            $this->user_name = $input['user_name'];
            $this->picture = $input['picture'];
            $this->password = md5(base64_encode($input['password']));
            $this->created_at = time();
            $this->updated_at = time();
            $this->role_id = $input['role_id'];
            $this->status = $input['status'];
            $this->content = $input['content'];
            $this->save();
            return $this->id;
        }
    }

    public function editAdmin($id,$input){
        $opTag = isset($input['tag']) ? $input['tag']:'edit';
        if ($opTag == 'del'){
            $tag = $this
                ->where('id',$id)
                ->update(['status' => -1]);
        }else{
            $sameTag = $this->chkSameUserName($input['user_name'],$id);
            if ($sameTag){
                return showMsg(0,'此昵称已被占用，请换一个！');
            }else{
                $saveData = [
                    'user_name' => $input['user_name'],
                    'picture' => $input['picture'],
                    'role_id' => $input['role_id'],
                    'status' => $input['status'],
                    'content' => $input['content'],
                ];
                //TODO 如果输入了新密码
                if ($input['password']){
                    $saveData['password'] = md5(base64_encode($input['password']));
                }
                $tag = $this
                    ->where('id',$id)
                    ->update($saveData);
            }
        }
        return $tag;
    }

    /**
     * 判断当前数据库中是否有重名的管理员
     * @param $user_name
     * @param int $id
     * @return mixed
     */
    public function chkSameUserName($user_name,$id = 0){
        $tag = $this
            ->select('user_name')
            ->where('user_name',$user_name)
            ->where('id','<>',$id)
            ->first();
        return $tag;
    }
    public function getAdminNavMenus($id = 1){
        $res = $this
            ->select('ar.nav_menu_ids')
            ->join('admin_roles as ar','ar.id','admins.role_id')
            ->where('admins.id',$id)
            ->first();
        return $res->nav_menu_ids;
    }
    public function adminLogin($input){
        $userName = $input['user_name'];
        $pwd = $input['password'];
        $res = $this
            ->select('password','id')
            ->where('user_name',$userName)
            ->where('status',1)
            ->first();
        if ($res){
            if ($res->password == md5(base64_encode($pwd))){
                return $res->id;
            }
        }
        return false;
    }













}
