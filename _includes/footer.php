<?php

if ($_SERVER['REQUEST_URI'] == '/coupon-thanks.php') {
  print "<!-- Code for Action: Try Dreamfields Print Coupon Conversion Pixel -->
<!-- Begin Rocket Fuel Conversion Action Tracking Code Version 9 -->
<script type='text/javascript'>
(function() {
  var w = window, d = document;
  var s = d.createElement('script');
  s.setAttribute('async', 'true');
  s.setAttribute('type', 'text/javascript');
  s.setAttribute('src', '//c1.rfihub.net/js/tc.min.js');
  var f = d.getElementsByTagName('script')[0];
  f.parentNode.insertBefore(s, f);
  if (typeof w['_rfi'] !== 'function') {
    w['_rfi']=function() {
      w['_rfi'].commands = w['_rfi'].commands || [];
      w['_rfi'].commands.push(arguments);
    };
  }
  _rfi('setArgs', 'ver', '9');
  _rfi('setArgs', 'rb', '24704');
  _rfi('setArgs', 'ca', '20723946');
  _rfi('setArgs', '_o', '24704');
  _rfi('setArgs', '_t', '20723946');
  _rfi('track');
})();
</script>
<noscript>
  <iframe src='//20723946p.rfihub.com/ca.html?rb=24704&ca=20723946&_o=24704&_t=20723946&ra=REPLACE_ME_WITH_YOUR_CACHE_BUSTING' style='display:none;padding:0;margin:0' width='0' height='0'>
</iframe>
</noscript>
<!-- End Rocket Fuel Conversion Action Tracking Code Version 9 -->";
} else {
  print "<!-- Code for Action: Try Dreamfields Foods Universal Pixel -->
<!-- Begin Rocket Fuel Conversion Action Tracking Code Version 9 -->
<script type='text/javascript'>
(function() {
  var w = window, d = document;
  var s = d.createElement('script');
  s.setAttribute('async', 'true');
  s.setAttribute('type', 'text/javascript');
  s.setAttribute('src', '//c1.rfihub.net/js/tc.min.js');
  var f = d.getElementsByTagName('script')[0];
  f.parentNode.insertBefore(s, f);
  if (typeof w['_rfi'] !== 'function') {
    w['_rfi']=function() {
      w['_rfi'].commands = w['_rfi'].commands || [];
      w['_rfi'].commands.push(arguments);
    };
  }
  _rfi('setArgs', 'ver', '9');
  _rfi('setArgs', 'rb', '24704');
  _rfi('setArgs', 'ca', '20723944');
  _rfi('setArgs', '_o', '24704');
  _rfi('setArgs', '_t', '20723944');
  _rfi('track');
})();
</script>
<noscript>
  <iframe src='//20723944p.rfihub.com/ca.html?rb=24704&ca=20723944&_o=24704&_t=20723944&ra=[%Random%]' style='display:none;padding:0;margin:0' width='0' height='0'>
</iframe>
</noscript>
<!-- End Rocket Fuel Conversion Action Tracking Code Version 9 -->";
}
//print "<!--<pre>";
//print_r($_SERVER);
//print "</pre>-->";
?>
<div class="copyright">Copyright &copy; <?php echo date("Y"); ?> Dreamfields</div>
</div><!-- #container -->

<!-- SCRIPTS -->
<?php
// If we aren't using PrettyPhoto, then we can load jQuery in the footer instead.
if ($prettyphoto != true) {
?>
<script src="_js/jquery-1.10.2.min.js"></script>
<?php
}
?>
<script src="_js/jquery.validate.min.js"></script>
<script src="_js/jquery.defaultvalue.js"></script> 
<script src="_js/scripts.js"></script>
<?php
// If we're using flexslider (homepage slideshow)
if ($flexslider == true) {
?>
<script src="_js/flexslider/jquery.flexslider.js"></script>
<?php
}//endif
?>
<?php
if(defined("JS_SHEET"))
{
	$JS_SHEET = constant ("JS_SHEET");
	echo "<script src=\"_js/" . $JS_SHEET . ".js\"></script>";
}
?>

<?php
// RevTrax makeFrame code
if ( isset($revtrax_js) ) { 
?>
<script type="text/javascript">makeFrame();</script>
<?php
} //end RevTrax makeFrame
?>
    
<!-- include Google Analytics code here -->
<?php require_once("inc_GoogAnalytics.php"); ?>