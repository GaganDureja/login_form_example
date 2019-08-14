<?php

$connect = mysqli_connect('localhost', 'root', 'Password@123');

$create_db_query = "CREATE DATABASE Welcome";



mysqli_query($connect, $create_db_query);



?>