<?php

class OrderServince{
    public function anotherSelect(){
        $s=new OrderDao;
        return $s->_anotherSelect();
    }
}
