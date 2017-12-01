<?php
/**
 * Created by PhpStorm.
 * User: gaoxin
 * Date: 2017/11/30
 * Time: 下午3:55
 */
header('content-type:text/html;charset=utf8');
$user=$_POST["user"];
$pass=$_POST["pass"];

if($user=='admin'){
    if($pass=='123456'){
        echo "登录成功1<a href='main.html'>点击立即跳转</a>";
    }else{
        echo "密码错误！<a href='1130h.html'>点击立即返回</a>";
    }
}else{
    echo "账号不存在！<a href='1130h.html'>点击立即返回</a>";
}