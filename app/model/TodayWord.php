<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class TodayWord extends Model
{
    //
    public function getTodayWord(){
        $random = rand(1,7);
        $res = $this
            ->select('word','picture','from')
            ->where('status',1)
            ->inRandomOrder()
            ->find($random)
            ->toArray();
        return $res;
    }
    public function getTodayWordsCount(){
        $res = $this
            ->select('*')
            ->where('status',1)
            ->get()
            ->count();
        return $res;
    }
    public function getNavMenusForPage($curr_page,$limit){
        $res = $this
            ->select('*')
            ->where(
                [
                    ['status','=',1],
                ])
            ->orderBy('id','desc')
            ->offset($limit*($curr_page - 1))
            ->limit($limit)
            ->get()
            ->toArray();
        return $res;
    }
}
