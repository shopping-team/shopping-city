<?php
// echo __DIR__;
// echo __DIR__.'/../db/db_sql.php';
// include
// $path=dirname(dirname(__FILE__)); 
// require_once($path.'/db/db_sql.php');
class OrderDetailDao extends BaseDao{
    public function _selectAll(){
        $res=parent::table('order_detail')->select('order_time');
        return $res;
    }
    public function _del($id){
        $res=parent::table('order_detail')->where("orderdetail_id=$id")->delete();
        return $res;
    }
    public function _add($data){
        $res=parent::table('order_detail')->insert($data);
        return $res;
    }
    public function _update($id,$data){
        $res=parent::table('order_detail')->where("orderdetail_id=$id")->update($data);
        return $res;
    }
    //多表联查
    public function _anotherSelect($sql){
        $res=parent::query($sql);
        return $res;
    }
}
// $s=new GoodsDao;
// echo json_encode($s->_anotherSelect());
