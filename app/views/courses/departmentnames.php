<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
  <ul class="ul_style">
 
	  
	  <?php
  foreach($data['departmentnames'] as $department)
  {
	 
	  $path=$department['department'];
	 
	  echo "<li class='li_style'><a href='courses/$path'>$path</a></li>";
  } 

  ?>
 
	</ul>
</div>
<?php require_once 'app/views/templates/footer.php' ?>