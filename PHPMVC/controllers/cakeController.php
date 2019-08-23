<?php


class CakeController{
    public function select(){
    //  echo json_encode($data);
        $cakeServince=new CakeServince;
        $res=$cakeServince->anotherSelect();
        echo json_encode($res);
    }
    public function update($data){
        // $datas=$data;
        // print_r($data);
        $id=$data['id'];
        $data_=[
            'goods_name'=>$data['goods_name']
        ];
        $cakeServince=new CakeServince;
        $res=$cakeServince->upDate($id,$data_);
        echo json_encode($res);
    }
    public function add($data){
        // $datas=$data;
        print_r($data);
        $id=$data['id'];
        $data_=[
            'goods_name'=>$data['goods_name']
        ];
        $cakeServince=new CakeServince;
        $res=$cakeServince->Add($id,$data_);
        echo json_encode($res);
    }
    public function del($id){
        $cakeServince=new CakeServince;
        $res=$cakeServince->Del($id);
        return $res;
    }
}
