<?php
// echo __DIR__;
// echo __DIR__.'/../db/db_sql.php';
// include
$path=dirname(dirname(__FILE__)); 
// require_once($path.'/db/db_sql.php');
class UserDao extends BaseDao{
    public function _selectAll(){
        // $res=parent::table('tab_user')->select();
        $res=parent::table('user')->select('user_name,user_pw');
        return $res;
    }
    public function _del($id){
        $res=parent::table('user')->where("user_id=$id")->delete();
        return $res;
    }
    public function _add($data){
        $res=parent::table('user')->insert($data);
        return $res;
    }
    public function _update($id,$data){
        $res=parent::table('user')->where("user_id=$id")->update($data);
        return $res;
    }
    public function _anotherSelect(){
        $res=parent::query('select a.user_name,b.userinfo_sex,b.userinfo_tel,b.userinfo_date from `user` a
        left JOIN `user_info` b
        on a.userinfo_id=b.userinfo_id');
        return $res;
    }
}
$s=new UserDao;
echo json_encode($s->_anotherSelect());
