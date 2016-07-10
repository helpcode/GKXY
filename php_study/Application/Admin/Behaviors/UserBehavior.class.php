<?php
namespace Admin\Behaviors;
use Admin\Api\UserApi;
use Think\Controller;
class UserBehavior extends BasicBehavior{
    /* 行为执行入口 */
    public function run(&$param){
//        if(array_key_exists(CONTROLLER_NAME, C('NEED_LOGIN')) && in_array(ACTION_NAME, C('NEED_LOGIN')[CONTROLLER_NAME])){
//            //需要登陆
//            $user = new UserApi();
//            $result = $user->isLogin();
//
//            if(!$result){
//                //无cookie，拦截请求，跳转到登录页。
//                $module = __MODULE__;
//                header("location: $module/User/Login");
//            }
//            else{
//                //有cookie，无需拦截
//                $this->assign("user", $result);
//                return;
//            }
//        }
//        else{
//            //无需登录
//            return;
//        }
    }
}