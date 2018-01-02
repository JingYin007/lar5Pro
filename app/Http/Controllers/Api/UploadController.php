<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    //
    public function img_file(Request $request){
        $res = $_FILES;

        return showMsg(1,'Success',$res);
    }
}
