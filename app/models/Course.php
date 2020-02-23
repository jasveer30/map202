<?php
class Course
{
	public function __construct()
	{
		
	}
	 
	
	
	public function coursesnames($department,$program)
	{
		$dbs = db_connect();
		$stn = $dbs->prepare("SELECT * FROM courses WHERE department = :department and program = :program");
			$stn->bindValue(':program', str_replace("%20", " ", $program));
		
		$stn->bindValue(':department', str_replace("%20", " ", $department));
	
        $stn->execute();
        $coursesnames = $stn->fetchAll(PDO::FETCH_ASSOC);
		return $coursesnames;
	}
	
	public function programsnames($department)
	{
		$dbs= db_connect();
		$stn = $dbs->prepare("SELECT DISTINCT program from courses WHERE department = :department ");
		
		$stn->bindValue(':department',str_replace("%20", " ", $department)); 
		
        $stn->execute(); 
        $programsnames = $stn->fetchAll(PDO::FETCH_ASSOC);
		return $programsnames;
	}

	public function departmentnames()
	{
		$dbs = db_connect();
		
        $stn = $dbs->prepare("SELECT DISTINCT department FROM courses");
		
        $stn->execute();
		
        $departmentnames = $stn->fetchAll(PDO::FETCH_ASSOC);
		return $departmentnames;
	}
	 

	
	
	public function course ($courseID,$department,$program,$courseName) 	
	{
		$dbs = db_connect();
        $stn = $dbs->prepare("INSERT INTO courses (courseid,department,program,coursename)". " VALUES (:courseid,:department,:program,:coursename); "); 
		
		$stn->bindValue(':department',$department);
		
		
		
		
		$stn->bindValue(':courseid', $courseID);
		
		
		
		$stn->bindValue(':coursename',  $courseName);
		
		
		
		
		
		$stn->bindValue(':program', $program);
		
		
        return $stn->execute();
	}
}
?>