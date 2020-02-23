<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
  <ul class="ul_style">
  <?php
	
	
	
	
	
	
	
	
	
  foreach($data['programsnames'] as $programlist)
  {
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
    $prog=$programlist['program'];
    $path=$data["department"]."/".$prog;
	  echo "<li class='li_style'><a href='$path'>$prog</li>";
	  
	  
	  
  } 
  ?>
  </ul>
</div>
<?php require_once 'app/views/templates/footer.php' ?>