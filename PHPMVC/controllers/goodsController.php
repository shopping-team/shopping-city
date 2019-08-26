<?php


class GoodsController{ 
    public function select($id){
    //  echo json_encode($data);
    // echo $id;
        // $id_=$data['id'];
        $cakeServince=new GoodsServince;
        $res=$cakeServince->anotherSelect($id);
        echo json_encode($res);
    }
    public function update($data){
        // $datas=$data;
        // print_r($data);
        $id=$data['id'];
        $data_=[
            'goods_name'=>$data['goods_name']
        ];
        $cakeServince=new GoodsServince;
        $res=$cakeServince->upDate($id,$data_);
        echo json_encode($res);
    }
    public function add($data){
        // $datas=$data;
        $data_=[
            'goods_name'=>$data['goods_name'],
            'goodstype_id'=>intval($data['goodstype_id']),
            'tastetype_id'=>(int)$data['tastetype_id'],
            'price_standard'=>json_encode($data['price_standard'])
        ];
        $cakeServince=new GoodsServince;
        $res=$cakeServince->Add($data_);
        echo json_encode($res);
    }
    public function del($id){
        $cakeServince=new GoodsServince;
        $res=$cakeServince->Del($id);
        return $res;
    }
}
