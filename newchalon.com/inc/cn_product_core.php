<?php
require "../inc/config.php";
require "../inc/function.class.php";
require "../inc/pagenav.class.php";
require "../inc/cn_header_core.php";//页头 页脚调用

//取banner图
$strSQL="SELECT fatherid,name FROM productdir WHERE  id_proddir='".$_GET[pdir]."' ";
$objDB->Execute($strSQL);
$arrproductdir=$objDB->fields();

if($arrproductdir[fatherid]==1){$layoutid=3;}elseif($arrproductdir[fatherid]==8){$layoutid=4;}
$banners=getlayoutallpic($layoutid);//取出所有banner图

$strSQL="SELECT name FROM productdir WHERE  id_proddir='".$arrproductdir[fatherid]."' ";
$objDB->Execute($strSQL);
$arrproductfatherdir=$objDB->fields();




$arrprodslist=getproductdir2($arrproductdir[fatherid]);//所有二级目录

?>