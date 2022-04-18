<?php
include 'database.php';


include_once 'random.php';
include_once 'retrieve.php';
$row = mysqli_fetch_array($result);
$mark = $row["Marks"];
if($mark == 10){
    include_once 'random.php';
    include_once 'retrieve.php';
}
else{
    while (1) {
        include_once 'random.php';
        $row = mysqli_fetch_array($result);
        $mark = $row["Marks"];

        $a  = 10 - $mark;
        if ($a!= 10- $mark) {
            include_once 'random.php';
        }
        else {
            include_once 'random.php';
            include_once 'retrieve.php';
        }
        break;
    }
}
?>