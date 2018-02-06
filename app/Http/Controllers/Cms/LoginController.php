<?php

namespace App\Http\Controllers\Cms;

use App\model\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    private $adminModel;
    public function __construct()
    {
        $this->adminModel = new Admin();
    }

    public function index(){
        return view('cms.admin.login');
    }
    public function ajaxLogin(Request $request){
        $method = $request->getMethod();
        if ($method == 'POST'){
            $input = $request->except('_token');
            $tag = $this->adminModel->adminLogin($input);
            if ($tag){
                return showMsg(1,'登录成功');
            }else{
                return showMsg(0,'登录失败，请检查您的信息');
            }
        }else{
            return showMsg(0,'sorry,您的请求不合法！');
        }
    }
}
