<?php

class AdmgoodsServince{
    public function selectAll(){
        $s=new AdmgoodsDao;
        return $s->_selectAll();
    }
    public function anotherSelect($id){
        $s=new AdmgoodsDao;
        return $s->_anotherSelect($id);
    }
}
