<?php


class DrinkController{
    public function select(){
    //  echo json_encode($data);
        $cakeServince=new DrinkServince;
        $res=$cakeServince->anotherSelect();
       echo json_encode($res);
    }
    public function update(){
            $cakeServince=new DrinkServince;
            $res=$cakeServince->upDate();
           echo json_encode($res);
    }
    public function del($id){
            $cakeServince=new DrinkServince;
            $res=$cakeServince->Del($id);
           echo json_encode($res);
    }
}
