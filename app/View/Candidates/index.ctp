<section id="top" class="one">
						<div class="container">

				

							<header>
								<h2 class="alt">This is a web app to provide a poll of voting intention for the upcoming election. </h2>
							</header>
							
							<p>Please specify your constituency:</p>
<p><div class="ui-widget">

  <form role="form" id="my_form" method="post">
  	<div class="12u"><input type="text" class="text" id="tags" name="constituency" placeholder="Your constituency..." /> 


    
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
							
						  <a href="#"  id="Yes" class="button">Yes</a>	
						 <a href="#" onclick="document.getElementById('my_form').submit();" id="No" class="button">No</a>
							
						</div>
					</section>

				<!-- About Me -->
					<section id="who" class="three">
						<div class="container">

							<header>
								<h2>Who are you going to vote for?</h2>
							</header>

					

		
		
		<?php 
echo '<select name="Candidate">';
 echo' <option value="0">Please select Candidate</option>';
foreach ($Candidates as $Candidate):  


//echo $this->Form->postLink($Candidate['Candidate']['NAME'],array('action' => 'vote', $Candidate['Candidate']['ID']),array('confirm' => 'Are you sure?'));

 echo' <option value="'.$Candidate['Candidate']['ID'].'">'.$Candidate['Candidate']['NAME'].'</option>';
 



//echo "<br>";







   endforeach;


 echo '</select>';

 ?>
 
 <input class="btn btn-primary" type="submit" value="Vote Now!" />
</form>
						</div>
					</section>

