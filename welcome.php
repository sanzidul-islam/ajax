<?php 


include "Database/dbread.php";


if(isset($_GET['userName'])){
	$allSearchedUsers = searchUser($_GET['userName']);
	echo "First Name " .$allSearchedUsers['fname'] ."<br>";
	echo "LAst Name " .$allSearchedUsers['lname'] ."<br>";
	echo "Gender " .$allSearchedUsers['gender'] ."<br>";
	echo "Date of Birth ". $allSearchedUsers['bdate'] ."<br>";
	echo "Present Address " .$allSearchedUsers['p'] ."<br>";
	echo "Religion " .$allSearchedUsers['reg'] ."<br>";
	echo "Permanent Address ". $allSearchedUsers['pp'] ."<br>";
	echo  "Email ".$allSearchedUsers['m'] ."<br>";
	echo "User Name ". $allSearchedUsers['userName'] ."<br>";
	echo "Password ". $allSearchedUsers['Password'] ."<br>";


}
else{
	echo "Error";
	return;
}
?>
