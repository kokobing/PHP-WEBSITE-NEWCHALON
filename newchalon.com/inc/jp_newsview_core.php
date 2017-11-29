<?php
require "../../inc/config.php";
require "../../inc/function.class.php";
require "../../inc/jp_header_core.php";//页头 页脚调用 重复调用 如果买个页都涉及 可以写到这里

$banners=getlayoutallpic(8);//取出所有banner图

//新闻内容
$strSQL = "select a.*,b.name from newsinfo as a left join newsdir as b on a.id_newsdir=b.id_newsdir where a.id_newsinfo='".$_GET[nid]."'  " ;
$objDB->Execute($strSQL);
$onenews=$objDB->fields();


?>