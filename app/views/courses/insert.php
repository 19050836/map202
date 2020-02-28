<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
	

<form action="/courses/insert" method="POST">
	
	<table id="course_insert">
		
		<tr>
			<td>
				 <label>Course id</label>
			</td>
			
			<td>
				<input type="text" name="courseid">
			</td>
		</tr>
		<tr>
			<td>
				<label>Department</label>
			</td>
			
			<td>
				 <input type="text" name="department">
			</td>
		</tr>
		<tr>
			<td>
				 <label>Program</label>
			</td>
			
			<td>
				<input type="text" name="program">
			</td>
		</tr>
		
		<tr>
			<td>
				  <label>Course Name</label>
			</td>
			
			<td>
				<input type="text" name="coursename">
			</td>
		</tr>
	</table> 
  <br>
	<br>
  <button type="submit">Submit</button>	 
</form>
	</div>
<?php require_once 'app/views/templates/footer.php' ?>