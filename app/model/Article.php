<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public function getArticles(){
        return $this->find(1)->content;
    }
}
