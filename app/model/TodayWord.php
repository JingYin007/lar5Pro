<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class TodayWord extends Model
{
    /**
     * 根据ID获取 赠言数据
     * @param null $id
     * @return mixed
     */
    public function getTodayWord($id = null){
        $random = rand(1,7);
        if ($id){
            $res = $this
                ->select('*')
                ->where('id',$id)
                ->first()
                ->toArray();
        }else{
            $res = $this
                ->select('*')
                ->inRandomOrder()
                ->find($random)
                ->toArray();
        }

        return $res;
    }

    /**
     * 获取 今日赠言 正常数据的数量
     * @return mixed
     */
    public function getTodayWordsCount(){
        $res = $this
            ->select('*')
            ->get()
            ->count();
        return $res;
    }

    /**
     * 根据页码 获取赠言数据
     * @param $curr_page 当前页数
     * @param $limit 本页要获取的记录条数
     * @return mixed
     */
    public function getTodayWordsForPage($curr_page,$limit){
        $res = $this
            ->select('*')
            ->orderBy('id','desc')
            ->offset($limit*($curr_page - 1))
            ->limit($limit)
            ->get()
            ->toArray();
        foreach ($res as $key => $v){
            if ($v['status'] == 1){
                $res[$key]['status_tip'] = "<span class=\"layui-badge layui-bg-blue\">正常</span>";
            }else{
                $res[$key]['status_tip'] = "<span class=\"layui-badge layui-bg-cyan\">删除</span>";
            }
        }
        return $res;
    }

    /**
     * 增加赠言实现代码
     * @param $data
     */
    public function addTodayWord($data){
        $this->from = $data['from'];
        $this->word = $data['word'];
        $this->picture = $data['picture']?$data['picture']:'';
        $this->created_at = time();
        $this->updated_at = time();
        $this->status = $data['status'];
        $this->save();
    }

    /**
     * 编辑赠言实现代码
     * @param $id 赠言标识 ID
     * @param $data post 数据
     * @return mixed
     */
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
