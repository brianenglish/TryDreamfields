<?php

/**- - - - - - - - - - - - - - - - - - - - *
 * These vars affect the green signup form
 * - - - - - - - - - - - - - - - - - - - - */
$thx = "http://www.trydreamfields.com/coupon-thanks-ppc.php";
$lid = "18615421";
$lid_comment = "(2015/01/12 ... My Lists > 2010_Landing_Pages > TryDrm_Landing_Pages > TryDrm_2015_PPC > TryDrm_ppc_FiberSearch";
$group = ""; // default is Eat Healthier (other options: Managing Diabetes, Low Carb Diet)
$source = "TryDrm-ppc_FiberSearch";
$revtrax_source = (!empty($_GET['source']) ) ? $_GET['source'] : ""; // ex: Google
$campaign = (!empty($_GET['campaign']) ) ? $_GET['campaign'] : ""; // was FiberPPC
$trigKey = "DRM220_TryDrm_PPC_Welcome"; // name of triggered send

$adgroup = (!empty($_GET['adgroup']) ) ? $_GET['adgroup'] : "";
$matchtype = (!empty($_GET['matchtype']) ) ? $_GET['matchtype'] : "";
$keyword = (!empty($_GET['keyword']) ) ? $_GET['keyword'] : "";

$bannersize = (!empty($_GET['bannersize']) ) ? $_GET['bannersize'] : "";
$site = (!empty($_GET['site']) ) ? $_GET['site'] : "";
$placementid = (!empty($_GET['placementid']) ) ? $_GET['placementid'] : "";
$segmentid = (!empty($_GET['segmentid']) ) ? $_GET['segmentid'] : "";
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
		<div id="hero">
			<img src="../_img/DRM259/DRM259_hero.jpg">
		</div>
        
        <?php include('../_includes/DRM259/subdir_green_form.php'); ?>

		<div class="main-content">
		
		
			<div class="ca_1">
				
				<h1 class="larger">Eat a Little Better with a Great Tasting Healthy Pasta</h1>
				<div class="thumbnails">
					<div class="thumbnail">
						<div class="circle fiber"><span>5g Fiber</span></div>
						<div class="brownLines"></div>
						<a href="http://www.dreamfieldsfoods.com/healthy-pasta-recipes/2014/04/penne-with-tomatoes-and-olives.html" target="_blank">
						<img src="../_img/DRM259/DRM259_recipe1.jpg" alt="Penne with Tomatoes &amp; Olives">
						</a>
						<p class="fiber">We add a prebiotic fiber, inulin, sourced from chicory root. Inulin helps promote healthy digestion.</p>
	
					</div>
	
					<div class="thumbnail">
						<div class="circle protein"><span>7g Protein</span></div>
						<div class="brownLines"></div>
						<a href="http://www.dreamfieldsfoods.com/healthy-pasta-recipes/2012/04/thai-style-curry-beef-pasta.html" target="_blank">
						<img src="../_img/DRM259/DRM259_recipe2.jpg" alt="Thai-style Curry Beef &amp; Pasta">
						</a>
						<p>7 grams of protein per serving. This is natural occurring protein in our quality durum wheat.</p>
					</div>
	
					<div class="thumbnail">
						<div class="circle taste"><span>Great Taste</span></div>
						<div class="brownLines"></div>
						<a href="http://www.dreamfieldsfoods.com/healthy-pasta-recipes/2014/02/garden-market-pasta-salad-with-smoked-trout.html" target="_blank">
						<img src="../_img/DRM259/DRM259_recipe3.jpg" alt="Garden Market Pasta Salad with Smoked Trout">
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