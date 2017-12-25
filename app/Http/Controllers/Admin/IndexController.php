<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index(){
        return view('admin.index.index');
    }
    public function tables(){
        return view('admin.index.tables');
    }
    public function panels(){
        return view('admin.index.panels');
    }
    public function elements(){
        return view('admin.index.elements');
    }
    public function charts(){
        return view('admin.index.charts');
    }
    public function icons(){
        return view('admin.index.icons');
    }
    public function notifications(){
        return view('admin.index.notifications');
    }
    public function typography(){
        return view('admin.index.typography');
    }
    public function page_login(){
        return view('admin.index.page_login');
    }
    public function page_profile(){
        return view('admin.index.page_profile');
    }
    public function page_lock(){
        return view('admin.index.page_lock');
    }
}
