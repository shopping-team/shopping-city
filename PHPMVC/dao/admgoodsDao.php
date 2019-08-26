<?php

class AdmgoodsDao extends BaseDao{
    public function _selectAll(){
        // $res=parent::table('tab_user')->select();
        $res=parent::table('goodstype')->select('goodstype_id,goodstype_name');
        return $res;
    }
    public function _del($id){
        $res=parent::table('goodstype')->where("goodstype_id=$id")->delete();
        return $res;
    }
    public function _add($data){
        $res=parent::table('goodstype')->insert($data);
        return $res;
    }
    public function _update($id,$data){
        $res=parent::table('goodstype')->where("goodstype_id=$id")->update($data);
        return $res;
    }
    // 多表查询
    public function _anotherSelect($id){
        $res=parent::query('select * from `caketype` where caketype.goodstype_id ='.$id);
        return $res;
    }
}
