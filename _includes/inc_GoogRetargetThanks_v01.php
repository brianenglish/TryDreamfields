<?php
$theDomain = $_SERVER['HTTP_HOST'];

/**
 * If the domain is TryDreamfields.com,
 * then, we'll add the Google Retarget code to the page
 */
if ( ($theDomain == "www.trydreamfields.com" || $theDomain == "trydreamfields.com") && ( basename(getcwd()) != "staged") ){
//if ($theDomain == "dreamfields2014.hyperdrivei.biz"){
?>
<!-- BEGIN Google Remarketing - TryDreamfields Landing Pages - SSI updated 02/26/2015 -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1070785819;
var google_conversion_label = "vZPOCJ2vlwIQm8rL_gM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1070785819/?value=1.00&amp;currency_code=USD&amp;label=vZPOCJ2vlwIQm8rL_gM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- END Google Remarketing - TryDreamfields Landing Pages - SSI updated 02/26/2015 -->
<?php
} else { 
?>
<!-- Don't show Google Retarget code on STAGED site -->

<?php
} //endif
?>