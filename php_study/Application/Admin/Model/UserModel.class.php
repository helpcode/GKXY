<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model{
    public function submit(){
        $action = $_GET('id');
    }
}