<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="p:domain_verify" content="d1bd41ff653df54197ece78db89fa9c7"/> 
	<title><?php if ( isset($pagetitle) ) { echo $pagetitle; } ?></title>
    <?php 
	// metas
	if ( isset($metadescription) ) { 
		echo "	<meta name=\"description\" content=\"" . $metadescription . "\">\n"; 
	} 
	// keywords
	if ( isset($keywords) ) { 
		echo "	<meta name=\"keywords\" content=\"" . $keywords . "\">\n"; 
	} 
	?>
    
    <?php 
	// OG metas
	if ( isset($og_title) ) { 
		echo "	<meta property=\"og:title\" content=\"" . $og_title . "\" />\n"; 
	}
    if ( isset($og_description) ) { 
    	echo "	<meta property=\"og:description\" content=\"" . $og_description . "\" />\n"; 
    } 
		echo "	<meta property=\"og:url\" content=\"http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . "\" />\n";
	if ( isset($og_image) && ($og_image != "") ) { 
		echo "	<meta property=\"og:image\" content=\"" . $og_image . "\" />\n"; 
	} else {
		echo "	<meta property=\"og:image\" content=\"http://" . $_SERVER['HTTP_HOST'] . "/" . "_img/og_images/og_200x200_default.jpg" . "\" />\n"; 
	}
	?>
    
	<meta name="viewport" content="width=device-width">
	
	<link rel="stylesheet" href="_css/DRM259/basestyle_2014_12_15.css">
<?php 
	$contentCtrl = ( isset($contentCtrl) ) ? $contentCtrl : "" ;
	if ( $contentCtrl == true ) { 
		echo "	<link rel=\"stylesheet\" href=\"_css/DRM259/ContentCTRL.css\" type=\"text/css\" />\n"; 
	}
?>
<?php if ( isset($stylesheet) ) { 
	echo "	<link rel=\"stylesheet\" href=\"_css/DRM259/pages/" . $stylesheet . "\">\n"; 
}
?>
<?php 
// RevTrax coupon code
// &programId=44624892&affiliateId=12049316&merchantId=12049441
// Set some default values for RevTrax
$programId = (!empty($revtrax_programId)) ? $revtrax_programId : "44624892";
if ( isset($revtrax_js) ) { echo "	<script src=\"http://images.revtrax.com/RevTrax/js/rtxdiyframe.jsp?parent=mydiv&rtxuseqs=true&merchantId=12049441&programId={$programId}&affiliateId=12049316&channel=brand\">
</script>\n"; } 
?>
<?php 
$prettyphoto = ( isset($prettyphoto) ) ? $prettyphoto : "" ;
if ( $prettyphoto == true ) { 
	echo "	<script src=\"_js/prettyphoto/js/jquery-1.6.1.min.js\" type=\"text/javascript\"></script>";
	echo "	<link rel=\"stylesheet\" href=\"_js/prettyphoto/css/prettyPhoto.css\" type=\"text/css\" media=\"screen\" title=\"prettyPhoto main stylesheet\" charset=\"utf-8\" />\n"; 
	echo "	<script src=\"_js/prettyphoto/js/jquery.prettyPhoto.js\" type=\"text/javascript\" charset=\"utf-8\"></script>";
}
?>
<?php 
$flexslider = ( isset($flexslider) ) ? $flexslider : "" ;
if ( $flexslider === true ) {
?>
	<link rel="stylesheet" href="_js/flexslider/flexslider.css" type="text/css" media="screen" title="flexslider stylesheet" />
<?php
}//endif
?>
	<script src="_js/modernizr-2.6.2.min.js"></script>
    <?php
    /**
	 * If $sharethis = true, we load the ShareThis javascript
	 */
	if(isset($sharethis) && $sharethis == true) {
	?>
    <!-- sharethis -->
    <script type="text/javascript">var switchTo5x=true;</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">
		stLight.options({
			publisher: "f4078d11-0af1-4091-b34f-110f481e6e75", 
			doNotHash: false, 
			doNotCopy: false, 
			hashAddressBar: false,
			onhover: false
		});
    </script>
    <?php
    } //endif
	?>
	
</head>
<body <?php 
	echo ( !empty($bodyClass) ) ? "class=\"" . $bodyClass . "\"" : "";
	$googleMap = ( isset($googleMap) ) ? $googleMap : "" ;
	echo ( $googleMap == true ) ? "onLoad=\"load()\" onUnload=\"GUnload()\"" : ""; 
?>>
	
	<div class="container">
      
        <header class="site_header" role="banner">
            <div class="site_logo"><a href="index.php">Dreamfields Pasta</a></div>
        </header>
        