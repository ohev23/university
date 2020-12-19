<?php
   session_start();
 ?>
<?php
	$con = mysqli_connect("127.0.0.1", "root", "", "project1");
	$query = mysqli_query($con, "SELECT * FROM universities INNER JOIN applications ON applications.university_id = universities.id");
	mysqli_query($con, "INSERT INTO applications( name, university_id, student_id) VALUES ('".$_POST['name']."','".$_POST['university_id']."','".$_SESSION['id']."')");

	header('location:accountStudent.php');
 ?>