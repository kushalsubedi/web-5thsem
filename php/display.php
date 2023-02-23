<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <th>Name</th>
        <th>Email</th>
        <th>
        phone
        </th>
<?php
include("connection.php");
$sql = "SELECT * from studentform ;";
$result = mysqli_query($conn,$sql);
$data=mysqli_fetch_all($result,MYSQLI_ASSOC);

foreach($data as $row){
    echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['phone']."</td>";
    echo "</tr>";
}


mysqli_close($conn);
?>
    </table>
</body>
</html>