<?php

class CakeServince{
    public function anotherSelect(){
        $s=new CakeDao;
        return $s->_anotherSelect();
    }
    public function upDate($id,$data){
        $s=new CakeDao;
        return $s->_update($id,$data);
    }
    public function Del($id){
        $s=new CakeDao;
        return $s->_del($id);
    }
    public function Add($id,$data){
        $s=new CakeDao;
        return $s->_add($id,$data);
    }
}

