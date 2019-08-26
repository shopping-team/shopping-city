<?php

class UpdategoodsDao extends BaseDao{
    public function _selectAll(){
        // $res=parent::table('tab_user')->select();
        $res=parent::table('goods')->select('goods_name');
        return $res;
    }
    public function _del($id){
        $res=parent::table('goods')->where("goods_id=$id")->delete();
        return $res;
    }
    public function _add($data){
        $res=parent::table('goods')->insert($data);
        return $res;
    }
    public function _update($id,$data){ 
        $res=parent::table('goods')->where("goods_id=$id")->update($data);
        // echo $id;
        // echo 999;
        return $res;
    }
    // 多表查询
    public function _anotherSelect($id){
        $res=parent::query('select * from `goods` a where a.goods_id='.$id);
        // echo $res;
        return $res;
    }
}
