<?php echo $this->Html->docType('html5'); ?> 
<html lang="en">
<head>
<?php echo $this->Html->charset(); ?>
  <title><?php echo  Configure::read('Website.HeadingTitle')." : ".Configure::read('Website.title_for_layout');  ?></title>
  <?php
			echo $this->Html->meta('icon');
			echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
			echo $this->fetch('meta');

			echo $this->Html->css('bootstrap');
			// Uncomment this to enable the bootstrap gradient theme (Flat is way better though).
			echo $this->Html->css('bootstrap-responsive.min');
			echo $this->Html->css('global');

			echo $this->fetch('css');
			
			echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js');
			echo $this->Html->script('libs/bootstrap.min');
			
			echo $this->fetch('script');
		?>
		
		

</head>

<body>


    <nav id="navigation">
      <div class="container">
        <ul class="navlinks">
		

		<?php
		for($i=1;$i<=3;$i++)
		{
		echo "<li>";
		echo $this->Html->link(
    Configure::read('Menu.item'.$i),
    array('controller' => Configure::read('Menu.controlerLink'.$i), 'action' => Configure::read('Menu.actionLink'.$i))
);  echo "</li>";
   
	    } 
		?>
         
		  <?php if($this->Session->read('User.login')=="1")
		  {
		  echo '<div class="pull-right">
		  <li>'.$this->Form->postLink(
'My Surveys',
array('controller'=>'Surveys','action' => 'index')).' </li>
		  
		  <li>'.$this->Form->postLink(
'logout',
array('controller'=>'Users','action' => 'logout')).' </li></div>'; 
}
else
{

 echo '<div class="pull-right"><li>'.$this->Html->link(
'Login',
array('controller'=>'Users','action' => 'login')).''.$this->Html->link(
'Register',
array('controller'=>'Users','action' => 'register')).' </li></div>'; 



}



?>
          
		  
        </ul>
      </div>

    </nav>
	
    
    <header id="heading" >
	
      <div class="container text-center">
        <h1><?php echo Configure::read('Website.HeadingTitle');?></h1>
        <h4><?php echo Configure::read('Website.HeadingDescription'); ?></h4>
        
        <p><a href="<?php echo $this->webroot.Configure::read('Website.ButtonLink'); ?>" class="btn btn-large btn-success"><?php echo Configure::read('Website.ButtonDescription'); ?></a></p>
      </div>
	  </div>
    </header>
    
    <div id="main-content">
      <div class="container">
      
               <h2><?php  echo $title; ?></h2>
        <hr>
        
 
	<?php $infoMessage=$this->Session->flash(); ?>
    <div class="alert alert-info " <?php if ( $infoMessage=="") echo "hidden"; ?> >
            <?php echo $infoMessage; ?>
        </div>
       
        
        <div class="row-fluid">
        <?php echo $this->fetch('content'); ?>
        </div><!-- @end .row-fluid -->
        
        <hr>
      </div><!-- @end .container -->
    </div><!-- @end #main-content -->

 	<?php echo $this->element('content/threeColums'); ?>
    
    <div id="footer">
      <div class="container">
	   <p>This Application uses the OCR technology in order to read successfully the surveys</p>
        <p>Web Development and creator of OCR algorithms is <a href="">George Georgiadis</a>.</p>
       
        <p><small>This Website created with Cake PHP (MVC design pattern) and  <a href="http://twitter.github.io/bootstrap/">Twitter Bootstrap</a></small></p>
      </div>
    </div>
</body>
</html>