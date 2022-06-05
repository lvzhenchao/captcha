<?php
require_once "vendor/autoload.php";

session_start();

$obj = new \Lzc\Captcha\Captcha();//切记引入命名空间

$obj->create(5);

//http://www.zzvips.com/article/89449.html