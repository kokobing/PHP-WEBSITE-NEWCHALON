
<div id="headerbox">

<div id="logo">
<div id="logopic"><a href="/jp/"><img src="/upload/layout/<?=$logopic?>"  /></a></div>
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
<li  class="submenu"><a href="/jp/"><p>私達に関して<br>About us</p></a>
<ul >
<li><a href="/jp/" class="subleftlink">ホテル紹介</a></li>
<li><a href="/jp/index.php?pageid=14" class="subleftlink">特恵活動</a></li>  
<li><a href="/jp/news/news.php?ndir=26" class="subleftlink">館内ニュース</a></li>
<li><a href="/jp/index.php?pageid=15" class="subleftlink">位置地図</a></li>  
<li><a href="/jp/index.php?pageid=16" class="subleftlink">周辺ガイド</a></li>  
<li><a href="/jp/index.php?pageid=17" class="subleftlink">求人情報</a></li>  
<li><a href="/jp/feedback.php?pageid=24" class="subleftlink">伝言板</a></li>  
</ul>
</li>

<li class="submenu"><a href="/jp/accom/accom.php?pageid=18">客室の情報<br>Accommodation</a>
<ul >
<li><a href="/jp/accom/accom.php?pageid=18" class="subleftlink">客室紹介</a></li>
</ul>
</li>

<li class="submenu"><a href="/jp/product/product.php?pdir=13">沙瓏レストラン<br>Chalon</a>
<ul >
	<?php for($i=0;$i<sizeof($arrprodslist1);$i++){?>
    <li><a href="/jp/product/product.php?pdir=<?=$arrprodslist1[$i][id_proddir]?>"><?=$arrprodslist1[$i][name]?></a></li>
    <?php }?>
    <li style=" margin-top:10px;height:90px;"><img src="/inc/pics/img01.png"></li>  
</ul>
</li>

<li class="submenu"><a href="/jp/news/news.php?ndir=25">関連ニュース<br>Site News</a></li>

<li class="submenu"><a href="/jp/product/product.php?pdir=19">鉄板焼き<br>Teppanyaki</a>
<ul >
	<?php for($i=0;$i<sizeof($arrprodslist2);$i++){?>
    <li><a href="/jp/product/product.php?pdir=<?=$arrprodslist2[$i][id_proddir]?>"><?=$arrprodslist2[$i][name]?></a></li>
    <?php }?>
<li style=" margin-top:10px;height:90px;"><img src="/inc/pics/img02.png"></li>  
</ul>
</li>

<li class="submenu"><a href="/jp/banquet/banquet.php?pageid=19">会議施設<br>Banquet</a>
<ul >
<li><a href="/jp/banquet/banquet.php?pageid=19" class="subleftlink">会議室</a></li>
<li><a href="/jp/banquet/banquet.php?pageid=20" class="subleftlink">宴会場</a></li>  
<li><a href="/jp/banquet/banquet.php?pageid=21" class="subleftlink">ビジネスセンター</a></li>
</ul>
</li>

<li class="submenu"><a href="/jp/fitness/fitness.php?pageid=22">マッサージセンター<br>Fitness</a>
<ul >
<li><a href="/jp/fitness/fitness.php?pageid=22" class="subleftlink">マッサージ</a></li>
<li><a href="/jp/fitness/fitness.php?pageid=23" class="subleftlink">SPAケアー</a></li>  
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