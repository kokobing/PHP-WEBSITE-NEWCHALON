<?php  
require "../inc/config.php";
require "../inc/function.class.php";

date_default_timezone_set('Asia/Shanghai'); 

$request_tel = $_REQUEST["tel"];
$request_content = $_REQUEST["content"];
$request_name = $_REQUEST["name"];
$request_email = $_REQUEST["email"];


$subject="伝言板 :".$request_name." -  時間：".date("Y-m-d G:i:s");//主题
//内容
$body="
<br><br>
	   
氏 名 ：".$request_name."<br>
電 話 : ".$request_tel."<br>
電子メール : ".$request_email."<br><br>
内 容 :".nl2br($request_content)."<br><br>

".date("Y")."-".date("m")."-".date("d")."";



$strSQL="INSERT INTO newsinfo(title,content,id_newsdir,indate,newsdate) values('$subject','$body','4',now(),now())";
$objDB->Execute($strSQL);



  $arr['info']="伝言の発送は成功しました。";
  $myjson= json_encode($arr);
  echo $myjson;




?>

