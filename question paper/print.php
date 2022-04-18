<?php
include_once 'database.php';
//This is a Method to generate a Random data from the Database
$result = mysqli_query($conn,"SELECT * FROM `temp`");
?>

<!DOCTYPE html>
<html>
<head>
<title> Question Paper</title>
<style>
   button.print-button {
  width: 100px;
  height: 100px;
}
span.print-icon, span.print-icon::before, span.print-icon::after, button.print-button:hover .print-icon::after {
  border: solid 4px #333;
}
span.print-icon::after {
  border-width: 2px;
}

button.print-button {
  position: relative;
  padding: 0;
  border: 0;
  
  border: none;
  background: transparent;
}

span.print-icon, span.print-icon::before, span.print-icon::after, button.print-button:hover .print-icon::after {
  box-sizing: border-box;
  background-color: #fff;
}

span.print-icon {
  position: relative;
  display: inline-block;  
  padding: 0;
  margin-top: 20%;

  width: 60%;
  height: 35%;
  background: #fff;
  border-radius: 20% 20% 0 0;
}

span.print-icon::before {
  content: " ";
  position: absolute;
  bottom: 100%;
  left: 12%;
  right: 12%;
  height: 110%;

  transition: height .2s .15s;
}

span.print-icon::after {
  content: " ";
  position: absolute;
  top: 55%;
  left: 12%;
  right: 12%;
  height: 0%;
  background: #fff;
  background-repeat: no-repeat;
  background-size: 70% 90%;
  background-position: center;
  background-image: linear-gradient(
    to top,
    #fff 0, #fff 14%,
    #333 14%, #333 28%,
    #fff 28%, #fff 42%,
    #333 42%, #333 56%,
    #fff 56%, #fff 70%,
    #333 70%, #333 84%,
    #fff 84%, #fff 100%
  );

  transition: height .2s, border-width 0s .2s, width 0s .2s;
}

button.print-button:hover {
  cursor: pointer;
}

button.print-button:hover .print-icon::before {
  height:0px;
  transition: height .2s;
}
button.print-button:hover .print-icon::after {
  height:120%;
  transition: height .2s .15s, border-width 0s .16s;
}

    .container1{
        display : block;
        margin : auto;
        padding : 0% 0% 0% 37%; 
    }
    .container2{
        display : block;
        margin : auto;
        padding : 0% 0% 0% 40%; 
    }
</style>
</head>
<body>
    <div class="container2">
    <img src="http://localhost/question%20paper/logo.png" alt="DSCE's Logo" width="150px" height="150px">
    </div>
    <div class="container1">
    <h3>Print your Question Paper</h3>
    </div>
    
    
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
<td><?php echo $row["CO_Number"]; ?></td>
</tr>
<?php
$i++;

}
?>
</table>
<div class="container2">
<br>
<button class="print-button" onclick="window.print()"><span class="print-icon"></span></button>
</div>

</body>
</html>