<?php

class UpdategoodsServince{
    public function anotherSelect($id){
        // echo $id;
        $s=new UpdategoodsDao;
        return $s->_anotherSelect($id);
    }
    public function upDate($id,$data){
        $s=new UpdategoodsDao;
        return $s->_update($id,$data);
    }
    public function Del($id){
        $s=new UpdategoodsDao;
        return $s->_del($id);
    }
    public function Add($data){
        $s=new UpdategoodsDao;
        return $s->_add($data);
    }
}

