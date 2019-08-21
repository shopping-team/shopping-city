<?php

$path=dirname(dirname(__FILE__)); 
include_once($path.'/services/adminService.php');
class UserController{
    public function register(){
        // 数据验证
        $data=["user_name"=>$_GET['username'],
        "user_pw"=>$_GET['userpw'],
        "userinfo_tel"=>$_GET['userinfotel'],
        "userinfo_sex"=>$_GET['userinfosex'],
        'userinfo_date'=>$parm['userinfo_date']
        ];
    //  echo json_encode($data);
        $userService=new userService;
        $res=$userService->add($data);
       echo json_encode($res);
    }
}

// $action=$_GET['action'];
// $userCon=new UserController;
// if($action=='add'){
//     $userCon->register();
// }elseif($action=="del"){
    
// }