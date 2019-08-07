<?php 
$connect = mysqli_connect('localhost', 'root', 'Password@123', 'Welcome');

$query = select * from userdata;
$result = mysqli_query($connect, $query);

echo $query;
echo $result;

echo 1 + 1;


 ?>