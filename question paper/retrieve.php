<?php
include_once 'database.php';
//This is a Method to generate a Random data from the Database
#$result = mysqli_query($conn,"SELECT * FROM `temp` order by RAND() limit 1");
?>

<!DOCTYPE html>
<html>
<head>
<title> Question Paper</title>
</head>
<body>
<table>
<tr>
<td>Question</td>
<td>Marks</td>
<td>CO Number</td>
</tr>
<!--The below code selects a random value from the database-->
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {   
?>
<tr >
<td><?php echo $row["Question"]; ?></td>
<td><?php echo $row["Marks"]; ?></td>
<td><?php echo $row["CO Number"]; ?></td>
</tr>
<?php
$i++;
}
 
?>

</table>
</body>
</html>