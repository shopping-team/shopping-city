<?php


class IceController{
    public function select(){
    //  echo json_encode($data);
        $cakeServince=new IceServince;
        $res=$cakeServince->anotherSelect();
       echo json_encode($res);
    }
    public function update(){
            $cakeServince=new IceServince;
            $res=$cakeServince->upDate();
           echo json_encode($res);
    }
    public function del($id){
            $cakeServince=new IceServince;
            $res=$cakeServince->Del($id);
           echo json_encode($res);
    }
}
