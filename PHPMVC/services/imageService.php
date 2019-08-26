<?php

class ImageService{
    public function _select(){
        $s=new ImageDao;
        return $s->_select();
    }
}  