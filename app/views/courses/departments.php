<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
  <?php
  foreach($data['departmentsdata'] as $department)
  {
	  
	  
	  
	  
	  
	  
	  $value=$department['department'];
	  echo "<a class='custom' href='courses/$value'>$value</a>";
  } 
  ?>
</div>
<?php require_once 'app/views/templates/footer.php' ?>