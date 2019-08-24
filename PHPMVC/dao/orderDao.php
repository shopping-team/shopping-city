<?php
// echo __DIR__;
// echo __DIR__.'/../db/db_sql.php';
// include
// $path=dirname(dirname(__FILE__)); 
// require_once($path.'/db/db_sql.php');
class OrderDao extends BaseDao{
    public function _selectAll(){
        // $res=parent::table('tab_user')->select();
        $res=parent::table('order')->select('order_time');
        return $res;
    }
    public function _del($id){
        $res=parent::table('order')->where("order_id=$id")->delete();
        return $res;
    }
    public function _add($data){
        $res=parent::table('order')->insert($data);
        return $res;
    }
    public function _update($id,$data){
        $res=parent::table('order')->where("order_id=$id")->update($data);
        return $res;
    }
    //多表联查
    public function _anotherSelect(){
        $res=parent::query('SELECT a.orderdetail_id,d.goods_name,e.price,a.orderdetail_num,b.order_time,c.user_name from`order_detail` as a left join `order` as b on a.order_id = b.order_id left join `user` as c on b.user_id = c.user_id left join `goods` as d on a.goods_id = d.goods_id left join `price` as e on a.price_id = e.price_id');
        return $res;
    }
}
// $s=new GoodsDao;
// echo json_encode($s->_anotherSelect());
