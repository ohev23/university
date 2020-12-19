<?php 
session_start();
$con = mysqli_connect('127.0.0.1', 'root', '', 'project1');
$query = mysqli_query($con, "SELECT * FROM students WHERE phone='{$_POST['phone']}' AND password='{$_POST['password']}'");

$num = mysqli_num_rows($query);
if($num>0){
	$stroka =$query->fetch_assoc();
	$_SESSION['id']= $stroka['id'];
	header("Location: accountStudent.php");
} else{
	echo "Нет такого пользователя";
}
?>