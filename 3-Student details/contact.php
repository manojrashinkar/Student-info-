<?php


$con = mysqli_connect('localhost', 'root', '','db_stud');


$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$mark1 = $_POST['mar1'];
$mark2 = $_POST['mar2'];
$mark3 = $_POST['mar3'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `student` (`id`, `sname`, `semail`, `sphone`, `m1`,`m2`,`m3`,`msg`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone','$mark1','$mark2 ','$mark3 ', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>