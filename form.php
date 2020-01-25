<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
echo "<p style='color:black'>Form successfuly submitted</p>";
die;
}
?>




<form method='POST'>

<form>
<input type="text" name="e_name" required placeholder="emp_First Name"><br>
	
<input type="id" name="emp_id" required placeholder="emp_id"><br>
	
<label for="age">enter your age:</label>
	
<select id="Select Age" name="Select Age">

<option value="Age" >26</option>

<option value="Age" >27</option>

<option value="Age" >28</option>
	
<option value="Age" >29</option>

</select>
<?php
$dbhost = "remotemysql.com";
    $dbname = "q3LxuhkoY0";
    $dbuser = "q3LxuhkoY0";
    $dbpass = "Nyey8CJoR4";
	
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

$query = "SELECT * FROM Emp";
     $stmt = $conn->prepare($query);
     $stmt->execute();

     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($result as $child)
{
echo "<option value='".$child["Emp"]."'>".$child["Emp"]."</option>";
}
?>
</select>
</select>  
<br>
<input type="submit" value="submission" />
</form>