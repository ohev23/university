<?php
$con = mysqli_connect("127.0.0.1", "root", "", "project1");
$uploadfile='img/' . basename($_FILES['img']['name']);
mysqli_query($con, "INSERT INTO  works(description, img, student_id) VALUES ('".$_POST['description']."', '".$uploadfile."','".$_POST['student_id']."')");

	move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
	header('location:accountStudent.php');
 
 ?>