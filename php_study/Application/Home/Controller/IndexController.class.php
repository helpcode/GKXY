<?php
namespace Home\Controller;
use Home\Api\pageDataApi;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $title = '怪客学院-官网';
        $article = new pageDataApi();
        $data = $article->provideData();
        $this ->assign('root',__ROOT__);
        $this->assign('data', $data);
        $this->assign('title', $title);
        $this->display();
    }
    public function php_learn(){
        $title = 'PHP学习-怪客学院';
        $article = new pageDataApi();
        $data = $article->provideData();
        $this->assign('data', $data);
        $this->assign('title', $title);
        $this->display();
    }
    public function web_learn(){
        $title = '前端学习-怪客学院';
        $article = new pageDataApi();
        $data = $article->provideData();
        $this ->assign('root',__ROOT__);
        $this->assign('data', $data);
        $this->assign('title', $title);
        $this->display();
    }
    public function developer(){
        $title = '开发者资讯-怪客学院';
        $article = new pageDataApi();
        $data = $article->provideData();
        $hot = $article->hotNews();
        $this->assign('data', $data);
        $this->assign('title', $title);
        $this->assign('hot', $hot);
        $this->display();
    }
    public function details(){
        $article = new pageDataApi();
        $data = $article->contentPage();
        if(empty($data[0][0]['article_articlecontent'])){
            $this->error('这个页面走丢了，即将返回上一页...','javascript:history.back(-1);',3);
        } else {
            $title = $data[0][0]['article_articletitle'];
            $hot = $article->hotNews();
            $this->assign('title', $title);
            $this->assign('data', $data);
            $this->assign('hot', $hot);
            $this->display();
        }
    }
}