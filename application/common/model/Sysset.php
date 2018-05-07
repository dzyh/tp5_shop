<?php

namespace app\common\model;

use think\Model;

class Sysset extends Model
{
    //添加数据
    public function add($data){
        return $this->save($data);
    }
    //查询一条数据
    public function get_one($data){
        return $this->get($data);
    }
    public function get_all(){
        return $this->all();
    }
    public function getField($condition, $field){
        return $this->where($condition)->value($field);
    }
    public function update_sysset($data,$condition)
    {
        return $this->save($data, $condition);
    }
    public function del($data)
    {
        return $this->destroy($data);
    }
}
