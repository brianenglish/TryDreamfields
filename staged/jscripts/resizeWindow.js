// JavaScript Document
<!--
function resizeOuterTo(w,h) {
 if (parseInt(navigator.appVersion)>3) {
   if (navigator.appName=="Netscape") {
    top.outerWidth=w;
    top.outerHeight=h;
//	screenWidth = window.screen.width
//    screenHeight = window.screen.height
//    moveX = (screenWidth - w) / 2;
//    moveY = (screenHeight - h) / 2;
//    window.moveTo(moveX,moveY);
   }
   else top.resizeTo(w,h);
 }
 screenWidth = window.screen.width
 screenHeight = window.screen.height
 moveX = (screenWidth - w) / 2;
 moveY = (screenHeight - h) / 2;
 window.moveTo(moveX,moveY);
 top.resizeTo(w,h);
}
//-->
