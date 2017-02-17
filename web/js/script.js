var device = "desktop"
$(document).ready(function(){
	if(/Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		device = "mobile";	
	}
	
	/* tagging code */
	/*
	    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-90347228-2', 'auto');
  ga('send', 'pageview');*/
	/* tagging code */

	
	/* modal */
	$('.openModal').on('click',function(e){
		e.preventDefault();
		var curModal = $(e.currentTarget).attr("href");
		showSignUp();
		if($(this).hasClass("mobile")){
			$("#menuMobile .menuOptions").hide();
		}
		$('.w-modal,.w-backdrop').show();
		$('.w-modal,.w-backdrop').animate({top:0});
	});
	$('.w-modal .closeModal').on('click',function(){
		$('.w-modal,.w-backdrop').animate({top:"100%"},function(){
			$('.w-modal,.w-backdrop').hide();
		});
	});
	$('.showLoginForm').on('click',function(){
		if($(this).hasClass('showSignIn')){
			showSignIn();	
		} else {
			showSignUp();
		}
	});   
	
	function showSignIn(){
		$("#createProfile,.showSignInSec").hide();
		$("#userLogin").slideDown();
		$(".showSignUpSec").show();	
	}
	
	function showSignUp(){
		$("#userLogin,.showSignUpSec").hide();
		$("#createProfile").slideDown();
		$(".showSignInSec").show();
	}
	/* modal */
	
	
});