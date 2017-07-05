<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
         $this->display();
    }
    public function insert(){
        $a=$_POST;
        $b=D('Photo')->addd($a);
        if($b){
            $this->success('添加成功','show');
        }else{
            $this->error('添加失败');
        }
    }
}