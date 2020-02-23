<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
	
	
	
	
	
 <ol class="ul_style">
  
	 
	 
	 
	 
	 
	 
	 <?php
  foreach($data['coursesnames'] as $courses)
  { 
	  echo '<li class="li_style">'.$courses['coursename'].'</li>';
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
  } 
  ?>
  </ol>	
</div> 







<?php require_once 'app/views/templates/footer.php' ?>