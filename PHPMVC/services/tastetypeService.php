

<?php

class TastetypeService{
    // 多表查询
    public function anotherSelect(){
        $s=new TastetypeDao;
        return $s->_anotherSelect();
    }
    // 单表查询
    public function selectAll(){
        $s=new TastetypeDao;
        return $s->_selectAll();
    }
    // 增加
    public function Add($data){
        $s=new TastetypeDao;
        return $s->_add($data);
    }
    // 修改
    public function upDate($id,$data){
        $s=new TastetypeDao;
        return $s->_update($id,$data);
    }
    // 删除
    public function Del($id){
        $s=new TastetypeDao;
        return $s->_del($id);
    }
}