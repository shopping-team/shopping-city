<?php

class IceServince{
    public function anotherSelect(){
        $s=new IceDao;
        return $s->_anotherSelect();
    }
    public function upDate(){
        $s=new IceDao;
        return $s->_update();
    }
    public function Del($id){
        $s=new IceDao;
        return $s->_del($id);
    }
}

