            <div class="mainlefta" style="margin-top:15px;"><img src="/inc/pics/3dtour.jpg" width="185"  border="0"></div>
            <div class="mainlefta"><img src="/inc/pics/sub1_about_12.gif" width="185"  border="0"></div>
            <div class="mainlefta"><img src="/inc/pics/sub3_res_01jp.gif" width="185"  border="0"></div>
            
            <div class="mainleftb">
                <ul>
                <?php for($i=0;$i<sizeof($arrprodslist);$i++){?>
                    <li><a href="/jp/product/product.php?pdir=<?=$arrprodslist[$i][id_proddir]?>"><?=$arrprodslist[$i][name]?></a></li>
                <?php }?>
                </ul>
            </div>
