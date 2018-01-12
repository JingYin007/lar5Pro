<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    private $articlePointModel;
    public function __construct()
    {
        $this->articlePointModel = new ArticlePoint();
    }

    public function getArticleByID($id){
        $res = $this
            ->select('articles.*','u.user_name')
            ->join('users as u', 'u.id', '=', 'articles.user_id')
            ->where('articles.id',$id)
            ->first()
            ->toArray();
        return $res;
    }

    /**
     * @param null $user_id 文章作者ID
     * @return mixed
     */
    public function getArticleList($user_id = null){
        $res = $this
            ->select('articles.id','title','articles.created_at','abstract','picture')
            ->join('article_points as ap','ap.article_id','=','articles.id')
            ->where('ap.status','=',1)
            ->orderBy('ap.view', 'desc')
            ->inRandomOrder()
            ->limit(6)
            ->get();
        if ($user_id){
            $res = $this
                ->select('articles.id','title','articles.created_at','abstract','picture')
                ->join('article_points as ap','ap.article_id','=','articles.id')
                ->where('ap.status','=',1)
                ->orderBy('ap.view', 'desc')
                ->get();
        }
        return $res->toArray();
    }

    public function getCmsArticleList(){
        $res = $this
            ->select('articles.id','title','articles.created_at','status','picture','abstract')
            ->join('article_points as ap','ap.article_id','=','articles.id')
            ->orderBy('articles.id', 'desc')
            ->get();
        return $res->toArray();
    }

    public function getCmsArticleByID($id){
        $res = $this
            ->select('articles.*','u.user_name','title','status','picture','abstract')
            ->join('users as u', 'u.id', '=', 'articles.user_id')
            ->join('article_points as ap','ap.article_id','=','articles.id')
            ->where('articles.id',$id)
            ->first()
            ->toArray();
        return $res;
    }



    public function getPhotos(){
        $res = $this
            ->select('ap.picture')
            ->join('article_points as ap','ap.article_id','=','articles.id')
            ->orderBy('ap.view','desc')
            ->limit(9)
            ->inRandomOrder()
            ->get()
            ->toArray();
        return $res;
    }
    /**
     * 获取推荐文章
     * @return mixed
     */
    public function getRecommendList(){
        $res = $this
            ->select('articles.title','articles.id')
            ->join('article_points as ap','ap.article_id','=','articles.id')
            ->orderBy('ap.view','desc')
            ->limit(6)
            ->get()
            ->toArray();
        return $res;
    }

    public function updateCmsArticleData($input){
        $id = $input['id'];
        $opTag = isset($input['tag']) ? $input['tag']:'edit';
        if($opTag == 'del'){
            $this->articlePointModel
                ->where('article_id',$id)
                ->update(['status' => -1]);
        }else{
            $this
                ->where('id',$id)
                ->update([
                    'title' => $input['title'],
                    'list_order' => $input['list_order'],
                    'content' => $input['content'],
                ]);
            $this->articlePointModel
                ->where('article_id',$id)
                ->update([
                    'picture' => $input['picture']?$input['picture']:'',
                    'abstract' => $input['abstract'],
                    'status' => $input['status'],
                ]);
        }
    }
    public function updateData($map, $data){

        $this
            ->where('id',$map['id'])
            ->update([
                'title' => $data['title'],
                'content' => $data['content'],
            ]);
    }
}
