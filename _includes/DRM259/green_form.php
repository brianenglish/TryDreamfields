<div class="outer_greenbox">
    <div class="greenbox">

        <img src="_img/home/home_groupshot.png" width="442" height="180" />

        <h1>Get $1.00 Off Any Box of Dreamfields Pasta</h1>

        <div id="form">
            <form action="http://20723946p.rfihub.com/ca.gif?rb=24704&ca=20723946&_o=24704&_t=20723946&uid=**UID**&rd=http://www.trydreamfields.com/coupon-thanks.php" name="subscribeForm" id="subscribeForm" method="post" onsubmit="return checkEmailForm();">
                <input type="hidden" name="thx" value="<?php echo ($thx != "") ? $thx : "http://www.trydreamfields.com/coupon-thanks.php" ?>" />
                <input type="hidden" name="err" value="http://www.trydreamfields.com/error.php" />

                <!-- <?php echo $lid_comment; ?> -->
                <input type="hidden" name="lid" value="<?php echo $lid; ?>" />

                <input type="hidden" name="source" value="<?php echo ($source != "") ? $source : "" ?>" />
                <input type="hidden" name="revtrax_source" value="<?php echo ($revtrax_source != "") ? $revtrax_source : "" ?>" />
                <input type="hidden" name="group" value="<?php echo ($group != "") ? $group : "Eat Healthier" ?>" />
                <input type="hidden" name="campaign" value="<?php echo ($campaign != "") ? $campaign : "" ?>" />

                <?php
                if(isset($adgroup)) {
                ?>
                <input type="hidden" name="adgroup" value="<?php echo ($adgroup != "") ? $adgroup : "" ?>" />
                <?php
                }//endif
                ?>
                <?php
                if(isset($matchtype)) {
                ?>
                <input type="hidden" name="matchtype" value="<?php echo ($matchtype != "") ? $matchtype : "" ?>" />
                <?php
                }//endif
                ?>
                <?php
                if(isset($keyword)) {
                ?>
                <input type="hidden" name="keyword" value="<?php echo ($keyword != "") ? $keyword : "" ?>" />
                <?php
                }//endif
                ?>

                <?php
                if(isset($bannersize)) {
                ?>
                <input type="hidden" name="bannersize" value="<?php echo ($bannersize != "") ? $bannersize : "" ?>" />
                <?php
                }//endif
                ?>
                <?php
                if(isset($site )) {
                ?>
                <input type="hidden" name="site" value="<?php echo ($site != "") ? $site : "" ?>" />
                <?php
                }//endif
                ?>
                <?php
                if(isset($placementid)) {
                ?>
                <input type="hidden" name="placementid" value="<?php echo ($placementid != "") ? $placementid : "" ?>" />
                <?php
                }//endif
                ?>
                <?php
                if(isset($segmentid)) {
                ?>
                <input type="hidden" name="segmentid" value="<?php echo ($segmentid != "") ? $segmentid : "" ?>" />
                <?php
                }//endif
                ?>
                <input type="hidden" name="trigKey" value="<?php echo ($trigKey != "") ? $trigKey : "" ?>" />
                <input type="hidden" name="trigger" value="yes" />
                <input type="hidden" name="rec" id="rec" value="" />

                <div class="div-email">
                    <input placeholder="Enter E-mail Address" type="text" name="email" id="email" size="30" value="" onchange="updateEmail()"/>
                </div>

                <div class="clearMe">
                    <div class="div-zip">
                        <input placeholder="Zip Code" type="text" name="zip" id="zip" size="30" value="" />
                    </div>
                    <div class="div-coupon_submit">
                        <button type="submit" class="btn-white">
                            Print My Coupon
                            <span class="arrow"></span>
                        </button>
                    </div>
                </div>

                <div class="unsubChk">
                    <input type="checkbox" name="unsubChk" id="unsubChk" value="Yes" />
                </div>
                <div class="unsub_txt">
                    Yes, send me monthly emails with delicious recipes, coupon savings and exclusive contests. (
                    <a href="http://www.dreamfieldsfoods.com/privacy-policy.php" target="_blank">Your email is safe with us</a>
                    )
                </div>

            </form>
        </div>

        <div class="form_disclaimer">
            By entering your email address and checking the box above, you are agreeing to receive a monthly email from Dreamfields containing delicious recipes and coupon savings. You can unsubscribe at any time.
        </div>

    </div>
  <script>
    function updateEmail() {
      var email = document.getElementById('email').value;
      var formAction = document.getElementById('subscribeForm').action;

      formAction = formAction.replace("**UID**", email);

      document.getElementById('subscribeForm').action = formAction;

    }
  </script>
</div>
<!-- end .outer_greenbox -->