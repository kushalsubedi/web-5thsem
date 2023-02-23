<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
$person=array(

    array('name'=>'kushal',
    'email'=>'kushal@gmail.com',
    'phone'=>'0000'
),
array('name'=>'kushal',
'email'=>'kushal@gmail.com',
'phone'=>'00000'
),

)
?>

<table border="1" style="border-collapse:collapse">
<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
</tr>
<tr>
<?php
foreach($person as $row){
    echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['phone']."</td>";
    echo "</tr>";
}
?>
</tr>
</table>
</body>
</html>
