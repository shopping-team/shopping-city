<?php

class DrinkDao extends BaseDao{
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
        return $res;
    }
    // 多表查询
    public function _anotherSelect(){
        $res=parent::query('select c.goods_id,b.caketype,c.goods_name,d.price from `goodstype` a
        left JOIN `caketype` b
        on a.goodstype_id=b.goodstype_id
				LEFT JOIN `goods` c 
				on c.caketype_id=b.caketype_id
				LEFT JOIN `price` d
				on d.price_id=c.price_id WHERE b.goodstype_id=4');
        return $res;
    }
}
