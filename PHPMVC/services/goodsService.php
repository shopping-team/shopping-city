<?php

class GoodsServince{
    public function anotherSelect($id){
        // echo $id;
        $s=new GoodsDao;
        return $s->_anotherSelect($id);
    }
    public function upDate($id,$data){
        $s=new GoodsDao;
        return $s->_update($id,$data);
    }
    public function Del($id){
        $s=new GoodsDao;
        return $s->_del($id);
    }
    public function Add($data){
        $s=new GoodsDao;
        return $s->_add($data);
    }
}

