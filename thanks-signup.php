<?php 
$pagetitle = "Thank You";
//$metadescription = "";
//$keywords = "";


$stylesheet = "general.css";
//define ('JS_SHEET', 'signup2');
$bodyClass = "signup2";

// Get GET vars
$email = ( !empty($_GET['email']) ) ? htmlentities($_GET['email']) : "";
$src = ( !empty($_GET['src']) ) ? $_GET['src'] : "";
?>
<?php
ini_set('display_errors', 0);
//error_reporting(E_ALL);

// Redirect to Dreamfields homepage after 10 seconds
header( "refresh:10;url=http://www.dreamfieldsfoods.com/" );
?>


<?php include('_includes/header.php'); ?>

    <div class="site_body">
      <div id="border-gold">
        
        <?php include('_includes/main_nav.php'); ?>
        
        
        <!-- BEGIN page content -->
        

          
        <div class="main-content">
          
          <div class="ca_1">
            <h1>Thank You</h1>
            
            <p>
            	Your information has been received. If you are not automatically redirected
                to Dreamfields homepage after ten seconds, please follow the link below. <br>
                <br>
                <a href="http://www.dreamfieldsfoods.com/">Go to the homepage.</a>
            </p>
          
              
          </div><!-- .ca_1 -->
          
          
          
          
        </div>
        <!-- END page content -->
        
        
        <?php include('_includes/footer_nav.php'); ?>
        
      </div><!-- #border_gold -->
    </div><!-- #site_body -->

<?php include('_includes/footer.php'); ?>
<script language='javascript'>
  // mark the active page in main nav
  //$("#mainnav_home").addClass("active");
</script>	

<?php include('_includes/inc_GoogRetargetThanks_v01.php'); ?>
</body>
</html>