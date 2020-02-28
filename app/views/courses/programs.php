<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
  <?php
	
	
	
	
  foreach($data['programsdata'] as $programs)
  { 
    		$url=$data["department"]."/".$programs["program"];
	  
	  
	  $prog=$programs['program'];
	  
	  
	  		echo "<a class='custom' href='$url'>$prog</a><br>";
  } 
  ?>
</div>
<?php require_once 'app/views/templates/footer.php' ?>