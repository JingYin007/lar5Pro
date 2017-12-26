<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function getComment($id,$reply_id = 0){
        $res = $this
            ->select('comments.id','user_name','head_portrait','content','comments.created_at','reply_id')
            ->join('users as u', 'u.id', '=', 'comments.user_id')
            ->where('article_id',$id)
            ->where('reply_id',$reply_id)
            ->orderBy('comments.created_at', 'asc')
            ->get()
            ->toArray();
        foreach ($res as $key => $val){
            $comment_id = $val['id'];
            $res2 = $this->getComment($id,$comment_id);
            $res[$key]['follower'] = $res2;
        }
        return $res;
    }
}
