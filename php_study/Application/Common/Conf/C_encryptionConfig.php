<?php
return array(
    /*
     *  这里是加密所需要的Salt内容
     * */

    'SALT_COOKIEPACKAGE'    =>      'Q?,0$L>+j8?o',     //cookie字符串第一轮加密密钥
    'SALT_COOKIE'       =>      'k_^s5-d?C|2k+',        //cookie字符串第二轮加密密钥 同时也是第二轮的SALT（MD5）
);