
<div id="headerbox">

<div id="logo">
<div id="logopic"><a href="/"><img src="/upload/layout/<?=$logopic?>"  /></a></div>
<div id="langbox"><img src="/inc/pics/langmenu.jpg" border="0" usemap="#Map"  />
  <map name="Map" id="Map">
    <area shape="rect" coords="10,10,68,24" href="/" />
    <area shape="rect" coords="77,9,132,23" href="/jp/" />
  </map>
</div><!--end searchbox-->
</div><!--end logo-->

<div id="headermenubox">
<div id="menu">
<ul  class="mainmenu">
<li  class="submenu"><a href="/"><p>关于我们<br>About us</p></a>
<ul >
<li><a href="/" class="subleftlink">酒店介绍</a></li>
<li><a href="/index.php?pageid=2" class="subleftlink">优惠活动</a></li>  
<li><a href="/news/news.php?ndir=5" class="subleftlink">馆内新闻</a></li>
<li><a href="/index.php?pageid=3" class="subleftlink">位置地图</a></li>  
<li><a href="/index.php?pageid=4" class="subleftlink">周边导游</a></li>  
<li><a href="/index.php?pageid=5" class="subleftlink">招聘信息</a></li>  
<li><a href="/feedback.php?pageid=12" class="subleftlink">留言板</a></li>  
</ul>
</li>

<li class="submenu"><a href="/accom/accom.php?pageid=6">客房信息<br>Accommodation</a>
<ul >
<li><a href="/accom/accom.php?pageid=6" class="subleftlink">客房简介</a></li>
</ul>
</li>

<li class="submenu"><a href="/product/product.php?pdir=2">沙珑餐厅<br>Chalon</a>
<ul >
	<?php for($i=0;$i<sizeof($arrprodslist1);$i++){?>
    <li><a href="/product/product.php?pdir=<?=$arrprodslist1[$i][id_proddir]?>"><?=$arrprodslist1[$i][name]?></a></li>
    <?php }?>
    <li style=" margin-top:10px;height:90px;"><img src="/inc/pics/img01.png"></li>  
</ul>
</li>

<li class="submenu"><a href="/news/news.php?ndir=2">站点新闻<br>Site News</a></li>

<li class="submenu"><a href="/product/product.php?pdir=9">铁板烧<br>Teppanyaki</a>
<ul >
	<?php for($i=0;$i<sizeof($arrprodslist2);$i++){?>
    <li><a href="/product/product.php?pdir=<?=$arrprodslist2[$i][id_proddir]?>"><?=$arrprodslist2[$i][name]?></a></li>
    <?php }?>
<li style=" margin-top:10px;height:90px;"><img src="/inc/pics/img02.png"></li>  
</ul>
</li>

<li class="submenu"><a href="/banquet/banquet.php?pageid=7">会议设施<br>Banquet</a>
<ul >
<li><a href="/banquet/banquet.php?pageid=7" class="subleftlink">会议室</a></li>
<li><a href="/banquet/banquet.php?pageid=8" class="subleftlink">宴会厅</a></li>  
<li><a href="/banquet/banquet.php?pageid=9" class="subleftlink">商务中心</a></li>
</ul>
</li>

<li class="submenu"><a href="/fitness/fitness.php?pageid=10">按摩中心<br>Fitness</a>
<ul >
<li><a href="/fitness/fitness.php?pageid=10" class="subleftlink">按摩厅</a></li>
<li><a href="/fitness/fitness.php?pageid=11" class="subleftlink">按摩价格</a></li>  
</ul>
</li>

</ul>
</div>

</div><!--end headermenubox-->



</div><!--end headerbox-->

<script>
$(".mainmenu > .submenu").hover(
	function(){$(this).addClass("hover");},function(){$(this).removeClass("hover");}
);
</script>