<?php
//print_r($_SERVER);
switch($_SERVER['SERVER_NAME']){
	case "localhost":include('configurations/localhost.php');break;
	
	case "sparkeducare.org":
	case "www.sparkeducare.org":
	case "http://sparkeducare.org":
	case "http://www.sparkeducare.org":
	include('configurations/server.php');break;
}
include('library/functions.php');
$query_string=$_SERVER['QUERY_STRING'];
$query_string=($query_string!='')?$query_string:"home";
$pageNM=explode("&",$query_string);
$pageNM=$pageNM[0];
$PAGE='pages/'.$pageNM.".php";
$testPG=($pageNM=='how_it_works')?true:false;
$paymentPG=($pageNM=='payment')?true:false;
$intro=($pageNM=='home')?'include/intro.php':false;
$fileExist=(file_exists(PATH_REAL.$PAGE))?true:false;
$arrPage=array(array("home","Home","Y","0","Y","0","N"), //0
				array("test_centre","Test Centre","Y","0","N","0","Y"), //1
				array("learners","Learners","Y","0","N","0","Y"), //2
				array("services","Services","Y","0","N","0","Y"), //3
				array("more","More","N","0","N","0","Y"), //4
				array("about_us","About Us","Y","0","Y","4","Y"), //5
				array("testimonials","Testimonials","Y","0","Y","4","Y"), //6
				array("contact_us","Contact Us","Y","0","Y","4","Y"), //7
				array("privacy_policy","Privacy Policy","N","0","Y","4","Y"), //8
				array("sitemap","Sitemap","N","0","Y","4","Y"), //9			
				
				array("pearson_vue","Pearson Vue Test Centre","Y","1","Y","1","Y"),
				array("prometric","Prometric Test Centre","Y","1","Y","1","Y"),
				array("kryterion","Kryterion Test Centre","Y","1","Y","1","Y"),
				array("certiport","Certiport Test Centre","Y","1","Y","1","Y"),
				array("acca","ACCA CBE Centre Lounge","Y","1","Y","1","Y"),
				array("functional_skills","Functional Skills Test Centre","Y","1","Y","1","Y"),
				array("how_it_works","How It Works","Y","1","Y","1","Y"),
				array("payment","Pay Now","Y","1","Y","1","Y"),
				
				array("exam","11+ Exam Tutoring","Y","2","Y","2","Y"),
				array("one_to_one_tutoring","One to One Tutoring","Y","2","Y","2","Y"),
				array("school_inclusion","School Inclusion","Y","2","Y","2","Y"),
				array("after_school_club","After School Study Club","Y","2","Y","2","Y"),
				array("holiday_club","Holiday Study Club","Y","2","Y","2","Y"),			
				array("it_training","IT Training and ECDL","Y","3","Y","3","Y"),			
				array("sia_licencing","SIA Licencing","Y","3","Y","3","Y"),
				array("supply","Supply Teaching","Y","3","Y","3","Y"),
				array("space_let","Space to Let","Y","3","N","3","Y",PATH_HTTP."pdf/space_to_let.pdf"),
				array("volunteering","Volunteering Opportunitiess","Y","3","Y","3","Y")				
				);//page_name, page_title, header_publish, index_of(0 when main menu else index of parent menu), link_publish, footer_index_of, footer publish, external_link

$currentPage=arrayIN2D($arrPage,$pageNM);
$pgTitle=$arrPage[$currentPage][1];
$homeLink=PATH_HTTP.'?home';

					
define("SITE_NAME","Spark Tutoring and Test Centre");
?>