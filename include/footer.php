<?php
$len=count($arrPage);
$menu="";
/*for($i=0;$i<$len;$i++){
	$arrTemp=$arrPage[$i];
	if($arrTemp[6]=="Y"){
		$link=($arrTemp[4]=="Y")?PATH_HTTP.'?'.$arrTemp[0]:"#";
		$title=$arrTemp[1];
		$indexOf=$arrTemp[5];
		$parent=($indexOf=='0')?true:false;
		if(!$parent && ($i-1)==$indexOf) {$menu.="\n"."\r\t".'<ul>';}
		$selected=($pageNM==$arrTemp[0] || ($arrPage[$currentPage][5]==$i && $i>0))?'class="selected"':"";
		if($parent){
			if($i>0){
				if($arrPage[$i-1][5]!="0") {$menu.="\n"."\r\t".'</ul>';}
				$menu.='</section>';
			}
			$addClass=($i==18)?"class='flast'":'';
			$menu.="\n".'<section '.$addClass.'><h3><a href="'.$link.'" '.$selected.'>'.$title."</a></h3>";
		}
		else{ $menu.="\n"."\r\t".'<li><a href="'.$link.'" '.$selected.'>'.$title."</a></li>";}
	}
}
$menu.='</section>'."\n";
*/

for($i=0;$i<$len;$i++){
	$arrTemp=$arrPage[$i];
	if($arrTemp[6]=="Y"){
		$link=($arrTemp[4]=="Y")?PATH_HTTP.'?'.$arrTemp[0]:"#";
		$title=$arrTemp[1];
		$indexOf=$arrTemp[5];
		if($indexOf=='0'){
			$selected=($pageNM==$arrTemp[0] || ($arrPage[$currentPage][5]==$i && $i>0))?'class="selected"':"";
			$addClass=($i==4)?"class='flast'":'';
			$menu.="\n".'<section '.$addClass.'><h3><a href="'.$link.'" '.$selected.'>'.$title."</a></h3>";
			$arrSub = findSubArr($i,5,$arrPage);
			$len2=count($arrSub);
			if($len2>0){
				for($j=0;$j<$len2;$j++){
					$arrSubN=$arrPage[$arrSub[$j]];
					$link2=($arrSubN[4]=="Y")?PATH_HTTP.'?'.$arrSubN[0]:"#";
					$title2=$arrSubN[1];
					if($j==0) $menu.="\n"."\r\t".'<ul>';
					//$selected=($pageNM==$arrTemp[0] || ($arrPage[$currentPage][5]==$j && $j>0))?'class="selected"':"";
					$selected=($pageNM==$arrSubN[0] && $j>0)?'class="selected"':"";
					$menu.="\n"."\r\t".'<li><a href="'.$link2.'"  '.$selected.'>'.$title2."</a></li>";
					if(($j+1)==$len2) $menu.='</ul>';
				}
			}
			$menu.='</section>';
		}
	}
}

?>



<footer>
	<section class="last">
		<p>
			<a href="<?=$homeLink?>"><img src="<?=PATH_HTTP?>images/spark_logo.jpg" alt="SPARK: Stimulating Learning"></a>
			81 London Street, <br>
			Reading, RG1 4QA<br> 
			Ph 0118 950 4548
		</p>
		<p>
			Company number 7730963<br> 
			Charity number 1144844
		</p>
		<p>site by: <cite><a href="mailto:gitalipic@gmail.com">gitalipic@gmail.com</a></cite></p>
		<h4>Find Us On</h4>
		<ul>
			<li><a href="http://www.facebook.com/pages/Spark-Educare-Tutoring-Centre/273902189338518" class="facebook" target="_blank">&nbsp;</a></li>
			<li><a href="https://twitter.com/SparkEducare" class="twitter" target="_blank">&nbsp;</a></li>
		</ul>
	</section>
	<?=$menu?>
	<div class="clear">© 2013 SPARK EduCare Tutoring Centre</div>
</footer>
