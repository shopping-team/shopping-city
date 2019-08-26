<?php

class GoodsDao extends BaseDao{
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
        $res=parent::query('select b.tastetype_name,c.goods_id,c.goods_name,c.price_standard,c.img from `goodstype` a 
        LEFT JOIN `tastetype` b 
        on a.goodstype_id=b.goodstype_id
        LEFT JOIN `goods` c 
        on b.tastetype_id=c.tastetype_id
        where a.goodstype_id='.$id);
        // echo $res;
        return $res;
    }
}
