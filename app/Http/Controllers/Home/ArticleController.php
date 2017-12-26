<?php

namespace App\Http\Controllers\Home;

use App\model\Article;
use App\model\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    //
    private $model;
    private $comment_model;
    private $active;
    public function __construct(){
        $this->model = new Article();
        $this->comment_model = new Comment();
        $this->active = 'active';
    }

    /**
     * 根据文章ID 获取内容
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($id){
        $article = $this->model->getArticleByID($id);
        $comments = $this->comment_model->getComment($id);
        return view('home.article.index',
            [
                'article'=>$article,
                'comments'=> $comments,
                'active'=>$this->active
            ]);
    }

    /**
     * 文章编辑页面
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id){

            $article = $this->model->getArticleByID($id);
            $comments = $this->comment_model->getComment($id);
            return view('home.article.edit',
                [
                    'article'=>$article,
                    'comments'=> $comments,
                    'active'=>$this->active
                ]);

    }

    public function store(Request $request){

        $map = [
            'id' => $request->input('article_id')
        ];
        $data = $request->except('_token','article_id');
        $this->model->updateData($map, $data);
        return redirect()->back();

    }

    /**
     * 获取所有的文章 按照时间、阅读量排序
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function lists(){
        $data = $this->model->getArticleList(1);
        return view('home.index.review',['list' => $data]);
    }
}
