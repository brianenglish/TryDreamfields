<?php
$theDomain = $_SERVER['HTTP_HOST'];

/**
 * If the domain is TryDreamfields.com,
 * then, we'll add the Google Analytics to the page
 */
if ( ($theDomain == "www.trydreamfields.com" || $theDomain == "trydreamfields.com") && ( basename(getcwd()) != "staged") ){
//if ($theDomain == "dreamfields2014.hyperdrivei.biz"){	
?>
<!-- BEGIN Google Analytics - TryDreamfields.com - SSI created 04/10/2014 -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2425619-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- END Google Analytics - TryDreamfields.com - SSI created 04/10/2014 -->
<?php
} else { 
?>
<!-- Don't show Google Analytics code on STAGED site -->
<?php
} //endif
?>