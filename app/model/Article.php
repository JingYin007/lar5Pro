<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
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
            ->where('ap.is_delete','<>',1)
            ->orderBy('ap.view', 'desc')
            ->inRandomOrder()
            ->limit(6)
            ->get();
        if ($user_id){
            $res = $this
                ->select('articles.id','title','articles.created_at','abstract','picture')
                ->join('article_points as ap','ap.article_id','=','articles.id')
                ->where('ap.is_delete','<>',1)
                ->orderBy('ap.view', 'desc')
                ->get();
        }
        return $res->toArray();
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

    public function updateData($map, $data){

        $this
            ->where('id',$map['id'])
            ->update([
                'title' => $data['title'],
                'content' => $data['content'],
            ]);
    }
}
