<?php
namespace Admin\Controller;
use Admin\Api\UserApi;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $user = new UserApi();
        $user->isLogin();
        $this->assign("title", "怪客学院管理首页");
        $this->display();
    }
    public function table(){
        $list = new UserApi();
        $result = $list->showList();
        $this->assign('list', $result['list']);
        $this->assign('page', $result['show']);
        $this->assign("title", "怪客学院管理首页");
        $this->display();
    }

    /**
     * 编辑器的控制器
     */
    public function edit(){
        if($_GET['do'] == 'mod'){
            $id = $_GET['Id'];
            $content = $_POST['content'];
            $title = $_POST['title'];
            $dataList = array(
                'article_articleContent' => "$content",
                'article_articleTitle' => "$title",
            );
            $article = M("article_master");
            $article->where("article_articleId='".$id."'")->setField($dataList);
            header('location:table?do=create&id=1_1');
        }
        else
        {
            $article = new UserApi();
            $data = $article->modify();
            $this->assign('data', $data);
            $this->display();
        }

    }
}