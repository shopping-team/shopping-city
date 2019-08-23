<?php

class AdminServince{
    public function anotherSelect(){
        $s=new AdminDao;
        return $s->_anotherSelect();
    }
    
}
