<?php

class GoodstypeService{
    // 多表查询
    public function anotherSelect(){
        $s=new GoodstypeDao;
        return $s->_anotherSelect();
    }
    // 单表查询
    public function selectAll(){
        $s=new GoodstypeDao;
        return $s->_selectAll();
    }
    // 增加
    public function Add($data){
        $s=new GoodstypeDao;
        return $s->_add($data);
    }
    // 修改
    public function upDate($id,$data){
        $s=new GoodstypeDao;
        return $s->_update($id,$data);
    }
    // 删除
    public function Del($id){
        $s=new GoodstypeDao;
        return $s->_del($id);
    }
}