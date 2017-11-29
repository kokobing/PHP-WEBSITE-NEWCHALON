<?php
require "./inc/cn_index_core.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if($str[pagetitle]!=''){echo $str[pagetitle];}else{echo $setinfo[title];}?></title>
<meta name="keywords" content="<?php if($str[keywords]!=''){echo $str[keywords];}else{echo $setinfo[keywords];}?>" />
<meta name="description" content="<?php if($str[description]!=''){echo $str[description];}else{echo $setinfo[description];}?>" />
<link rel="stylesheet" type="text/css" href="./inc/css/resetui.css">
<link rel="shortcut icon" href="favicon.ico">

<script type="text/javascript" src="./inc/js/jquery.js"></script>
<script src="./inc/js/slides.min.jquery.js"></script>
<script>
$(document).ready(

  function() { 

	
			$('#slides').slides({

				preload: true,

				preloadImage: '/inc/pics/loading.gif',

				play: 5000,

				pause: 2500,

				effect: 'fade, fade',

				hoverPause: true

			});

  }

);
</script>

</head>

<body>

 <?php require "header.php"; ?>
 
<div id="mainbanner">
    <div id="mainadv">
    
        	<div id="container">
              <div id="slides">
				<div class="slides_container">
                <?php for($i=0;$i<sizeof($banners);$i++){?>
					<div class="slide">
                         <a href="<?=$banners[$i][url]?>"><img src="/upload/layout/<?=$banners[$i][pic]?>" width="950"  border="0"></a>
				   </div>
				<?php }?>

		    	</div>
			</div>
	</div>
    
    </div>
</div>

<div class="maincontent">
    <div class="maincontentbox">
    
        <div class="leftcontent">
		 <?php require "leftmenu.php"; ?>
        </div>

        <div class="rightcontent">
            <div class="grayline"></div>
            <div class="abouttitlepic"><img src="/inc/pics/contact_imgchi_ttl.gif" width="690" height="36" border="0"></div>
            
            <div class="aboutcontentb">



<table width="690" border="0" align="center" cellpadding="0" cellspacing="0" id="table13">
            <tr>
              <td height="50" valign="top" bgcolor="#FFFFFF"><table width="632" height="363" border="0" align="center" cellpadding="0" cellspacing="0" id="table14">
                  <tr>
                    <td width="632" valign="top"><img border="0" src="/inc/pics/contact_imgchi_03.gif" width="245" height="19"> <br>
                        <table width="100%" height="369" border="0" cellpadding="3" cellspacing="4" bgcolor="F3F3F3" id="table15">
                          
                          
                          <tr>
                            <td bgcolor="#FFFFFF"><TABLE cellSpacing=0 cellPadding=0 width=675 border=0 id="table16">
                              <TBODY>
                                <TR>
                                  <TD height=30>　</TD>
                                </TR>
                              </TBODY>
                            </TABLE>
                            <!-----| Indicator | End ----->
                              <!--------------------------------------------------------------------------------->
                              <!--                            ::: Contents  :::                                -->
                              <!--------------------------------------------------------------------------------->
                              <!----10&#50900; 11&#51068; &#49688;&#51221; ----->
                            <TABLE cellSpacing=0 cellPadding=0 width=675 border=0 id="table17">
                              <TBODY>
                                <TR>
                                  <TD vAlign=top height=123><IMG 
                  src="/inc/pics/contactImg01.gif" width="339" height="103"></TD>
                                  <TD vAlign=top><a title="New Chalon Hotel" href="mailto:services@newchalon.com"> <IMG height=103 
                  src="/inc/pics/contactImg02.gif" width=336 
              border=0></a></TD>
                                </TR>
                              </TBODY>
                            </TABLE>
                              <br>
                            <table width="587" height="223" border="0" align="center" cellpadding="0" cellspacing="0" class="TD1" id="table18">
                              <tr>
                                <td width="69" height="21" valign="top" bgcolor="F3F3F3"><div align="center">姓&nbsp; 名</div></td>
                                <td width="5" valign="top"></td>
                                <td width="511" height="13" valign="top"><input class="TextBorder" maxlength="50" name="txtname" size="23" id="name" style="background-color: #FFFFFF; border-color: #cccccc; border-style: solid; border-width: 0px 0px 1px"></td>
                              </tr>
                              <tr>
                                <td height="7" valign="top"><img src="/inc/pics/space.gif" width="69" height="7"></td>
                                <td height="7" valign="top"></td>
                                <td height="7" valign="top"></td>
                              </tr>
                              <tr>
                                <td width="69" height="21" valign="top" bgcolor="F3F3F3"><p align="center"> 电&nbsp; 话</td>
                                <td valign="top">　</td>
                                <td valign="top"><input class="TextBorder" maxlength="50" name="txttel" size="27" id="tel" style="background-color: #FFFFFF; border-color: #cccccc; border-style: solid; border-width: 0px 0px 1px"></td>
                              </tr>
                              <tr>
                                <td width="69" height="7" valign="top"><img src="/inc/pics/space.gif" width="69" height="7"></td>
                                <td valign="top"></td>
                                <td valign="top"></td>
                              </tr>
                              <tr>
                                <td width="69" height="21" valign="top" bgcolor="F3F3F3"><div align="center">电子邮件</div></td>
                                <td valign="top">　</td>
                                <td valign="top"><input class="TextBorder" maxlength="50" name="txtemail" size="32" id="email" style="background-color: #FFFFFF; border-color: #cccccc; border-style: solid; border-width: 0px 0px 1px"></td>
                              </tr>
                              <tr>
                                <td width="69" height="7" valign="top"><img src="/inc/pics/space.gif" width="69" height="7"></td>
                                <td valign="top"></td>
                                <td valign="top"></td>
                              </tr>
                              <tr>
                                <td width="69" height="129" valign="top" bgcolor="F3F3F3"><div align="center"> 　
                                      <p><br>
                                            内&nbsp; 容</p>
                                </div></td>
                                <td height="129" valign="top"></td>
                                <td height="129" valign="top"><textarea name="body" cols="80" rows="9" wrap="PHYSICAL" id="content" style="background:transparent; border-color: #cccccc; border-style: solid; border-width: 1px 1px 1px"></textarea></td>
                              </tr>
                              <tr>
                                <td whidt="69" height="9" valign="top"><img src="/inc/pics/space.gif" width="69" height="9"></td>
                                <td valign="top"></td>
                                <td valign="top"></td>
                              </tr>
                              <tr>
                                <td height="25" valign="top">　</td>
                                <td valign="top"></td>
                                <td valign="top"><div align="right">
                                    <input name="cmdok" type="submit"   value=" 发 送 " class="put1" onclick="sendmsg()">
                                  &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input name="cmdcancel"  type="reset" value=" 取 消 " class="put1" >
                                  &nbsp;&nbsp;&nbsp;</div></td>
                              </tr>
                            </table>
                            
                            
      <script language="JavaScript">
function sendmsg() {
	                    if($.trim($("#name").val())==''){alert('请输入您的姓名');return false;}
	                    if($.trim($("#tel").val())==''){alert('请输入您的联系电话');return false;}
						if($.trim($("#email").val())=='' || !$("#email").val().match( /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/ )){alert('请输入正确的邮箱地址！');return false;}
						if($.trim($("#content").val())==''){alert('请输入您的留言信息');return false;}	
						
						
						$.post('/ajax_feedback.php',{tel:$("#tel").val(),content:$("#content").val(),name:$("#name").val(),email:$("#email").val()},function(data) {
                               var myjson = '';eval('myjson=' + data + ';');
                               alert(myjson.info);
							   window.location.href='/feedback.php?pageid=12';
                         });

}
</script>    
                            
                            
                              <br>
                            </td>
                          </tr>
                      </table></td>
                  </tr>
                </table>
                  <table width="690" border="0" align="center" cellpadding="0" cellspacing="0" id="table19">
                    <tr>
                      <td><img src="/inc/pics/space.gif" width="32" height="3"></td>
                      <td width="632" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0" id="table20">
                          <tr>
                            <td><img src="/inc/pics/contact_img_04.gif" width="631" height="20"></td>
                          </tr>
                          <tr>
                            <td><table width="100%" border="0" cellpadding="0" cellspacing="0" background="/inc/pics/contact_img_07.gif" class="TD1" id="table21">
                                <tr>
                                  <td width="4%"><img src="/inc/pics/space.gif" width="16" height="3"></td>
                                  <td width="66%">地 &nbsp;址：上海市松江区梅家浜路1501号&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>                                    电&nbsp;话: 0086-21-3777-3939 传真:0086-21-3777-3535<br>
                                                                        E-Mail: <a href="mailto:services@newchalon.com"> services@newchalon.com</a></span></td>
                                  <td width="7%">　</td>
                                  <td width="23%"><img src="/inc/pics/contact_img_06.gif" width="91" height="99"></td>
                                </tr>
                            </table></td>
                          </tr>
                          <tr>
                            <td><img src="/inc/pics/contact_img_05.gif" width="631" height="10"></td>
                          </tr>
                        </table>
                          <br>
                      </td>
                      <td width="4%"><img src="/inc/pics/space.gif" width="29" height="3"></td>
                    </tr>
                </table></td>
            </tr>
        </table>




            </div>
        </div>
            <div style="clear:both"></div>
    </div>
</div>

 <?php require "footer.php"; ?>





</body>
</html>
