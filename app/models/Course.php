<?php











class Course
{
	public function __construct()
	{
		
	}
	 
	
	public function programs($department)
	{
		$db = db_connect();
		$statement = $db->prepare("select DISTINCT program from courses WHERE department = :department ");
		
		$statement->bindValue(':department',str_replace("%20", " ", $department)); 
		
        $statement->execute(); 
		
		
        $courses = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $courses;
	}
	
	public function addcourse ($department,$courseID,$program,$courseName) 	
	{
		$db = db_connect();
        $statement = $db->prepare("insert into courses (courseID,department,program,courseName)". " VALUES (:courseID,:department,:program,:courseName); "); 
		
			
		$statement->bindValue(':courseName',  $courseName);
		
		$statement->bindValue(':program', $program);
							  
							  
							  
							  
							  
							  
							  
							  
							  
		
		$statement->bindValue(':department',$department);
		
		$statement->bindValue(':courseID', $courseID);
		
		
	
		
		
		
		
		
		
		
		
        return $statement->execute();
	}
	

	public function departments()
	{
		$db = db_connect();
		
        $statement = $db->prepare("select distinct department FROM courses");
		
        $statement->execute();
		
        $courses = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $courses;
	}
	 

	
	public function courses($department,$program)
	{
		$database = db_connect();
		$statement = $database->prepare("SELECT * FROM courses WHERE department = :department and program = :program");
			$statement->bindValue(':program', str_replace("%20", " ", $program));
		
		$statement->bindValue(':department', str_replace("%20", " ", $department));
	
        $statement->execute();
        $courses = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $courses;
	}
	
	
}
?>