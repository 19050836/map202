<?php
class Courses extends Controller
{

	
	
	public function insert()
	{
		
		
		if($_POST["program"])
		{
			$model=$this->model("Course");
			
			$model->addcourse($_REQUEST["department"],$_REQUEST["courseid"],$_REQUEST["program"],$_REQUEST["coursename"]); 
			header('Location: /courses');  
			
		}
		else
		{
			$this->view('courses/insert');
		}
		
		
		
		
	}
	
	
    public function index($department=null,$program=null) 
	{	
		
		
		
		
		
		
		
		$model=$this->model("Course");
		
		
		if(isset($department)&&!isset($program))
		{
	$programs=$model->programs($department);
			
						$this->view('courses/programs', ['programsdata' => $programs,'department' => $department]);
		}
		else if  (isset($department)&&isset($program))
		{
	$courses=$model->courses($department,$program);
			
							$this->view('courses/courses', ['coursesdata' => $courses]);
		}  
		else
		{
			$departments=$model->departments();
			$this->view('courses/departments', ['departmentsdata' => $departments]);
		} 
	}
	
	
	
	
	
}

?>