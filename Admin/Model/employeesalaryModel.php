<?php 

 require_once('db.php');

 
 function addEmployeeSalary($Emp){
		$con = getConnection();
		$sql = "insert into employeesalary values('','{$Emp['name']}' , '{$Emp['nid']}' , '{$Emp['email']}' , '{$Emp['phoneNo']}' , '{$Emp['salary']}' , 'EmployeesSalary')";
				 if(mysqli_query($con , $sql)){
				 	return true;
				 }
				else{
					return false;
				}

	}
	function AllEmployeesSalary(){
		$con = getConnection();
		$sql = "select id,name,nid,email,phoneNo,salary from employeesalary";
		$result = mysqli_query($con , $sql);
		return $result;
			


	}

?>