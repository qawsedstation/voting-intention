<!DOCTYPE HTML>
<!--
	Prologue 1.1 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Poll of voting intention</title>
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
      source: "search.php",
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
								<li><a href="#top" id="top-link" class="skel-panels-ignoreHref"><span class="fa fa-home">Find your constituency</span></a></li>
								<li><a href="#portfolio" id="portfolio-link" class="skel-panels-ignoreHref"><span class="fa fa-th">Questions</span></a></li>
								<li><a href="#about" id="about-link" class="skel-panels-ignoreHref"><span class="fa fa-user">share</span></a></li>
								
							</ul>
						</nav>
						
				</div>
				
				<div class="bottom">

				
					
				
				</div>
			
			</div>

		<!-- Main -->
			<div id="main">
			
				<!-- Intro -->
					<section id="top" class="one">
						<div class="container">

				

							<header>
								<h2 class="alt">This is a web app to provide a poll of voting intention for the upcoming election. </h2>
							</header>
							
							<p>Please specify your constituency:</p>
<p><div class="ui-widget">

  	<form method="post" action="#">
  	<div class="12u"><input type="text" class="text" id="tags" name="constituency" placeholder="Your constituency..." /> </form>
    
</div></p>
							<footer>
                            
					
							</footer>

						</div>
					</section>
					
				<!-- Portfolio -->
					<section id="question1" class="two">
						<div class="container">
					
							<header>
								<h2>Are you going to vote?</h2>
							</header>
							
						  <a href="#" id="Yes" class="button">Yes</a>	
						 <a href="#" id="No" class="button">No</a>
							
						</div>
					</section>

				<!-- About Me -->
					<section id="who" class="three">
						<div class="container">

							<header>
								<h2>Who are you going to vote for?</h2>
							</header>

							1 2 3 

						</div>
					</section>
			
				<!-- Contact -->
					<section id="share" class="four">
						<div class="container">

							<header>
								<h2>Share our voting intention</h2>
							</header>

							
<div id="share-buttons">
 
<!-- Facebook -->
<a href="http://www.facebook.com/sharer.php?u=http://netcafesolutions.com/poll" target="_blank"><img src="http://www.simplesharebuttons.com/poll/images/somacro/facebook.png" alt="Facebook" /></a>
 
<!-- Twitter -->
<a href="http://twitter.com/share?url=http://netcafesolutions.com/poll&text=Voting for 2013" target="_blank"><img src="http://www.simplesharebuttons.com/poll/images/somacro/twitter.png" alt="Twitter" /></a>
 
<!-- Google+ -->
<a href="https://plus.google.com/share?url=http://netcafesolutions.com/poll" target="_blank"><img src="http://www.simplesharebuttons.com/poll/images/somacro/google.png" alt="Google" /></a>
 
<!-- Digg -->
<a href="http://www.digg.com/submit?url=http://netcafesolutions.com/poll" target="_blank"><img src="http://www.simplesharebuttons.com/poll/images/somacro/diggit.png" alt="Digg" /></a>
 
<!-- Reddit -->
<a href="http://reddit.com/submit?url=http://netcafesolutions.com/poll&title=Voting for 2013" target="_blank"><img src="http://www.simplesharebuttons.com/poll/images/somacro/reddit.png" alt="Reddit" /></a>
 
<!-- LinkedIn -->
<a href="http://www.linkedin.com/shareArticle?mini=true&url=http://netcafesolutions.com/poll" target="_blank"><img src="http://www.simplesharebuttons.com/poll/images/somacro/linkedin.png" alt="LinkedIn" /></a>
 
<!-- StumbleUpon-->
<a href="http://www.stumbleupon.com/submit?url=http://netcafesolutions.com/poll&title=Voting for 2013" target="_blank"><img src="http://www.simplesharebuttons.com/poll/images/somacro/stumbleupon.png" alt="StumbleUpon" /></a>
 
<!-- Email -->
<a href="mailto:?Subject=Voting for 2013&Body=I see this website please visit http://netcafesolutions.com/poll"><img src="http://www.simplesharebuttons.com/poll/images/somacro/email.png" alt="Email" /></a>
 
</div>
							
						

						</div>
					</section>
			
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

