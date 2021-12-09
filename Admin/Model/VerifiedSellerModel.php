<?php 

 require_once('db.php');

 
 function addVerifiedSeller($Ss){
		$con = getConnection();
		$sql = "insert into VerifiedSeller values('','{$Ss['name']}' , '{$Ss['nid']}' , '{$Ss['email']}' , '{$Ss['phoneNo']}' , '{$Ss['address']}' , 'VerifiedSeller')";
				 if(mysqli_query($con , $sql)){
				 	return true;
				 }
				else{
					return false;
				}

	}
function AllVerifiedSeller(){
		$con = getConnection();
		$sql = "select id,name,nid,email,phoneNo,address from VerifiedSeller";
		$result = mysqli_query($con , $sql);
		return $result;
			


	}


?>