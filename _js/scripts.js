//jQuery(document).ready(function($) { // for WordPress
$(document).ready(function() {
	
	// CLEAR DEFAULT TEXT on focus
//	$(' [placeholder] ').defaultValue();

//	$('input[type="text"]').on({
//		focus: function(){
//			var $this = $(this);
//			if($this.val() === $this[0].defaultValue) $this.val('');
//		},
//		blur: function(){
//			var $this = $(this);
//			if($this.val() === '') $this.val($this[0].defaultValue);
//		}
//	});
	
	
	// TOGGLE NAVIGATION
	$('.nav_toggle').click(function(e) {
		e.preventDefault();
		$('body').toggleClass("show_nav");
	});
	
	
});