<!DOCTYPE HTML>
<!--
	Prologue 1.1 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
        
         <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script>
  
  $(document).ready(function(){
 
        $("#share").hide();
		$("#question1").hide();
		$("#who").hide();
		
		
      
$( "#Yes" ).bind( "click", function() 
{
 	$("#who").show();
	$("#question1").hide();
     window.location = "#who";
});

$( "#No" ).bind( "click", function() 
{
 
 
}); 
 
  
 
});



  
  
  $(function() {

    $( "#tags" ).autocomplete({
      source: "http://netcafesolutions.com/search/search.php",
	  max:10,
	  select: function(event,ui)
	  {
		  $("#question1").show();
		 window.location = "#question1";
		
	  }
	  
    });
  });
  </script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<div id="header" class="skel-panels-fixed">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							
							<h1 id="title">Voting state</h1>
							<span class="byline">1-2-3 steps</span>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="" id="first" class="skel-panels-ignoreHref"><span class="fa fa-home">Find your constituency</span></a></li>
								<li><a href="" id="second" class="skel-panels-ignoreHref"><span class="fa fa-th">Answer </span></a></li>
								<li><a href="" id="third" class="skel-panels-ignoreHref"><span class="fa fa-user">share</span></a></li>
								
							</ul>
						</nav>
						
				</div>
				
				<div class="bottom">

				
					
				
				</div>
			
			</div>

		<!-- Main -->
			<div id="main">
			
					<?php echo $this->fetch('content'); ?>
					
            
          

				<!-- Contact -->
				
			
			</div>

		<!-- Footer -->
			<div id="footer">
				
				<!-- Copyright -->
					<div class="copyright">
						<p>&copy; 2013 George Georgiadis. All rights reserved.</p>
						<ul class="menu">
							<li>Frondend: HTML5 & skeljs</li>
							<li>Backend: CakePHP </li>
						</ul>
					</div>
				
			</div>

	</body>
</html>

