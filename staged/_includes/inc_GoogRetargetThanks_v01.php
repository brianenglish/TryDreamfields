<?php
$theDomain = $_SERVER['HTTP_HOST'];

/**
 * If the domain is TryDreamfields.com,
 * then, we'll add the Google Retarget code to the page
 */
if ( ($theDomain == "www.trydreamfields.com" || $theDomain == "trydreamfields.com") && ( basename(getcwd()) != "staged") ){
//if ($theDomain == "dreamfields2014.hyperdrivei.biz"){
?>
<!-- BEGIN Google Remarketing - TryDreamfields Landing Pages - SSI created 08/16/2011 -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1070785819;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "666666";
var google_conversion_label = "vZPOCJ2vlwIQm8rL_gM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1070785819/?label=vZPOCJ2vlwIQm8rL_gM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- END Google Remarketing - TryDreamfields Landing Pages - SSI created 08/16/2011 -->
<?php
} else { 
?>
<!-- Don't show Google Retarget code on STAGED site -->

<?php
} //endif
?>