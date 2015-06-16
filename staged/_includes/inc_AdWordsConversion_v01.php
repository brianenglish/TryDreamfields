<?php
$theDomain = $_SERVER['HTTP_HOST'];

/**
 * If the domain is DreamfieldsFoods.com,
 * then, we'll add the Google Analytics to the page
 */
if ($theDomain == "www.trydreamfields.com"){
//if ($theDomain == "dreamfields2014.hyperdrivei.biz"){	
?>
<!-- Begin AdWords Conversion Tracking - 01/06/2015 -->
<!-- Google Code for Email signup (TryDreamfields.com) Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1070785819;
var google_conversion_language = "en";
var google_conversion_format = "2";
var google_conversion_color = "302014";
var google_conversion_label = "4j_iCIqtylgQm8rL_gM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1070785819/?label=4j_iCIqtylgQm8rL_gM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- End AdWords Conversion Tracking - 01/06/2015-->
<?php
} //endif
?>
<!-- G <?php echo $theDomain; ?> -->