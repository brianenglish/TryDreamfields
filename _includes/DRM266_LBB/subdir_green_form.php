<div class="outer_greenbox">
    <div class="greenbox">
		
		<img src="../_img/DRM266_LBB/DRM266_form_graphic_v02.png" width="442" height="64" alt="LBB for a Healthier Me">
		
		<!-- <h1>LBB For A Healthier Me<br>
			Pinterest Contest
		</h1> -->

		<p class="intro">Ready to go? Submit your Pinterest Board for a chance to WIN!</p>
		
		<div id="form-messages">
			<p>Plus, get a coupon for your next Dreamfields purchase!</p> 
		</div>

		<div id="form">
			<form action="http://dreamfields.hyperdrivei.biz/drm-forms/trydrm/DRM266_LBB/process.php" name="subscribeForm" id="subscribeForm" method="post" >
				<input type="hidden" name="thx" id="thx" value="<?php echo ($thx != "") ? $thx : "http://www.trydreamfields.com/coupon-thanks-LBB.php" ?>">
				<input type="hidden" name="err" value="http://www.trydreamfields.com/error.php">

				<!-- <?php echo $lid_comment; ?> -->
				<input type="hidden" name="lid" id="lid" value="<?php echo $lid; ?>" />

				<input type="hidden" name="source" id="source" value="<?php echo ($source != "") ? $source : "" ?>">
				<input type="hidden" name="revtrax_source" id="revtrax_source" value="<?php echo ($revtrax_source != "") ? $revtrax_source : "" ?>">
				<input type="hidden" name="group" id="group" value="<?php echo ($group != "") ? $group : "Eat Healthier" ?>">
				<input type="hidden" name="campaign" id="campaign" value="<?php echo ($campaign != "") ? $campaign : "" ?>">

				<input type="hidden" name="trigKey" id="trigKey" value="<?php echo ($trigKey != "") ? $trigKey : "" ?>">
				<input type="hidden" name="trigger" id="trigger" value="yes">
				<input type="hidden" name="rec" id="rec" value="">
				
                
				<div class="div-name"><input placeholder="Full Name" type="text" name="fullname" id="fullname" size="30" value=""></div>
                
				<div class="div-email"><input placeholder="Enter E-mail Address" type="text" name="email" id="email" size="30" value=""></div>
                
				<div class="div-pinterest-url"><input placeholder="Your Pinterest Board URL" type="text" name="pinterestURL" id="pinterestURL" size="30" value=""></div>

				<div class="clearMe">
					<div class="div-zip"><input placeholder="Zip Code" type="text" name="zip" id="zip" size="30" value=""></div>
					<div class="div-coupon_submit">
                        <button type="submit" class="btn-white">
                        	Enter Contest<span class="arrow"></span>
                        </button>
                    </div>
				</div>
				
				<div class="unsubChk"><input type="checkbox" name="unsubChk" id="unsubChk" value="Yes"></div>
				<div class="unsub_txt">Yes, send me monthly emails with delicious recipes, coupon savings and exclusive contests. (<a href="http://www.dreamfieldsfoods.com/privacy-policy.php" target="_blank">Your email is safe with us</a>)</div>
			
			</form>
		</div>
        
        <div class="form_disclaimer">
    	By entering your email address and checking the box above, you are agreeing to receive a monthly email from Dreamfields containing delicious recipes and coupon savings. You can unsubscribe at any time.
   		</div>
        
	</div>
    
</div><!-- end .outer_greenbox -->