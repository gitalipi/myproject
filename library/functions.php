<?php
function arrayIN2D($arr,$val){
	if(is_array($arr)){
	$len=count($arr);
	for($i=0;$i<$len;$i++){
		$index=array_search($val,$arr[$i]);
		if(is_int($index)) return $i;
	}
	return -1;
	}
}

function findSubArr($val,$p,$arr){
	$len=count($arr);
	$arrSub=array();
	for($i=0;$i<$len;$i++){
		$nArr=$arr[$i];
		if($val==$nArr[$p] && $nArr[$p]>0){
			$arrSub[]=$i;
		}
	}
	return($arrSub);
}

?>