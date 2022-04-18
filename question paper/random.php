<?php

include 'database.php';
$result = mysqli_query($conn,"SELECT * FROM `master_paper` order by RAND() limit 1");
return $result;


?>
