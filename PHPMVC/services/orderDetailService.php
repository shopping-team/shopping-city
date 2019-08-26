<?php

class OrderDetailServince{
    public function anotherSelect($sql){
    	 $s=new OrderDetailDao;
        return $s->_anotherSelect($sql);
    }
}
