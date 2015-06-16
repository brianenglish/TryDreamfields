	<div class="copyright">Copyright &copy; <?php echo date("Y"); ?> Dreamfields</div>
</div><!-- #container -->



<!-- SCRIPTS -->
<?php
// If we aren't using PrettyPhoto, then we can load jQuery in the footer instead.
if ($prettyphoto != true) {
?>
<script src="../_js/jquery-1.10.2.min.js"></script>
<!--[if (gte IE 6)&(lte IE 8)]>
  <script type="text/javascript" src="../_js/selectivizr.js"></script>
  
<![endif]--> 
<?php
}
?>
<script src="../_js/jquery.validate.min.js"></script>
<script src="../_js/jquery.defaultvalue.js"></script> 
<script src="../_js/placeholder-js/placeholders.min.js"></script>
<!-- <script src="_js/scripts.js"></script> -->
<?php
// If we're using flexslider (homepage slideshow)
if ($flexslider === true) {
?>

<script src="../_js/flexslider/jquery.flexslider.js"></script>
<?php
}//endif
?>
<?php
if(defined("JS_SHEET"))
{
	$JS_SHEET = constant ("JS_SHEET");
	echo "<script src=\"../_js/" . $JS_SHEET . ".js\"></script>";
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
<?php require_once("../_includes/inc_GoogAnalytics.php"); ?>

<!-- include Google Retarget code here -->
<?php require_once("../_includes/inc_GoogRetargetThanks_v01.php"); ?>