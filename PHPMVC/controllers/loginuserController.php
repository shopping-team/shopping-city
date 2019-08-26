<?php

// $path=dirname(dirname(__FILE__)); 
// include_once($path.'/services/LoginuserService.php');
class LoginuserController{
    public function select(){
        $loginuserService=new LoginuserService;
        $res=$loginuserService->select();
        echo json_encode($res);      
    }
}
