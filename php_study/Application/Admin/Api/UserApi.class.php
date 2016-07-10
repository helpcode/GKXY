<?php
namespace Admin\Api;
use Common\Util\Cookie;
use Think\Think;
class UserApi{

    /*
     * 公共变量
     * */
    public $action = '';

    /*
     * 登陆检测函数
     * */
    public function Login(){
        /* 接收表单post传输值 */
        $userEmail = I('post.userEmail', '', '/^[\w\.-]+@[\w\.]*[\.\w]+$/');   //a.bc-cc@abc.com.cn
        $userPwd =I('post.userPwd', '', '/^[\w\!@#\$%\^\&\*\(\)_\+\-=<>\,\.\/?:";\'\[\]\{\}\\\|]{6,32}$/');  //!@#$%^&*()_+-=<>?,./[]\{}|可以使用的符号
        $userMd5 = md5(mb_substr(md5($userPwd),0,11));
        $verificationCode = I('post.verificationcode', '', '/\w{4,}/');
        $remeberme = I('post.remeberme','');

        /* 判断接收参数 */
            if($userEmail == '' AND $userMd5 == ''){
            $this->action = '$this->assign("erronMessage", "邮箱和密码不能为空！");';
            return;
        }
        elseif($userEmail == ''){
            $this->action = '$this->assign("erronMessage", "邮箱不能为空！");';
            return;
        }
        elseif($userMd5 == ''){
            $this->action = '$this->assign("erronMessage", "密码不能为空！");';
            return;
        }
        elseif($verificationCode == ''){
            $this->action = '$this->assign("erronMessage", "验证码必须填写！");';
            return;
        }
        else{
            if($verificationCode != $_SESSION['captchaCode']){
                $this->action = '$this->assign("erronMessage", "验证码错误！");';
                return;
            }
        }


        /* 从数据库取值 */
        $result = M("user")->where("admin_adminEmail='".$userEmail."'")->field('admin_adminId, admin_adminPwd')->select();

        /* 判断是否存在用户 */
            if(!empty($result) AND count($result) == 1){
            $dbId = $result[0]['admin_adminid'];
            $dbPwd = $result[0]['admin_adminpwd'];

            /* 判断密码是否正确 */
            if($userMd5 == $dbPwd){
                $cookie = new Cookie(); // cookie类实例化
                $log = $cookie->log($dbId, $userEmail); //生成log数组
                if(empty($remeberme)){
                    /* 不需记住用户 */
                    $cookie->setCookie("log", $log, time()+3600, "/", "www.geekhelp.com");
                    $module = __MODULE__;
                    $this->action = "header('location:" .$module."/index');";
                    return;
                }
                else if(!empty($remeberme)){
                    /* 需要记住用户 */
                    $module = __MODULE__;
                    $cookie->setCookie("log", $log, time()+3600*24, "/", "www.geekhelp.com");
                    $this->action = "header('location:" .$module."/index');";
                    return;
                }
            }
            /* 密码错误 */
            else{
                $this->action = '$this->assign("erronMessage", "密码错误，请重新尝试！（三次失败后，账号将被冻结！）");';
                return;
            }
        }
        else{
            $this->action = '$this->assign("erronMessage", "该用户不存在，请检查后重新登陆！");';
            return;
        }
    }

    /**
     * 判断是否登陆
     */
    public function isLogin(){
        $cookie = new Cookie();
        $log = $_COOKIE['log'];
        if(empty($log))
            return false;
        $log = $cookie->unPcking($log);
        $data = M("user")->where("admin_adminEmail='".$log['userEmail']."'")->field('admin_adminnickname, admin_adminId')->select();

        if($log['userId'] == $data[0]['admin_adminid']){
            //有正确的Cookie，可以进入需登录页面
            return $data[0]['admin_adminnickname'];
        }
        else{
            //无正确的Cookie，不可进入需登录页面
            return false;
        }
    }

    /**
     * 管理页展现列表
     */
    public function showList(){
        $id = $_GET['id'];
        $lists = M('article_master');
        switch ($id) {
            case '1_1' : {
                    //$data = $list->where("article_articlePlateId" == 1 AND "article_articleBlockId" == 1)->field("article_articleTitle, article_articleTime")->select();
                $lists->where('article_articlePlateId = 1 AND article_articleBlockId = 1')->order(array('article_articleTime'=>'desc'))->field("article_articleTitle, article_articleTime")->page($_GET['p'].',8')->select();
                $list = $lists->where('article_articlePlateId = 1 AND article_articleBlockId = 1')->order(array('article_articleTime'=>'desc'))->field("article_articleTitle, article_articleTime, article_articleId")->page($_GET['p'].',8')->select();
                $count = $lists->where('article_articlePlateId = 1 AND article_articleBlockId = 1')->count();
                $page = new \Think\Page($count, 8);
                $show = $page->show();
                return array('list'=>$list, 'show'=>$show);
                break;
            }
            case '1_2' : {
                    $list = $lists->where('article_articlePlateId = 1 AND article_articleBlockId = 2')->order(array('article_articleTime'=>'desc'))->field("article_articleTitle, article_articleTime, article_articleId")->page($_GET['p'].',8')->select();
                    $count = $lists->where('article_articlePlateId = 1 AND article_articleBlockId = 2')->count();
                $page = new \Think\Page($count, 8);
                $show = $page->show();
                return array('list'=>$list, 'show'=>$show);
                break;
            }
            case '1_3' : {
                    $list = $lists->where('article_articlePlateId = 1 AND article_articleBlockId = 3')->order(array('article_articleTime'=>'desc'))->field("article_articleTitle, article_articleTime, article_articleId")->page($_GET['p'].',8')->select();
                    $count = $lists->where('article_articlePlateId = 1 AND article_articleBlockId = 3')->count();
                $page = new \Think\Page($count, 8);
                $show = $page->show();
                return array('list'=>$list, 'show'=>$show);
                break;
            }
            case '1_4' : {
                    $list = $lists->where('article_articlePlateId = 1 AND article_articleBlockId = 4')->order(array('article_articleTime'=>'desc'))->field("article_articleTitle, article_articleTime, article_articleId")->page($_GET['p'].',8')->select();
                    $count = $lists->where('article_articlePlateId = 1 AND article_articleBlockId = 4')->count();
                $page = new \Think\Page($count, 8);
                $show = $page->show();
                return array('list'=>$list, 'show'=>$show);
                break;
            }
            case '2_1' : {
                    $list = $lists->where('article_articlePlateId = 2 AND article_articleBlockId = 1')->order(array('article_articleTime'=>'desc'))->field("article_articleTitle, article_articleTime, article_articleId")->page($_GET['p'].',8')->select();
                    $count = $lists->where('article_articlePlateId = 2 AND article_articleBlockId = 1')->count();
                $page = new \Think\Page($count, 8);
                $show = $page->show();
                return array('list'=>$list, 'show'=>$show);
                break;
            }
            case '2_2' : {
                    $list = $lists->where('article_articlePlateId = 2 AND article_articleBlockId = 2')->order(array('article_articleTime'=>'desc'))->field("article_articleTitle, article_articleTime, article_articleId")->page($_GET['p'].',8')->select();
                    $count = $lists->where('article_articlePlateId = 2 AND article_articleBlockId = 2')->count();
                $page = new \Think\Page($count, 8);
                $show = $page->show();
                return array('list'=>$list, 'show'=>$show);
                break;
            }
            case '2_3' : {
                    $list = $lists->where('article_articlePlateId = 2 AND article_articleBlockId = 3')->order(array('article_articleTime'=>'desc'))->field("article_articleTitle, article_articleTime, article_articleId")->page($_GET['p'].',8')->select();
                    $count = $lists->where('article_articlePlateId = 2 AND article_articleBlockId = 3')->count();
                $page = new \Think\Page($count, 8);
                $show = $page->show();
                return array('list'=>$list, 'show'=>$show);
                break;
            }
            case '3_1' : {
                    $list = $lists->where('article_articlePlateId = 3 AND article_articleBlockId = 1')->order(array('article_articleTime'=>'desc'))->field("article_articleTitle, article_articleTime, article_articleId")->page($_GET['p'].',8')->select();
                    $count = $lists->where('article_articlePlateId = 3 AND article_articleBlockId = 1')->count();
                $page = new \Think\Page($count, 8);
                $show = $page->show();
                return array('list'=>$list, 'show'=>$show);
                break;
            }
            case '3_2' : {
                    $list = $lists->where('article_articlePlateId = 3 AND article_articleBlockId = 2')->order(array('article_articleTime'=>'desc'))->field("article_articleTitle, article_articleTime, article_articleId")->page($_GET['p'].',8')->select();
                    $count = $lists->where('article_articlePlateId = 3 AND article_articleBlockId = 2')->count();
                $page = new \Think\Page($count, 8);
                $show = $page->show();
                return array('list'=>$list, 'show'=>$show);
                break;
            }
            case '3_3' : {
                    $list = $lists->where('article_articlePlateId = 3 AND article_articleBlockId = 3')->order(array('article_articleTime'=>'desc'))->field("article_articleTitle, article_articleTime, article_articleId")->page($_GET['p'].',8')->select();
                    $count = $lists->where('article_articlePlateId = 3 AND article_articleBlockId = 3')->count();
                $page = new \Think\Page($count, 8);
                $show = $page->show();
                return array('list'=>$list, 'show'=>$show);
                break;
            }
            case '3_4' : {
                    $list = $lists->where('article_articlePlateId = 3 AND article_articleBlockId = 4')->order(array('article_articleTime'=>'desc'))->field("article_articleTitle, article_articleTime, article_articleId")->page($_GET['p'].',8')->select();
                    $count = $lists->where('article_articlePlateId = 3 AND article_articleBlockId = 4')->count();
                $page = new \Think\Page($count, 8);
                $show = $page->show();
                return array('list'=>$list, 'show'=>$show);
                break;
            }
            default : {
                return false;
            }
        }
    }

    /*
 *  修改函数
 * */
    public function modify(){
        $id = $_GET['Id'];
        $article = M('article_master');
        return $article->where("article_articleId ='".$id."'")->order('article_articleId')->field('article_articleId, article_articleTitle, article_articleContent')->select();
    }
}