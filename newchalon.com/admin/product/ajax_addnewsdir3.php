<?php  
require "../inc/config_admin.php";
  //file_put_contents('aa.txt', $id);  
if(isset($_SESSION[user_id])){//if usrer login
$c_url='/admin/product/product_dir.php';//关联主文件
require "../inc/config_perm_ajax.php";//一级目录和二级文件的访问权限判断
  if($ajax_onuserperm_addprem=='1'){
  $message = $_REQUEST["passmessage"];
  $fatherid = $_REQUEST["fatherid"];

  //查出父目录语言信息
  $strSQL="SELECT lang FROM productdir WHERE id_proddir='".$fatherid."' ";
  $objDB->Execute($strSQL);
  $onefatherlang=$objDB->fields();

  $strSQL="INSERT INTO productdir(name,level,fatherid) VALUES('".$message."','3','".$fatherid."') ";
  $objDB->Execute($strSQL);//三级菜单名称入库
  
  $id = $objDB->getInsertID();//获取刚入库记录的ID
  $strSQL="update productdir set ordernum='".$id."',lang='".$onefatherlang[lang]."' where id_proddir='".$id."'";
  $objDB->Execute($strSQL);//更改入库记录的ORDER顺序
  
  $arr['info']="添加成功!";
  $myjson= json_encode($arr);
  echo $myjson;
  }
}
?>

