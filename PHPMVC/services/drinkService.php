<?php

class DrinkServince{
    public function anotherSelect(){
        $s=new DrinkDao;
        return $s->_anotherSelect();
    }
    public function upDate(){
        $s=new DrinkDao;
        return $s->_update();
    }
    public function Del($id){
        $s=new DrinkDao;
        return $s->_del($id);
    }
}

