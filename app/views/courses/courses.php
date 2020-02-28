<?php require_once 'app/views/templates/header.php' ?>
<div class="container" > 
  <?php
  foreach($data['coursesdata'] as $courses)
  { 
	  echo '<a class="custom">'.$courses['coursename'].'</a><br>';
  } 
  ?>
</div> 
<?php require_once 'app/views/templates/footer.php' ?>