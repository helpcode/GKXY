<?php
namespace Common\Util;
/*
* cookie类
* 所有存取cookie的原形
*/
class Cookie
{
    /*
     * 生成cookie内容
     * */
    public function log($userId, $userEmail)
    {
        return array(
            'userId' => $userId,
            'userEmail' => $userEmail,
        );
    }

    /*
     * 将Cookie转为字符串
     * */
    public function logCreate($log)
    {
        return serialize($log);
    }

    /**
     * Cookie加密方法
     * @param string $data 要加密的字符串
     * @param string $key 加密密钥
     * @param int $expire 过期时间 单位 秒
     * @return string
     * @author 麦当苗儿 <zuojiazi@vip.qq.com>
     * @copyright OneThink
     */
    public function encryptCookie($data, $key = '', $expire = 0)
    {
        $key = md5(empty($key) ? C('DATA_AUTH_KEY') : $key);
        $data = base64_encode($data);
        $x = 0;
        $len = strlen($data);
        $l = strlen($key);
        $char = '';

        for ($i = 0; $i < $len; $i++) {
            if ($x == $l) $x = 0;
            $char .= substr($key, $x, 1);
            $x++;
        }

        $str = sprintf('%010d', $expire ? $expire + time() : 0);

        for ($i = 0; $i < $len; $i++) {
            $str .= chr(ord(substr($data, $i, 1)) + (ord(substr($char, $i, 1))) % 256);
        }
        return str_replace(array('+', '/', '='), array('-', '_', ''), base64_encode($str));
    }

    /**
     * Cookie解密方法
     * @param  string $data 要解密的字符串 （必须是think_encrypt方法加密的字符串）
     * @param  string $key 加密密钥
     * @return string
     * @author 麦当苗儿 <zuojiazi@vip.qq.com>
     * @@copyright OneThink
     */
    public function decryptCookie($data, $key = '')
    {
        $key = md5(empty($key) ? C('DATA_AUTH_KEY') : $key);
        $data = str_replace(array('-', '_'), array('+', '/'), $data);
        $mod4 = strlen($data) % 4;
        if ($mod4) {
            $data .= substr('====', $mod4);
        }
        $data = base64_decode($data);
        $expire = substr($data, 0, 10);
        $data = substr($data, 10);

        if ($expire > 0 && $expire < time()) {
            return '';
        }
        $x = 0;
        $len = strlen($data);
        $l = strlen($key);
        $char = $str = '';

        for ($i = 0; $i < $len; $i++) {
            if ($x == $l)
                $x = 0;
            $char .= substr($key, $x, 1);
            $x++;
        }

        for ($i = 0; $i < $len; $i++) {
            if (ord(substr($data, $i, 1)) < ord(substr($char, $i, 1))) {
                $str .= chr((ord(substr($data, $i, 1)) + 256) - ord(substr($char, $i, 1)));
            } else {
                $str .= chr(ord(substr($data, $i, 1)) - ord(substr($char, $i, 1)));
            }
        }
        return base64_decode($str);
    }

    /*
     *  保存Cookie
     * */
    public function setCookie($name,$value, $expire, $path){
        $value = serialize($value);
        $value = $this->encryptCookie($value, C("SALT_COOKIEPACKAGE"));
        $value = $this->encryptCookie(($value.(md5(C("SALT_COOKIE")))), C("SALT_COOKIE"));
        setcookie($name, $value, $expire, $path);
        return;
    }

    /*
     *  Cookie拆包函数
     * */
    public function unPcking($log){
        //echo $log;exit;//确定log和最后存的cookie是否一样
        //$value = unserialize($this->decryptCookie(substr($this->decryptCookie($log, C("SALT_COOKIE")), 0, strlen($log) - 20), C("SALT_COOKIEPACKAGE")));
        $value = $this->decryptCookie($log, C("SALT_COOKIE"));
        $value = substr($value,0 , strlen($value)-strlen(md5(C("SALT_COOKIE"))));
        $value = $this->decryptCookie($value, C("SALT_COOKIEPACKAGE"));
        $value = unserialize($value);
        return $value;
    }
}