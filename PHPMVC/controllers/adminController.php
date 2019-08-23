<?php

class AdminController{
    public function select(){
    //  echo json_encode($data);
        $adminServince=new AdminServince;
        $res=$adminServince->anotherSelect();
        echo json_encode($res);
    }
    
}