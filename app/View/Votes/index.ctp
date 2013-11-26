
<section id="results" class="one">
						<div class="container">
						
						
							<header>
									<h2>Nationally results</h2>
							</header>
	<?php 

foreach ($Votes as $Vote):  

foreach ($Candidates as $Candidate):  
if($Vote['Vote']['ID_CAND']==$Candidate['Candidate']['ID'])
{
echo " ".$Candidate['Candidate']['NAME'];
}
else if($Vote['Vote']['ID_CAND']=="")
{

echo " I Don't vote: ";

}
   endforeach;
echo " Total votes: ".$Vote[0]['final'];
echo "<br>";

   endforeach;




 ?>
 
	</div>
					</section>
				
<section id="results" class="two">
						<div class="container">
						
						
							<header>
								<h2> Search for your constituency: </h2>
							</header>
							 <form role="form" id="my_form" method="post">
  	<input type="text" class="text" id="tags" name="constituency" placeholder="Your constituency..." /> 
	
	 <input class="btn btn-primary" type="submit" value="Search" />
</form>
								</div>
					</section>
						

 
 
	<section id="share2" class="four">
						<div class="container">

							<header>
								<h2>Share our voting intention</h2>
							</header>

							
<div id="share-buttons">
 
<!-- Facebook -->
<a href="http://www.facebook.com/sharer.php?u=http://netcafesolutions.com/poll" target="_blank"><img src="http://icons.iconarchive.com/icons/brainleaf/round-social/128/facebook-icon.png" alt="Facebook" /></a>
 
<!-- Twitter -->
<a href="http://twitter.com/share?url=http://netcafesolutions.com/poll&text=Voting for 2013" target="_blank"><img src="http://icons.iconarchive.com/icons/brainleaf/round-social/128/twitter-icon.png" alt="Twitter" /></a>
 
<!-- Google+ -->
<a href="https://plus.google.com/share?url=http://netcafesolutions.com/poll" target="_blank"><img src="http://icons.iconarchive.com/icons/brainleaf/round-social/128/google-plus-icon.png" alt="Google" /></a>
 
 
<!-- LinkedIn -->
<a href="http://www.linkedin.com/shareArticle?mini=true&url=http://netcafesolutions.com/poll" target="_blank"><img src="http://icons.iconarchive.com/icons/brainleaf/round-social/128/linkedin-icon.png" alt="LinkedIn" /></a>
 
 
 
</div>
							
						

						</div>
					</section>