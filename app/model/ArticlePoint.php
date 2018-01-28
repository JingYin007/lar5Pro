<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class ArticlePoint extends Model
{
    //
    public function addByAID($data,$article_id){
        $this->picture = $data['picture'];
        $this->abstract = $data['abstract'];
        $this->status = $data['status'];
        $this->article_id = $article_id;
        $this->view = rand(1,15);
        $this->save();
    }

}
