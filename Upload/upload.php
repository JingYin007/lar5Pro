<?php
/**
 * layui + php 上传图片
 * 
 * 上传文件操作类似。
 * time:2017-03-20
 */
sleep(1);   //休眠1秒钟
$return = array();
if (isset($_GET['act'])) {
    $action = $_GET['act']; // 获取GET参数
    if ($action == 'images') {
        //上传图片具体操作
        $file_name = $_FILES['img_upload']['name'];
        $file_type = $_FILES["img_upload"]["type"];
        $file_tmp = $_FILES["img_upload"]["tmp_name"];
        $file_error = $_FILES["img_upload"]["error"];
        $file_size = $_FILES["img_upload"]["size"];
        
        if ($file_error > 0) { // 出错
            $return['status'] = 1;
            $return['message'] = $file_error;
            $return['time'] = 3000;
            exit(json_encode($return));
        }
        if ($file_size > 1048576) { // 文件太大了
            $return['status'] = 1;
            $return['message'] = "上传文件不能大于1MB";
            $return['time'] = 3000;
            exit(json_encode($return));
        }
        $file_name_arr = explode('.', $file_name);
        $new_file_name = date('YmdHis') . '.' . $file_name_arr[1];
        $file_path = "upload/" . $new_file_name;
        if (file_exists($file_path)) {
            $return['status'] = 1;
            $return['message'] = "此文件已经存在啦";
            $return['time'] = 3000;
            exit(json_encode($return));
        } else {
            $upload_result = move_uploaded_file($file_tmp, $file_path); // 此函数只支持 HTTP POST 上传的文件
            if ($upload_result) {
                $return['status'] = 0;
                $return['message'] = $file_path;
                $return['time'] = 1000;
                exit(json_encode($return));
            } else {
                $return['status'] = 1;
                $return['message'] = "文件上传失败，请稍后再尝试";
                $return['time'] = 3000;
                exit(json_encode($return));
            }
        }
    }
} else {
    $return['status'] = 1;
    $return['message'] = "参数错误";
    $return['time'] = 3000;
    exit(json_encode($return));
}