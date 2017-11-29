<?php
require "../inc/config.php";
require "../inc/function.class.php";
require "../inc/cn_header_core.php";//页头 页脚调用

//抽出单个产品
$strSQL = "SELECT * from productinfo where id_prodinfo=$_GET[pid] and dele='1'";   
$objDB->Execute($strSQL);
$oneproduct=$objDB->fields();

$arrpic=getproductallpic($_GET[pid]);



//初始产品价格 图片 每次下单默认最后一个产品的价格及图片
$strSQL = "SELECT id_prodinfo,title from productinfo where id_proddir=$_GET[id2] ORDER BY RAND() limit 4";   
$objDB->Execute($strSQL);
$randproducts=$objDB->GetRows();


?>