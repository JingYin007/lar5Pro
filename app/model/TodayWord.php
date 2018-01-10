<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class TodayWord extends Model
{
    //
    public function getTodayWord($id = null){
        $random = rand(1,7);
        if ($id){
            $res = $this
                ->select('*')
                ->where('status',1)
                ->where('id',$id)
                ->first()
                ->toArray();
        }else{
            $res = $this
                ->select('*')
                ->where('status',1)
                ->inRandomOrder()
                ->find($random)
                ->toArray();
        }

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
    public function getTodayWordsForPage($curr_page,$limit){
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

    public function addTodayWord($data){
        $this->from = $data['from'];
        $this->word = $data['word'];
        $this->picture = $data['picture']?$data['picture']:'';
        $this->created_at = time();
        $this->updated_at = time();
        $this->status = $data['status'];
        $this->save();
    }
    public function editTodayWord($id,$data){
        $opTag = isset($data['tag']) ? $data['tag']:'edit';
        if($opTag == 'del'){
            $tag = $this
                ->where('id',$id)
                ->update(['status' => -1]);
        }else{
            $tag = $this
                ->where('id',$id)
                ->update(
                    [
                        'from' => $data['from'],
                        'picture' => $data['picture'],
                        'word' => $data['word'],
                        'status' => $data['status'],
                    ]);
        }
        return $tag;
    }
}
