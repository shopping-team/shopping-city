<?php


// $path=dirname(dirname(__FILE__)); 
// include_once($path.'/dao/userDao.php');
// include_once($path.'/dao/userdetailDao.php');
class LoginuserService{
    public function select(){
        $user=new LoginuserDao();
        $res=$user->_selectAll();
        return $res;

    }
}
// $s=new LoginuserService();
 