<?php

class BreadServince{
    public function anotherSelect(){
        $s=new BreadDao;
        return $s->_anotherSelect();
    }
    public function upDate(){
        $s=new BreadDao;
        return $s->_update();
    }
    public function Del($id){
        $s=new BreadDao;
        return $s->_del($id);
    }
}

