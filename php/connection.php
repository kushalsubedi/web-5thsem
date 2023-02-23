<?php

$servername = "localhost";
$username="kushalsubedi";
$password="kushalsubedi";
$db="webtech";
$table_name="studentform";

$conn = mysqli_connect($servername,$username,$password)or die("Could not connect: " . mysqli_error());

$connection=mysqli_select_db($conn,$db) or die("could not select database");
?>