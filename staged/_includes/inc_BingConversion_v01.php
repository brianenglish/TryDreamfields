<?php
$theDomain = $_SERVER['HTTP_HOST'];

/**
 * If the domain is TryDreamfields.com,
 * then, we'll add the Bing Conversion code to the page
 */
if ( ($theDomain == "www.trydreamfields.com" || $theDomain == "trydreamfields.com") && ( basename(getcwd()) != "staged") ){
//if ($theDomain == "dreamfields2014.hyperdrivei.biz"){	
?>
<!-- Begin Bing Conversion Tracking - 01/07/2015 -->
<script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"4011389"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script>
<!-- End Bing Conversion Tracking - 01/07/2015-->
<?php
} //endif
?>
<!-- Bing <?php echo $theDomain; ?> -->