<?php
require "../inc/config.php";
require "../inc/function.class.php";
require "../inc/jp_header_core.php";//页头 页脚调用 重复调用 如果买个页都涉及 可以写到这里

$pageid=$_GET[pageid];//获取伪静态传递参数
if(trim($pageid)==''){$pageid=13;}
$str=getpagesetinfo($pageid,'title,content,intro,pagetitle,keywords,description');//获得版面管理的内容 标题 页面标题 等

$banners=getpagesetpicnuminfo($pageid,4,'opicname as pic,url');


?>