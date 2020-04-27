<?php

$servername="localhost";
$username="root";
$password="";
$dbname="CSE2";

$conn= new mysqli($servername, $username, $password, $dbname);

$q="INSERT INTO emp(ename, desgn)
VALUES ('a','s')";

$r="SELECT ename from emp";

if($conn->query($q)==TRUE){
	echo "new rec created"."<br>";
}
else{
	echo "Error:".$sql."<br>".$conn->error;
}
if($conn->query($r)==TRUE){
	echo "yo man u got selection right";
}
else{
	echo "Nope.. Not happening".$sql."<br>".$conn->error;
}
$conn->close();

?>