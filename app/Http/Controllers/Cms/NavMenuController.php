<?php

namespace App\Http\Controllers\cms;

use App\model\NavMenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NavMenuController extends Controller
{
    //
    private $menuModel;
    public function __construct()
    {
        $this->menuModel = new NavMenu();
    }

    /**
     * 菜单导航列表页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $list = $this->menuModel->getAllNavMenus();
        return view('cms.menu.index',['menus'=>$list]);
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
        $menuData = $this->menuModel->getAllNavMenus($id);
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
