<?php
$len=count($arrPage);
$menu="";
for($i=0;$i<$len;$i++){
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
			$menu.="\n".'<section><h3><a href="'.$link.'" '.$selected.'>'.$title."</a></h3>";
		}
		else{ $menu.="\n"."\r\t".'<li><a href="'.$link.'" '.$selected.'>'.$title."</a></li>";}
	}
}
$menu.='</section>'."\n";
?>



<footer>
	<!-- 
	<section>
		<h3>Young Learners</h3>
		<ul>
			<li><a href="#">11+ Exam</a></li>
			<li><a href="#">One to One Tutoring</a></li>
			<li><a href="#">School Inclusion</a></li>
			<li><a href="#">After School Club</a></li>
			<li><a href="#">Holiday Club</a></li>
		</ul>
	</section>
	<section>
		<h3>Adult Services</h3>
		<ul>
			<li><a href="#">Test Centre</a></li>
			<li><a href="#">SIA Licencing</a></li>
			<li><a href="#">Supply</a></li>
			<li><a href="#">Volunteering</a></li>
		</ul>
	</section>
	<section>
		<h3>More</h3>
		<ul>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Testimonials</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">Privacy Policy</a></li>
			<li><a href="#">Sitmap</a></li>				
		</ul>
	</section>
	-->
	<section class="last">
		<p>
			<a href="<?=$homeLink?>"><img src="<?=PATH_HTTP?>images/spark_logo.jpg" alt="SPARK: Stimulating Learning"></a>
			81 London Street, Reading, RG1 4QA<br> 
			Ph 0118 950 4548
		</p>
		<p>Company number 7730963 Charity number 1144844</p>
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
