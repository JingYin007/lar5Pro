<?php

namespace App\Http\Controllers\Cms;

use App\model\Admin;
use App\model\AdminRole;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    private $model;
    private $ar_model;
    private $page_limit;
    public function __construct()
    {
        $this->model = new Admin();
        $this->ar_model = new AdminRole();
        $this->page_limit = config('app.CMS_PAGE_SIZE');
    }

    public function index(Request $request){
        $list = $this->model
            ->getadminsForPage(1,$this->page_limit);
        $search = $request->input('str_search');
        $record_num = $this->model->getAdminsCount();

        return view('cms.admin.index',
            [
                'admins' => $list,
                'search' => $search,
                'record_num' => $record_num,
                'page_limit' => $this->page_limit,
            ]);
    }

    /**
     * 添加新用户
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|void
     */
    public function add(Request $request){
        $method = $request->getMethod();
        $adminRoles = $this->ar_model->getAllRoles();
        if ($method == 'POST'){
            $input = $request->input();
            $tag = $this->model->addAdmin($input);
            if (is_numeric($tag) && $tag > 0){
                return showMsg(1,'新用户添加成功');
            }else{
                return showMsg(0,'Sorry,新用户添加失败');
            }
        }else{
            return view('cms.admin.add',[
                'adminRoles'=>$adminRoles
            ]);
        }
    }
    /**
     * @param Request $request
     * @param $id 标识ID
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Request $request,$id){
        $method = $request->getMethod();
        $adminRoles = $this->ar_model->getAllRoles();
        $adminData = $this->model->getAdminData($id);
        if ($method == 'POST'){
            $input = $request->input();
            $tag = $this->model->editAdmin($id,$input);
            return showMsg($tag,'用户信息修改成功');
        }else{
            return view('cms.admin.edit',[
                'admin' => $adminData,
                'adminRoles' => $adminRoles
            ]);
        }
    }

    public function ajaxOpForPage(Request $request){
        $curr_page = $request->input('curr_page',1);
        $list = $this->model->getadminsForPage($curr_page,$this->page_limit);
        return showMsg(1,'**',$list);
    }





}
