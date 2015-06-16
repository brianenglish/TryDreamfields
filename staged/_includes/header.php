<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php if ( isset($pagetitle) ) { echo $pagetitle; } ?></title>
	
    <?php 
	// metas
	if ( isset($metadescription) ) { echo "<meta name=\"description\" content=\"" . $metadescription . "\">\n"; } 
	if ( isset($keywords) ) { echo "<meta name=\"keywords\" content=\"" . $keywords . "\">\n"; } 
	?>
    
    <?php 
	// OG metas
	if ( isset($og_title) ) { echo "<meta property=\"og:title\" content=\"" . $og_title . "\" />\n"; }
    if ( isset($og_description) ) { echo "<meta property=\"og:description\" content=\"" . $og_description . "\" />\n"; } 
	echo "<meta property=\"og:url\" content=\"http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . "\" />\n";
	if ( isset($og_image) && ($og_image != "") ) { 
		echo "<meta property=\"og:image\" content=\"" . $og_image . "\" />\n"; 
	} else {
		echo "<meta property=\"og:image\" content=\"http://" . $_SERVER['HTTP_HOST'] . "/" . "_img/og_images/og_200x200_default.jpg" . "\" />\n"; 
	}
	?>
    
    
    <?php
	/**
	 * Add the admins for the Facebook comments box
	 *
	 * Go to:  http://graph.facebook.com/[YOUR USERNAME]
	 * Get your Facebook ID
	 *
	 * https://developers.facebook.com/docs/plugins/comments/
	 */
	if (isset($fb_comments) && $fb_comments == true) {
	// Was using he fb:admins meta, but it's better to use a Facebook app id
	//<meta property="fb:admins" content="100000702107953"/>
	// Using Facebook app id for comments box	
	?>
    <meta property="fb:app_id" content="763604820333763"/>
	<?php
	} //endif
	?>
    
    
	<meta name="viewport" content="width=device-width">
	
	<link rel="stylesheet" href="./_css/basestyle_2015_03_11.css">
	<?php if ( isset($stylesheet) ) { echo "<link rel=\"stylesheet\" href=\"_css/pages/" . $stylesheet . "\">\n"; } ?>
    
    
    <?php 
	// RevTrax coupon code
	// &programId=44624892&affiliateId=12049316&merchantId=12049441
	// Set some default values for RevTrax
	$programId = (!empty($revtrax_programId)) ? $revtrax_programId : "44624892";
	if ( isset($revtrax_js) ) { echo "<script src=\"http://images.revtrax.com/RevTrax/js/rtxdiyframe.jsp?parent=mydiv&rtxuseqs=true&merchantId=12049441&programId={$programId}&affiliateId=12049316&channel=brand\">
</script>\n"; } 
	?>
    
    
    <?php 
	$prettyphoto = ( isset($prettyphoto) ) ? $prettyphoto : "" ;
	if ( $prettyphoto == true ) { 
		echo "<script src=\"_js/prettyphoto/js/jquery-1.6.1.min.js\" type=\"text/javascript\"></script>";
		echo "<link rel=\"stylesheet\" href=\"_js/prettyphoto/css/prettyPhoto.css\" type=\"text/css\" media=\"screen\" title=\"prettyPhoto main stylesheet\" charset=\"utf-8\" />\n"; 
		echo "<script src=\"_js/prettyphoto/js/jquery.prettyPhoto.js\" type=\"text/javascript\" charset=\"utf-8\"></script>";
	}
	?>
    
    <?php 
	$flexslider = ( isset($flexslider) ) ? $flexslider : "asdf" ;
	if ( $flexslider == true ) {
	?>
	<link rel="stylesheet" href="_js/flexslider/flexslider.css" type="text/css" media="screen" title="flexslider stylesheet" />
    <?php
	}//endif
	?>
    
    
	<script src="_js/modernizr-2.6.2.min.js"></script>
	
	<!-- sharethis -->
	<!-- <script>var switchTo5x=false;</script>
	<script src="http://w.sharethis.com/button/buttons.js"></script>
	<script>stLight.options({publisher: "ur-4fbeefd-71e-c12c-18e8-27a4a01d590d"});</script>-->
    
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
    
     <?php
    /**
	 * If $fb_tracking_pixel = true, we load the Facebook tracking pixel code
	 */
	if(isset($fb_tracking_pixel) && $fb_tracking_pixel == true) {
	?>
    <!-- Facebook Conversion Code for Email Sign Up -->
	<script>(function() {
    var _fbq = window._fbq || (window._fbq = []);
    if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
    }
    })();
    window._fbq = window._fbq || [];
    window._fbq.push(['track', '6027623136797', {'value':'0.01','currency':'USD'}]);
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6027623136797&amp;cd[value]=0.01&amp;cd[currency]=USD&amp;noscript=1" /></noscript>
    <?php
    } //endif
	?>
    
    <?php
    /**
	 * If $bingConversion = true, we load the BingConversion code
	 */
	if(isset($bingConversion) && $bingConversion === true) {
	include('_includes/inc_BingConversion_v01.php');
    } //endif
	?>
	
</head>
<body <?php 
	echo ( !empty($bodyClass) ) ? "class=\"" . $bodyClass . "\"" : "";
	$googleMap = ( isset($googleMap) ) ? $googleMap : "" ;
	echo ( $googleMap == true ) ? "onLoad=\"load()\" onUnload=\"GUnload()\"" : ""; 
?>>

<?php
/**
 * Add the Facebook comments box code
 */
if (isset($fb_comments) && $fb_comments == true) {
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=763604820333763";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php
} //endif
?>
	
	<div class="container">
      
        <header class="site_header" role="banner">
            <div class="site_logo"><a href="http://www.dreamfieldsfoods.com/index.php">Dreamfields Pasta</a></div>
            <div class="topnav">
              <div class="topnav_items">
                <a href="http://www.dreamfieldsfoods.com/contact-dreamfields.php">Contact</a> |
                <a href="http://blog.dreamfieldsfoods.com/" target="_blank">Blog</a> |
              </div>
              <a href="http://www.facebook.com/dreamfields" target="_blank" title="Facebook" class="social_FB">FB</a>
              <a href="http://twitter.com/#!/HealthyPasta" target="_blank" title="Twitter" class="social_Tw">Tw</a>
              <a href="http://pinterest.com/dreamfields/" target="_blank" title="Pinterest" class="social_Pinterest">P</a>
              <a href="http://instagram.com/healthypasta/" target="_blank" title="Instagram" class="social_Instagram">I</a>
              <a href="" class="nav_toggle">Menu</a>
            </div>
        </header>
        