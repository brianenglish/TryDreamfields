<?php

/**- - - - - - - - - - - - - - - - - - - - *
 * These vars affect the green signup form
 * - - - - - - - - - - - - - - - - - - - - */
$thx = "http://www.trydreamfields.com/coupon-thanks-share.php";
$lid = "18722603";
$lid_comment = "(2015/05/13 ... My Lists > 2010_Landing_Pages > TryDrm_Landing_Pages > Pastapalooza2015";
$group = ""; // default is Eat Healthier (other options: Managing Diabetes, Low Carb Diet)
$source = "TryDrm-pastapalooza-signup";
$revtrax_source = "TryDreamfields-Pastapalooza-Signup";
$campaign = "TryDreamfields-Pastapalooza-Signup";
$trigKey = "DRM220_TryDrmSignup_Welcome"; // name of triggered send

//Get $1.00 Off Any Box of Dreamfields Pasta
//Save $1.50 On Any 2 Boxes of Dreamfields Pasta
$form_headline = "Save $1.50 On Any 2 Boxes of Dreamfields";
?>
<?php 
$pagetitle = "Sign Up for Email from Deliciously Healthy Dreamfields Pasta";
//$metadescription = "asdf";
//$keywords = "asdf";

$og_title = "Sign Up for Email from Deliciously Healthy Dreamfields Pasta";
$og_description = "Dreamfields Pasta is just right for healthy eating. Get a coupon!";
//$og_image = "";


$stylesheet = "home.css";
define ('JS_SHEET', 'home');
$bodyClass = "home"
?>
<?php include('../_includes/DRM259/subdir_header.php'); ?>

	<div class="site_body">
	<div id="border-gold">
		
		
		<!-- BEGIN page content -->
		<div id="hero" class="DRM270">
			<img src="../_img/DRM270_Pastapalooza/DRM270_Pastapalooza_hero.jpg">
		</div>
        
        <?php include('../_includes/DRM259/subdir_green_form.php'); ?>

		<div class="main-content">
		
		
			<div class="ca_1">
				
                <div style="padding:10px; margin-bottom:20px; border:1px solid #c6792c; text-align:center;">
                Visit the <a href="http://www.trydreamfields.com/pastapalooza/" target="_blank">Pastapalooza V contest page</a> to vote for your favorite recipe in each of our 5 Market Basket Challenges.
                </div>
                
				<h1 class="larger">Eat a Little Better with a Great Tasting Healthy Pasta</h1>
				<div class="thumbnails">
					<div class="thumbnail">
						<div class="circle fiber"><span>5g Fiber</span></div>
						<div class="brownLines"></div>
						<a href="http://www.dreamfieldsfoods.com/healthy-pasta-recipes/2014/04/penne-with-tomatoes-and-olives.html" target="_blank">
						<img src="../_img/DRM259/DRM259_recipe1.jpg" alt="Penne with Tomatoes &amp; Olives">
						</a>
						<p class="fiber">Dreamfields contains a prebiotic fiber which helps promote healthy digestion.</p>
	
					</div>
	
					<div class="thumbnail">
						<div class="circle protein"><span>7g Protein</span></div>
						<div class="brownLines"></div>
						<a href="http://www.dreamfieldsfoods.com/healthy-pasta-recipes/2012/04/thai-style-curry-beef-pasta.html" target="_blank">
						<img src="../_img/DRM259/DRM259_recipe2.jpg" alt="Thai-style Curry Beef &amp; Pasta">
						</a>
						<p>Dreamfields helps you feel full longer with 7 grams of protein and 5 grams of fiber.</p>
					</div>
	
					<div class="thumbnail">
						<div class="circle taste"><span>Great Taste</span></div>
						<div class="brownLines"></div>
						<a href="http://www.dreamfieldsfoods.com/healthy-pasta-recipes/2014/02/garden-market-pasta-salad-with-smoked-trout.html" target="_blank">
						<img src="../_img/DRM259/DRM259_recipe3.jpg" alt="Garden Market Pasta Salad with Smoked Trout">
						</a>
						<p class="taste">Enjoy the traditional taste and texture of pasta in a variety of dishes. Dreamfields is available in 7 different shapes.</p>
					</div>
				</div>


				<div class="btn_GetMoreRecipes"><a href="http://www.dreamfieldsfoods.com/healthy-pasta-recipes.php" target="_blank" class="btn-blue">Get More Recipes<span class="arrow"></span></a></div>


			</div><!-- ca_1 -->
			
			
			<div class="ca_2 ca_special">
				
				<div class="ftr_thumbs">
					<a href="http://dreamfieldsfoods.com/healthy-pasta-recipes.php" target="_blank">
						<div>
							<img src="../_img/DRM259/DRM259_ftr_BrowseRecipes.gif" alt="Browse Recipes" title="Browse Recipes" />
							<span>Browse <br class="show_mobile">Recipes</span>
						</div>
					</a>
					<a href="http://dreamfieldsfoods.com/find-dreamfields-pasta.php" target="_blank">
						<div>
							<img src="../_img/DRM259/DRM259_ftr_FindAStore.gif" alt="Find A Store" title="Find A Store" />
							<span>Find A <br class="show_mobile">Store</span>
						</div>
					</a>
					<a href="http://www.buydreamfields.com/" target="_blank">
						<div>
							<img src="../_img/DRM259/DRM259_ftr_BuyOnline.gif" alt="Buy Online" title="Buy Online" />
							<span>Buy Online</span>
						</div>
					</a>
					<a href="http://dreamfieldsfoods.com/healthy-carb-pasta.php" target="_blank">
						<div>
							<img src="../_img/DRM259/DRM259_ftr_LearnMore.gif" alt="Learn More" title="Learn More" />
							<span>Learn More</span>
						</div>
					</a>
				</div><!-- ftr_thumbs -->
				

			</div><!-- ca_2 ca_special -->
		
		
		</div>
		<!-- END page content -->
		

	</div><!-- #border_gold -->
	</div><!-- #site_body -->

<?php include('../_includes/DRM259/subdir_footer.php'); ?>	
</body>
</html>