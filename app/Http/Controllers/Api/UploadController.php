<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    public function img_file(Request $request)
    {
        $status = 0;
        $data = [];
        if ($request->method()== 'POST') {
            $date = date('Ymd');
            $path = $request->file('file')->store('public/images/'.$date);
            if ($path){
                $path = '/storage'.explode('public',$path)[1];
                $status = 1;
                $data['url'] = $path;
                $message = '上传成功';
            }else{
                $message = "上传失败";
            }
        } else {
            $message = "参数错误";
        }
        return showMsg($status, $message,$data);
    }

}
