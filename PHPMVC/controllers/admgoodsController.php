<?php

class AdmgoodsController{
    public function selectall(){
    //  echo json_encode($data);
        $adminServince=new AdmgoodsServince;
        $res=$adminServince->selectAll();
        echo json_encode($res);
    }
    public function select($id){
        //  echo json_encode($data);
            $adminServince=new AdmgoodsServince;
            $res=$adminServince->anotherSelect($id);
            echo json_encode($res);
    }
}