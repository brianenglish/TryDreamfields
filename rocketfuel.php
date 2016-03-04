<?php

/**- - - - - - - - - - - - - - - - - - - - *
 * These vars affect the green signup form
 * - - - - - - - - - - - - - - - - - - - - */
$thx = "http://www.trydreamfields.com/coupon-thanks.php";
$lid = "17059589";
$lid_comment = "(2010/11/09 ... My Lists > 2010_Landing_Pages > TryDrm_Landing_Pages > TryDrm_00_Root";
$group = ""; // default is Eat Healthier (other options: Managing Diabetes, Low Carb Diet)
$source = "TryDreamfields.com";
$revtrax_source = "TryDreamfields-Root";
$campaign = "TryDreamfields-Root";
$trigKey = "DRM220_TryDrmSignup_Welcome"; // name of triggered send
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
$bodyClass = "home";
?>
<?php include('_includes/DRM259/header.php'); ?>

	<div class="site_body">
	<div id="border-gold">
		
		
		<!-- BEGIN page content -->
		<div id="hero">
			<img src="_img/DRM259/DRM259_hero.jpg">
		</div>
        
        <?php include('_includes/DRM259/green_form.php'); ?>

		<div class="main-content">
		
		
			<div class="ca_1">
				
				<h1 class="larger">Eat a Little Better with a Great Tasting Healthy Pasta</h1>
				<div class="thumbnails">
					<div class="thumbnail">
						<div class="circle fiber"><span>5g Fiber</span></div>
						<div class="brownLines"></div>
						<a href="http://www.dreamfieldsfoods.com/healthy-pasta-recipes/2009/09/lemony-angel-hair-toss.html" target="_blank">
						<img src="_img/rocketfuel/rocketfuel_recipe1.jpg" alt="Angel Hair &amp; Tomato Toss">
						</a>
						<p class="fiber">We add a prebiotic fiber, inulin, sourced from chicory root. Inulin helps promote healthy digestion.</p>
	
					</div>
	
					<div class="thumbnail">
						<div class="circle protein"><span>7g Protein</span></div>
						<div class="brownLines"></div>
						<a href="http://www.dreamfieldsfoods.com/healthy-pasta-recipes/2013/07/blt-pasta-salad.html" target="_blank">
						<img src="_img/rocketfuel/rocketfuel_recipe2.jpg" alt="BLT Pasta Salad">
						</a>
						<p>7 grams of protein per serving. This is natural occurring protein in our quality durum wheat.</p>
					</div>
	
					<div class="thumbnail">
						<div class="circle taste"><span>Great Taste</span></div>
						<div class="brownLines"></div>
						<a href="http://www.dreamfieldsfoods.com/healthy-pasta-recipes/2012/05/roasted-corn-roma-tomato-salad.html" target="_blank">
						<img src="_img/rocketfuel/rocketfuel_recipe3.jpg" alt="Roasted Corn &amp; Roma Tomato Salad">
						</a>
						<p class="taste">Get the same taste and texture of traditional pasta with Dreamfields.</p>
					</div>
				</div>


				<div class="btn_GetMoreRecipes"><a href="http://www.dreamfieldsfoods.com/healthy-pasta-recipes.php" target="_blank" class="btn-blue">Get More Recipes<span class="arrow"></span></a></div>


			</div><!-- ca_1 -->
			
			
			<div class="ca_2 ca_special">
				
				<div class="ftr_thumbs">
					<a href="http://dreamfieldsfoods.com/healthy-pasta-recipes.php" target="_blank">
						<div>
							<img src="_img/DRM259/DRM259_ftr_BrowseRecipes.gif" alt="Browse Recipes" title="Browse Recipes" />
							<span>Browse <br class="show_mobile">Recipes</span>
						</div>
					</a>
					<a href="http://dreamfieldsfoods.com/find-dreamfields-pasta.php" target="_blank">
						<div>
							<img src="_img/DRM259/DRM259_ftr_FindAStore.gif" alt="Find A Store" title="Find A Store" />
							<span>Find A <br class="show_mobile">Store</span>
						</div>
					</a>
					<a href="http://www.buydreamfields.com/" target="_blank">
						<div>
							<img src="_img/DRM259/DRM259_ftr_BuyOnline.gif" alt="Buy Online" title="Buy Online" />
							<span>Buy Online</span>
						</div>
					</a>
					<a href="http://dreamfieldsfoods.com/healthy-carb-pasta.php" target="_blank">
						<div>
							<img src="_img/DRM259/DRM259_ftr_LearnMore.gif" alt="Learn More" title="Learn More" />
							<span>Learn More</span>
						</div>
					</a>
				</div><!-- ftr_thumbs -->
				

			</div><!-- ca_2 ca_special -->
		
		
		</div>
		<!-- END page content -->
		

	</div><!-- #border_gold -->
	</div><!-- #site_body -->

<?php include('_includes/DRM259/footer.php'); ?>	
</div>
</body>
</html>