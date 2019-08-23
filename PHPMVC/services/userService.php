<?php


// $path=dirname(dirname(__FILE__)); 
// include_once($path.'/dao/userDao.php');
// include_once($path.'/dao/userdetailDao.php');
class UserService{
    public function add($parm){
       $user=new UserDao();
    //    var_dump($data);
    // echo $data['user_name'];
       $data=array("user_name"=>$parm['user_name'],"user_pw"=>$parm['user_pw']);
       $user_id=$user->_add($data);
    
       $userdetail=new UserdetailDao;
     
       $userdetail_data=array("userinfo_tel"=>$parm['userinfo_tel'],'userinfo_sex'=>$parm['userinfo_sex'],'userinfo_date'=>$parm['userinfo_date'],'user_id'=>$user_id);
      $lastId=$user_id=$userdetail->_add($userdetail_data);
      $result=[];
        if($lastId>0){
            $result['code']=1;
            $result['msg']='注册成功';
            $result['data']=null;
        }else{
            $result['code']=0;
            $result['msg']='注册失败';
            $result['data']=null;
        }
      return $result;
    }
}
// $s=new UserService();
 