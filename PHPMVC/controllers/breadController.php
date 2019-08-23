<?php


class BreadController{
    public function select(){
    //  echo json_encode($data);
        $cakeServince=new BreadServince;
        $res=$cakeServince->anotherSelect();
       echo json_encode($res);
    }
    public function update(){
            $cakeServince=new BreadServince;
            $res=$cakeServince->upDate();
           echo json_encode($res);
    }
    public function del($id){
            $cakeServince=new BreadServince;
            $res=$cakeServince->Del($id);
           echo json_encode($res);
    }
}
