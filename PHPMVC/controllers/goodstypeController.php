<?php


class GoodstypeController{
    // 多表查询
    public function select(){
    //  echo json_encode($data);
        $adminServince=new GoodstypeService;
        $res=$adminServince->anotherSelect();
       echo json_encode($res);
    }
    // 单表查询
    public function selectall(){
        //  echo json_encode($data);
        $adminServince=new GoodstypeService;
        $res=$adminServince->selectAll();
        echo json_encode($res);
    }
    // 添加
    public function add($data){
        //  echo json_encode($data);
        $data_=[
            'goodstype_name'=>$data['goodstype_name']
        ];
        $adminServince=new GoodstypeService;
        $res=$adminServince->Add($data_);
        echo json_encode($res);
    }
    // 修改
    public function update($data){
        //  echo json_encode(111);
        $id=$data['id'];
        $data_=[
            'goodstype_name'=>$data['goodstype_name']
        ];
        $adminServince=new GoodstypeService;
        $res=$adminServince->upDate($id,$data_);
        echo json_encode($res);
    }
    // 删除
    public function del($id){
        //  echo json_encode($data);
        $adminServince=new GoodstypeService;
        $res=$adminServince->Del($id);
        echo json_encode($res);
    }
}
