<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    public function img_file()
    {
        $status = 0;
        if ($_POST) {
            //上传图片具体操作
            $file_name = $_FILES['file']['name'];
            //$file_type = $_FILES["file"]["type"];
            $file_tmp = $_FILES["file"]["tmp_name"];
            $file_error = $_FILES["file"]["error"];
            $file_size = $_FILES["file"]["size"];


            if ($file_error > 0) { // 出错
                $message = $file_error;
            } elseif($file_size > 1048576) { // 文件太大了
                $message = "上传文件不能大于1MB";
            }else{
                $date = date('Ymd');
                //TODO 替换随机字符串  数值太大可能导致部分环境报错
                $randNum = rand(100000, 10000000) . rand(100000, 10000000);
                //也可用使用md5()或两者的组合
                $randNum = base64_encode($randNum);
                $file_name_arr = explode('.', $file_name);
                $new_file_name = $randNum. '.' . $file_name_arr[1];
                $path = "upload/image/".$date.'/';
                $fileAndPath = $path. $new_file_name;
                if (file_exists($fileAndPath)) {
                    $message = "此文件已经存在啦";
                } else {
                    //TODO 判断当前的目录是否存在，若不存在就新建一个!
                    if (!is_dir($path)){mkdir($path,0777);}
                    // 此函数只支持 HTTP POST 上传的文件
                    $upload_result = move_uploaded_file($file_tmp, $fileAndPath);
                    if ($upload_result) {
                        $status = 1;
                        $message = $fileAndPath;
                    } else {
                        $message = "文件上传失败，请稍后再尝试";
                    }
                }
            }
        } else {
            $message = "参数错误";
        }
        return showMsg($status, $message);
    }
}
