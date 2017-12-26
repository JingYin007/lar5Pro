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
            ->select('id','title','created_at','abstract','picture')
            ->where('id','<>',0)
            ->orderBy('view', 'desc')
            ->limit(6)
            ->get();
        if ($user_id){
            $res = $this
                ->select('id','title','created_at','abstract','picture')
                ->where('id','<>',0)
                ->where('user_id',$user_id)
                ->orderBy('view', 'desc')
                ->get();
        }
        return $res->toArray();
    }

    public function updateData($map, $data){

        $this
            ->where('id',$map['id'])
            ->update($data);
    }
}
