<?php
   include('./config.php');
   include('./student.php');
//    echo $result;
$std = new Student($conn);
$std -> getData();
// $std->insertData();
$std -> updateData();
$std -> deleteData();



?>