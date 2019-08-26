<?php
// echo __DIR__;
// echo __DIR__.'/../db/db_sql.php';
// include
// $path=dirname(dirname(__FILE__)); 
// require_once($path.'/db/db_sql.php');
class GoodstypeDao extends BaseDao{
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
    public function _anotherSelect(){
        $res=parent::query('select a.goodstype_name,b.tastetype_name from `goodstype` a
        left JOIN `tastetype` b
        on a.goodstype_id=b.goodstype_id');
        return $res;
    }
}
// $s=new GoodsDao;
// echo json_encode($s->_anotherSelect());
