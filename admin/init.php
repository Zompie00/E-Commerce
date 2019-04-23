<?php
	include "connect.php";
	//Routes 

/*
		* Directory of All Code 
*/
	$template 	 = 'includes/template/';
	$func     	 = 'includes/functions/';
	$css	  	 = 'layout/css/';
	$js 	  	 = 'layout/js/';
	$image 	   	 = 'images/js/';
	$logo 	  	 = 'login_image';
	$lan_english = 'includes/languages/english.php';
	$lan_arabic  = 'includes/languages/arabic.php';
	

   // include important files 
	include $lan_english;
	include $func. 'functions.php';
	include $template.'header.php';
	

	// include NavBar on all pages expect one with $noNarBar Variable 
	if(!isset($noNavBar)) 
		{
			include $template.'navBar.php';
			include $template.'footer.php';
		}

		


	//include $lan_arabic;
?>