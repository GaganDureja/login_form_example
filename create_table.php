<?php

$connect = mysqli_connect('localhost', 'root', 'Password@123', 'Welcome');

$create_table_query = "CREATE TABLE users(
                       name varchar(50),
                       username varchar(50),
                       password varchar(50)
                       )";

mysqli_query($connect, $create_table_query);
                      


?>