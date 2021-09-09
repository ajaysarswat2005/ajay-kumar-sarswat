<!-- <?php 

$server='localhost';
$user='root';
$password='';
$db='coviddb';

$con = mysqli_connect($server, $user, $password, $db);
if ($con) {
	?>
	<script>
	alert("connection successful");
	</script>
	<?php
}else{
	?>
	<script>
	alert("no connection");

	</script>
	<?php
}


 ?> -->

 <?php

$con = mysqli_connect('localhost','root');

if ($con) {
	echo "Connection successful";
}
else{
	echo "No connection";
}

mysqli_select_db($con,'coviddb');

$user = $_POST['username'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$suggestion = $_POST['suggestion'];

$query = " insert into covidcase (user, email , mobile, suggestion) values ('$user', '$email', '$mobile', '$suggestion')";

mysqli_query($con,$query);

header('location:index.php');

  ?>