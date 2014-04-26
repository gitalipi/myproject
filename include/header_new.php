<?php
$len=count($arrPage);
for($i=0;$i<$len;$i++){
	$arrTemp=$arrPage[$i];
	if($arrTemp[2]=="Y"){
		$link=($arrTemp[4]=="Y")?PATH_HTTP.'?'.$arrTemp[0]:"#";
		$title=$arrTemp[1];
		$indexOf=$arrTemp[3];
		if($indexOf=='0'){
			$selected=($pageNM==$arrTemp[0] || ($arrPage[$currentPage][3]==$i && $i>0))?'class="selected"':"";
			$menu.="\n".'<li><a href="'.$link.'" '.$selected.'>'.$title."</a>";
			$arrSub = findSubArr($i,3,$arrPage);
			$len2=count($arrSub);
			if($len2>0){
				for($j=0;$j<$len2;$j++){
					$arrSubN=$arrPage[$arrSub[$j]];
					
					if($arrSubN[4]=="N"){
						$link2=(!empty($arrSubN[7]))?$arrSubN[7]:"#";
						$target="target='_blank'";
					}
					else{
						$link2=PATH_HTTP.'?'.$arrSubN[0];
					}					
					//$link2=($arrSubN[4]=="Y")?PATH_HTTP.'?'.$arrSubN[0]:"#";
					$title2=$arrSubN[1];
					if($j==0) $menu.="\n"."\r\t".'<ul>';
					$menu.="\n"."\r\t".'<li><a href="'.$link2.'" '.$target.'>'.$title2."</a></li>";
					if(($j+1)==$len2) $menu.='</ul>';
				}
			}
			$menu.='</li>';
		}
	}
}
?>
<header>
	<section class="left">
		<h1 id="logo"><a href="<?=$homeLink?>">&nbsp;</a></h1>
	</section>
	<section class="right">
		<address>81 London Street, Reading, RG1 4QA</address>
		<h4>0118 950 4548</h4>
		<h1 id="logo_spaak"><a href="<?=$homeLink?>">&nbsp;</a></h1>		
	</section>
	<ul id="menu">
		<?php echo $menu?>
	</ul>
</header>