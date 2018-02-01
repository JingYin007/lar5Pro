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
    public function add(Request $request){
        $method = $request->getMethod();
        if ($method == 'POST'){

        }else{
            return view('cms.admin.add',[]);
        }
    }

    /**
     * @param Request $request
     * @param $id 标识ID
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Request $request,$id){
        $method = $request->getMethod();
        if ($method == 'POST'){

        }else{
            return view('cms.admin.edit');
        }
    }






}
