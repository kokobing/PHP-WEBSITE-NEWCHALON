<?php
require "../../inc/jp_accom_core.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if($str[pagetitle]!=''){echo $str[pagetitle];}else{echo $setinfo[title];}?></title>
<meta name="keywords" content="<?php if($str[keywords]!=''){echo $str[keywords];}else{echo $setinfo[keywords];}?>" />
<meta name="description" content="<?php if($str[description]!=''){echo $str[description];}else{echo $setinfo[description];}?>" />
<link rel="stylesheet" type="text/css" href="../../inc/css/resetui.css">
<link rel="shortcut icon" href="/favicon.ico">

<script type="text/javascript" src="/inc/js/jquery.js"></script>
<script src="/inc/js/slides.min.jquery.js"></script>
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

 <?php require "../header.php"; ?>
 
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
            <div class="abouttitlepic"><img src="/inc/pics/img2.gif" width="690" height="36" border="0"></div>
            
            <div class="aboutcontentb">
              <p>
			  <?=$str[content]?>
              </p>
              <div id="backbutton"><a href="javascript:void(0)"  onClick=' $("html,body").animate( {scrollTop:0},"slow",function() {return false;});'>トップへ戻る</a></div>

            </div>
        </div>
            <div style="clear:both"></div>
    </div>
</div>

 <?php require "../footer.php"; ?>





</body>
</html>
