<?php

namespace App\Http\Controllers\cms;

use App\model\Article;
use App\model\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    //
    private $model ;
    private $page_limit;
    private $comment_model;
    public function __construct()
    {
        $this->model = new Article();
        $this->comment_model = new Comment();
        $this->page_limit = config('app.CMS_PAGE_SIZE');
    }

    public function index(Request $request){
        $articles = $this->model->getCmsArticleList();
        $search = $request->input('str_search');
        $record_num = count($articles);

        $data = [
            'articles' => $articles,
            'search' => $search,
            'record_num' => $record_num,
            'page_limit' => $this->page_limit,
        ];
        return view('cms.article.index',$data);
    }
    public function add(Request $request){
        $method = $request->getMethod();
        if($method == 'POST'){
            $input = $request->input();
            $this->model->addArticle($input);
            return showMsg(1,'文章添加成功');
        }else{
            return view('cms.article.add');
        }
    }
    public function edit(Request $request,$id){
        $method = $request->method();
        if ($method == 'POST'){
            $this->model->updateCmsArticleData( $request->input());
            return showMsg(1,'文章更新成功');
        }else{
            $article = $this->model->getCmsArticleByID($id);
            $comments = $this->comment_model->getComment($id);
            $data =
                [
                    'article'=>$article,
                    'comments'=> $comments,
                ];
            return view('cms.article.edit',$data);
        }
    }
}
