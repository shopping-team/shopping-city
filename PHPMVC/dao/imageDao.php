<?php
class ImageDao extends BaseDao{
    public function _select(){
        // $res=parent::table('tab_user')->select();
        $res=parent::table('image')->select();

        return $res;
    }
    public function _del($id){
        $res=parent::table('image')->where("image_id=$id")->delete();
        return $res;
    }
    public function _add($data){
        $res=parent::table('image')->insert($data);
        return $res;
    }
    public function _update($id,$data){
        $res=parent::table('image')->where("userinfo_id=$id")->update($data);
        return $res;
    }
    public function _selectAll(){
        $res=parent::query('SELECT a.image_id,b.goods_name,a.image_url,c.price from `image` as a LEFT JOIN `goods` as b ON a.goods_id=b.goods_id LEFT JOIN `price` as c on  b.price_id=c.price_id');
        return $res;
    }
}
// $s=new ImageDao;
// var_dump($s->_select());
