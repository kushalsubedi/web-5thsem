<?php
include("connection.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
}
 echo $name;
$conn=mysqli_connect($servername,$username,$password);

if(!$conn){
    die("connection failed".mysqli_connect_error());
}
else{
    echo "connected successfully \n";
}

$connection=mysqli_select_db($conn,$dbname) or die("could not select database");
if($connection){
    echo "database connected \n";
}
else{
    echo "database not connected";
}


$sql = "INSERT INTO studentform (name, email, phone) VALUES ('$name', '$email', '$phone');";

$data = mysqli_query($conn,$sql);

if($data){
    echo "data inserted into database";
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} 
mysqli_close($conn);
?>