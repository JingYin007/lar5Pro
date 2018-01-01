<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NavMenu extends Model
{
    public function getList(){
        $res = $this
            ->select('*')
            ->where('id','>',0)
            ->where('parent_id',0)
            ->where('status',0)
            ->get()
            ->toArray();
        foreach ($res as $key => $value){
            $parent_id = $value['id'];
            $childRes = $this
                ->where('parent_id',$parent_id)
                ->where('status',0)
                ->get()
                ->toArray();
            $res[$key]['child'] = $childRes;
        }
        return $res;
    }
}
