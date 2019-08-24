<?php
//c->s->d->sql
class OrderDetailController{
    public function anotherSelect($sql){
    	//province->city-area
    	$OrderDetailServince=new OrderDetailServince;
        $res=$OrderDetailServince->anotherSelect($sql);
        echo json_encode($res);
    }
}