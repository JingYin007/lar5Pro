<?php

namespace App\Http\Controllers\cms;

use App\model\NavMenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NavMenuController extends Controller
{
    private $menuModel;
    //定义每页的记录数
    private $page_limit;
    public function __construct()
    {
        $this->menuModel = new NavMenu();
        $this->page_limit = 5;
    }

    /**
     * 菜单导航列表页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request){

        $search = $request->input('str_search');
        $record_num = $this->menuModel->getNavMenusCount($search);
        $list = $this->menuModel->getNavMenusForPage(1,$this->page_limit,$search);
        return view('cms.menu.index',
            [
                'menus' => $list,
                'search' => $search,
                'record_num' => $record_num,
                'page_limit' => $this->page_limit,
            ]);
    }

    public function ajaxOpForPage(Request $request){
        $curr_page = $request->input('curr_page',1);
        $list = $this->menuModel->getNavMenusForPage($curr_page,$this->page_limit);
        return showMsg(1,'**',$list);
    }
    public function add(Request $request){
        $Tag = $request->getMethod();
        $rootMenus = $this->menuModel->getNavMenusShow();
        if ($Tag == 'POST'){
            $input = $request->except('_token');
            $this->menuModel->addNavMenu($input);
            return showMsg(1,'添加成功');
        }else{
            return view('cms.menu.add',[
                'rootMenus'=>$rootMenus,
            ]);
        }
    }
    public function edit(Request $request,$id){
        $Tag = $request->getMethod();
        $rootMenus = $this->menuModel->getNavMenusShow();
        $menuData = $this->menuModel->getNavMenuByID($id);
        if ($Tag == 'POST'){
            //TODO 修改对应的菜单
            $input = $request->except('_token');
            $opID = $input['id'];
            $tag = $this->menuModel->editNavMenu($opID,$input);
            return showMsg($tag,'修改成功');
        }else{
            return view('cms.menu.edit',[
                'rootMenus' => $rootMenus,
                'menuData' => $menuData
            ]);
        }
    }
}
