<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    //
    public function img_file(Request $request){


        var_dump($_REQUEST);
        var_dump($_FILES['upload_img']);
        //$src = $_GET["img"] ? $_GET["img"]:'abc.jpg';
        $src = 'fgfg.jpg';
        $data['src']= $src;
        /*// 获取表单上传文件 例如上传了001.jpg
        $file = $request->file('file');
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $file->move( '/public' . '/' . 'uploads');
        // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
        $path =  $info->getExtension();*/

        return showMsg(1,'Success',$data);
    }
}
