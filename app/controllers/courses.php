<?php
class Courses extends Controller {

    public function index($department=null,$program=null) 
	{	
				$newmodel=$this->model("Course");
		
		if(isset($department)&&isset($program))
		{
					$coursesnames=$newmodel->coursesnames($department,$program);
			
				$this->view('courses/coursesnames', ['coursesnames' => $coursesnames]);
		}  
		
		else if(isset($department)&&!isset($program))
		{
					$programnames=$newmodel->programsnames($department);
			
				$this->view('courses/programnames', ['programsnames' => $programnames,'department' => $department]);
		}
		else
		{
				$departmentnames=$newmodel->departmentnames();
			
			
			
			
			$this->view('courses/departmentnames', ['departmentnames' => $departmentnames]);
		} 
	}
	
	public function course($insert=null)
	{
		if($insert==true)
		{
			$newmodel=$this->model("Course");
			
			$success =$newmodel->course($_REQUEST["course-id"],$_REQUEST["department"],$_REQUEST["program"],$_REQUEST["course-name"]);
			if($success==true)
			{
				header('Location: /courses/course');
			
				
				
				
				
				
				
			}
			
			die;
			
		}
		
		$this->view('courses/course');
		
		
	}
	
}

?>