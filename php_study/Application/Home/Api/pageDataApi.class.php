<?php
namespace Home\Api;
use Think\Think;
class pageDataApi{

    /**
     *  给主页提供数据函数
     */
    public function provideData(){
        $str = $this->choiceBlock();
        return $this->queryData($str);
    }

    /**
     * 选择版函数
     */
    public function choiceBlock(){
        //echo ACTION_NAME;exit;
        switch (ACTION_NAME) {
            case index:{
                return  $str = array(
                    0   =>  array(
                        0   =>  "article_articlePlateId = 1 AND article_articleBlockId = 1",
                        1   =>  "4",
                    ),
                    1   =>  array(
                        1   =>  "article_articlePlateId = 1 AND article_articleBlockId = 2",
                        2   =>  "4",
                    ),
                    2   =>  array(
                        2   =>  "article_articlePlateId = 1 AND article_articleBlockId = 3",
                        3   =>  "6",
                    ),
                    3   =>  array(
                        3   =>  "article_articlePlateId = 1 AND article_articleBlockId = 4",
                        4   =>  "3",
                    ),
                );
                break;
            }
            case web_learn:{
                return  $str = array(
                    0   =>  array(
                        0   =>  "article_articlePlateId = 2 AND article_articleBlockId = 1",
                        1   =>  "12 ",
                    ),
                    1   =>  array(
                        1   =>  "article_articlePlateId = 2 AND article_articleBlockId = 2",
                        2   =>  "10",
                    ),
                );
                break;
            }
            case developer:{
                return  $str = array(
                    0   =>  array(
                        0   =>  "article_articlePlateId = 3 AND article_articleBlockId = 1",
                        1   =>  "4",
                    ),
                    1   =>  array(
                        1   =>  "article_articlePlateId = 3 AND article_articleBlockId = 2",
                        2   =>  "12",
                    ),
                    2   =>  array(
                        2   =>  "article_articlePlateId = 3 AND article_articleBlockId = 3",
                        3   =>  "12",
                    ),
                    3   =>  array(
                        3   =>  "article_articlePlateId = 3 AND article_articleBlockId = 4",
                        4   =>  "12",
                    ),
                );
                break;
            }
        }
    }

    /**
     * 查询需要数据函数
     */
    public function queryData($str){
        $data = array();
        $article = M(article_master);
        for($i = 0; $i < count($str); $i++){
            $data[$i] = $article->where($str[$i][$i])->field('article_articleId, article_articleTitle, article_articleContent, article_articleTime,article_articleimg')->limit($str[$i][$i+1])->order('article_articleId desc')->select();
        }
        return $data;
    }

    /**
     * 最热新闻
     */
    public function hotNews(){
        $plate = ACTION_NAME;
        if(!empty($plate)){
            $article = M(article_master);
            $data = $article->field('article_articleId, article_articleTitle')->limit(20)->order('article_articleId desc')->select();
            return $data;
        }
        else{
            return;
        }
    }

    /**
     *  内容页
     */
    public function contentPage(){
        $id = $_GET['nid'];
        $str = array(
            0   =>  array(
                0   =>  "article_articleId='".$id."'",
                1   =>  "1",
            ),
        );
        return $this->queryData($str);
    }

}