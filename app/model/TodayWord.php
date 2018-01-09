<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class TodayWord extends Model
{
    //
    public function getTodayWord(){
        $res = $this
            ->select('word','picture','from')
            ->where('status',1)
            ->inRandomOrder()
            ->first()
            ->toArray();
        return $res;
    }
}
