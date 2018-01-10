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
            ->getTodayWordsForPage(1,$this->page_limit);
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
        $Tag = $request->getMethod();
        if ($Tag == 'POST'){
            $input = $request->except('_token');
            $this->model->addTodayWord($input);
            return showMsg(1,'添加成功');
        }else{
            return view('cms.todayWords.add');
        }
    }
    public function edit(Request $request,$id){
        $Tag = $request->getMethod();
        $todayWordData = $this->model->getTodayWord($id);
        if ($Tag == 'POST'){
            //TODO 修改对应的菜单
            $input = $request->except('_token');
            $opID = $input['id'];
            $tag = $this->model->editTodayWord($opID,$input);
            return showMsg($tag,'修改成功');
        }else{
            return view('cms.todayWords.edit',[
                'todayWordData' => $todayWordData
            ]);
        }
    }
    public function ajaxOpForPage(Request $request){
        $curr_page = $request->input('curr_page',1);
        $list = $this->model->getTodayWordsForPage($curr_page,$this->page_limit);
        return showMsg(1,'**',$list);
    }
}
