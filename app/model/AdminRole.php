<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class AdminRole extends Model
{
    //
    public function getAllRoles(){
        $res = $this
            ->where('status',1)
            ->get()->toArray();
        return $res;
    }
}
