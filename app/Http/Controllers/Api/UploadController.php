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
            $path = $request->file('file')->store('', 'upload');
            if ($path){
                $fileUrl = '/upload/image/'.$date.'/'.$path;
                $status = 1;
                $data['url'] = $fileUrl;
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
