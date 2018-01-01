<?php

namespace App\Http\Controllers\Cms;

use App\model\NavMenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    private $menuModel;
    public function __construct()
    {
        $this->menuModel = new NavMenu();
    }

    /**
     * CMS 后台初始页
     */
    public function index(){
        $menuList = $this->menuModel->getNavMenusShow();
        //var_dump($menuList);
        return view('cms.index',['menus'=>$menuList]);
    }
    /**
     * CMS 后台首页
     */
    public function home(){
        return view('cms.home');
    }
}
