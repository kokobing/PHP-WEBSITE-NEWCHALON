<?php
require "../inc/config.php";
require "../inc/function.class.php";
require "../inc/cn_header_core.php";//页头 页脚调用 重复调用 如果买个页都涉及 可以写到这里

$str=getpagesetinfo($_GET[pageid],'content,title,pagetitle,keywords,description');

$pageid=$_GET[pageid];

?>