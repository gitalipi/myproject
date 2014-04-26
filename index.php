<?php
include("library/prehtml.php"); 
?>
<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="author" content="Spark Tutoring and Test Centre">
<meta name="description" content="Tutoring SATs, GCSE & 11+ Prep course, PearsonVUE test centre, SIA Security courses, Cisco test centre, Pegasystem test centre, VMware test centre, Microsoft test centre, Citix test centre, CIMA test centre, IT programmes, such as Cisco, CompTIA, EMC, HP, LPI, Oracle test centre">
<meta name="keywords" content="Test tutoring, SIA security, sia security Interview, tutoring,  tutoring in Reading After School, After School Study Club in Reading, PearsonVUE test centre in Reading,  SIA CCTV, SIA door SIA security officer, Test centre for Adult Literacy, Numeracy tutoring exam centre. Pearson VUE test centre, exam centre, SIA Door Supervisor, SIA Security Guard Officer, SIA CCTV Operative, volunteering, tutoring SIA Physical Intervention, Emergency First Aid at Work, tutoring, sia Conflict Management, SIA Security Guard with First Aid Literacy Numeracy tutoring SIA Security training, SIA Security Licence security training sia licence tutoring levels tutoring, SIA Security, tutoring, cctv course Test tutoring, tutoring in Reading, Health & Safety, tutoring in Reading, tutoring in Newbury, sia licensing training course, security qualification tutoring in Wokingham, tutoring in Slough, tutoring, tutoring, SIA CCTV, SIA licence, SIA licence training, SIA qualification, SIA  security officer, SIA in Reading, SIA in Door supervision, IT programmes, such as Cisco, CompTIA, EMC, HP, LPI, Oracle test centre">
<meta name="google-site-verification" content="f5WptWco1_QZBW24T6KVU2T0uNY5021MusbGdG6NTOg" />
<title><?php echo $pgTitle.' - '.SITE_NAME ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?=PATH_HTTP?>css/style.css">
<link rel="stylesheet" type="text/css" media="all" href="<?=PATH_HTTP?>css/common.css">
<script src="<?=PATH_HTTP?>js/jquery-1.7.2.min.js"></script>
<script src="<?=PATH_HTTP?>js/lightbox.js"></script>
<link href="<?=PATH_HTTP?>css/lightbox.css" rel="stylesheet" />        
<script>
$.noConflict();
jQuery(document).ready(function($){
	jQuery('.show_hide').click(function(){
		jQuery(".slidingDiv").slideToggle();
	});
	<?php if($intro){ ?>
	jQuery('#image').hover(
		function(){
			jQuery(this).addClass("hover");
		},
		function(){
			jQuery(this).removeClass("hover");
		}
	);
<?php 
}
if($testPG){?>
	jQuery("#ccash").click(function(){
		jQuery("#fcheque").hide();
		jQuery("#fbank").hide();
		jQuery("#fpaypal").hide();
		jQuery("#fcash").slideToggle();
	});

	//for cheque
	jQuery("#ccheque").click(function(){
		jQuery("#fcash").hide();
		jQuery("#fbank").hide();
		jQuery("#fpaypal").hide();
		jQuery("#fcheque").slideToggle();
	});

	//for bank
	jQuery("#cbank").click(function(){
		jQuery("#fcash").hide();
		jQuery("#fcheque").hide();
		jQuery("#fpaypal").hide();
		jQuery("#fbank").slideToggle();
	});

	//for paypal
	jQuery("#cpaypal").click(function(){
		jQuery("#fcash").hide();
		jQuery("#fcheque").hide();
		jQuery("#fbank").hide();
		jQuery("#fpaypal").slideToggle();
	});	
	<?php } ?>
});
<?php if($paymentPG){ ?>
function setVal(id,val){
	var value,taxVal,cardVal;
	value=document.getElementById(id).value;
	if(value=='') document.getElementById(id).value=val; 
	else if(id=='amount_1'){
		taxVal=value*20/100;
		cardVal=value*6/100;
		document.getElementById('tax_1').value=taxVal;
		document.getElementById('amount_2').value=cardVal;
	}
}
<?php } ?>
</script>
<!--[if lt IE 9]>
    <script src="<?=PATH_HTTP?>js/dist/html5shiv.js"></script>
<![endif]-->
</head>
<body>
<!-- wrapper1 start-->
<div id="row1"><div class="wrapper">
<!-- header start-->
<?php include("include/header.php"); ?>
<!-- header end-->
</div></div>
<!-- wrapper1 end-->

<!-- wrapper2 start-->
<div id="row2"><div class="wrapper">
	<?php if($intro) include($intro);?>
	
	<?php include("include/sidebar.php"); ?>

	<div id="left_cont">
	<?php 
	if($fileExist) include($PAGE);
	else{ echo '<p class="note">File does not exist</p>'; }
	?>
	</div>
	
	<?php include("include/footer.php"); ?>	
</div></div>
<!-- wrapper2 end-->
</body>
</html>