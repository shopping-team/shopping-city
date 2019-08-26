<?php

class ImageService{
    public function _selectAll(){
        $s=new ImageDao;
        return $s->_selectAll();
    }
}  