<?php

namespace App\Http\Controllers\cms;

use App\model\TodayWord;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TodayWordsController extends Controller
{
    //
    private $model;
    private $page_limit;
    public function __construct()
    {
        $this->model = new TodayWord();
        $this->page_limit = 5;
    }

    public function index(Request $request){
        $list = $this->model
            ->getNavMenusForPage(1,$this->page_limit);
        $search = $request->input('str_search');
        $record_num = $this->model->getTodayWordsCount();


        return view('cms.todayWords.index',
            [
                'menus' => $list,
                'search' => $search,
                'record_num' => $record_num,
                'page_limit' => $this->page_limit,
            ]);
    }
    public function add(Request $request){
        return 'Hello';
    }
    public function edit(Request $request,$id){
        return 'Hello';
    }
    public function ajaxOpForPage(Request $request){
        $curr_page = $request->input('curr_page',1);
        $list = $this->model->getNavMenusForPage($curr_page,$this->page_limit);
        return showMsg(1,'**',$list);
    }
}
