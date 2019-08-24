<?php

class OrderController{
    public function select(){
    //  echo json_encode($data);
        $orderServince=new OrderServince;
        $res=$orderServince->anotherSelect();
        echo json_encode($res);
    }
}
