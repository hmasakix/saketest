<?php
// var_dump($_POST);
// exit();

$name = $_POST['name'];
$area = $_POST['area'];
$category = $_POST['case'];
$point = $_POST['point'];
$link = $_POST['link'];
    
$write_data = "<ul><li>$name</li>
               <li><span>$area</span><span>$case</span></li>
               <li>$productname</li>
               <li>$link</li></ul>\n";

$file = fopen('data/data.csv', 'a');
flock($file, LOCK_EX);
fwrite($file, $write_data);
flock($file, LOCK_UN);
fclose($file);

header('Location:index.php');
exit();