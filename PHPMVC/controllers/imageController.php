<?php

class ImageController{
    public function select(){
          $imgaeService=new ImageService;
          $res=$imgaeService->_SelectAll();
        //   var_dump($res);
          return json_encode($res);
            }
}