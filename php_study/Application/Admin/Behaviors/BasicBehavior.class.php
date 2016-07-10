<?php
namespace Admin\Behaviors;
use Common\Util\Cookie;
use Think\Controller;
class BasicBehavior extends Controller{
    function __construct(){
        parent::__construct();
        $get_do = I('get.do', '', 'strip_tags,htmlspecialchars');
        if(!empty($get_do)){
            method_exists($this, $get_do) && $this->$get_do();
        }
        return;
    }

    /**
     * 注销按钮被单击
     */
    function logout(){
        setcookie('log', null, time()-3600*24, '/');
        redirect('/php_study/',1, 'LoginOut of Success...');
        exit;
    }

    public function create(){
        /* 确定用户 */
        $cookie = new Cookie();
        $user = ($cookie->unPcking($_COOKIE['log']));
        $user = $user['userId'];
        $id = $_GET['id'];

        /* 获取内容 */
        $cookie = new Cookie();
        $user = $cookie->unPcking($_COOKIE['log']);
        $user = $user['userId'];    //用户Id
        $content = $_POST['content'];   //内容
        $title = $_POST['title'];   //标题
        $time = date('Y-m-d h:i:s');
        $this->write($user, $title, $content, $time, $id);
        
    }

    public function modify(){
        /* 确定用户 */
        $cookie = new Cookie();
        $user = ($cookie->unPcking($_COOKIE['log']));
        $user = $user['userId'];
        $id = $_GET['id'];

        /* 获取内容 */
        $cookie = new Cookie();
        $user = $cookie->unPcking($_COOKIE['log']);
        $user = $user['userId'];    //用户Id
        $content = $_POST['content'];   //内容
        $title = $_POST['title'];   //标题

        $this->write($user, $title, $content, $id);
    }

    public function write($user, $title, $content, $time, $id){
        $article = M('article_master');

        if(empty($time)){
            $dataList[] = array('article_userId' => $user, 'article_articleTitle' => $title, 'article_articleContent' => $content);
        }
        else{
            $dataList[] = array('article_userId' => $user, 'article_articleTitle' => $title, 'article_articleContent' => $content, 'article_articleTime' => $time);
        }
        //var_export($dataList);exit;

        if(!empty($title)) {
            switch ($id) {
                case '1_1': {
                    $dataList[0]['article_articlePlateId'] = 1;
                    $dataList[0]['article_articleBlockId'] = 1;
                    $article->addAll($dataList);
                    break;
                }
                case '1_2': {
                    $dataList[0]['article_articlePlateId'] = 1;
                    $dataList[0]['article_articleBlockId'] = 2;
                    $article->addAll($dataList);
                    break;
                }
                case '1_3': {
                    $dataList[0]['article_articlePlateId'] = 1;
                    $dataList[0]['article_articleBlockId'] = 3;
                    $article->addAll($dataList);
                    break;
                }
                case '1_4': {
                    $dataList[0]['article_articlePlateId'] = 1;
                    $dataList[0]['article_articleBlockId'] = 4;
                    $article->addAll($dataList);
                    break;
                }
                case '2_1': {
                    $dataList[0]['article_articlePlateId'] = 2;
                    $dataList[0]['article_articleBlockId'] = 1;
                    $article->addAll($dataList);
                    break;
                }
                case '2_2': {
                    $dataList[0]['article_articlePlateId'] = 2;
                    $dataList[0]['article_articleBlockId'] = 2;
                    $article->addAll($dataList);
                    break;
                }
                case '2_3': {
                    $dataList[0]['article_articlePlateId'] = 2;
                    $dataList[0]['article_articleBlockId'] = 3;
                    $article->addAll($dataList);
                    break;
                }
                case '3_1': {
                    $dataList[0]['article_articlePlateId'] = 3;
                    $dataList[0]['article_articleBlockId'] = 1;
                    $article->addAll($dataList);
                    break;
                }
                case '3_2': {
                    $dataList[0]['article_articlePlateId'] = 3;
                    $dataList[0]['article_articleBlockId'] = 2;
                    $article->addAll($dataList);
                    break;
                }
                case '3_3': {
                    $dataList[0]['article_articlePlateId'] = 3;
                    $dataList[0]['article_articleBlockId'] = 3;
                    $article->addAll($dataList);
                    break;
                }
                case '3_4': {
                    $dataList[0]['article_articlePlateId'] = 3;
                    $dataList[0]['article_articleBlockId'] = 4;
                    $article->addAll($dataList);
                    break;
                }
                default: {
                    return false;
                }
            }
        }
        else{
            return;
        }
    }

    /**
     * 删除按钮被单击
     */
    public function del(){
        echo "<script>alert('确认删除？');</script>";
        $id = $_GET['Id'];
        if(empty($id)){
            return;
        }
        else{
            $article = M('article_master');
            $article->where("article_articleId='".$id."'")->order('article_articleId')->delete();
            header('Location: '.$_SERVER['HTTP_REFERER']);
            return;
        }
    }
}