<?php
namespace Home\Model;
use Think\Model;
class PhotoModel extends Model{
    public function addd($a){
        return M('Photo')->add($a);
    }
}