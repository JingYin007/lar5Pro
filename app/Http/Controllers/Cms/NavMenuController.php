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

    public function add(){
        return view('cms.menu.add');
    }
}
