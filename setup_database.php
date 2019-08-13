<?php 


$connect = mysqli_connect("localhost", "root", "Password@123");

$create_db = "CREATE database aselcome";

$create_table = "CREATE table users";

$insert_users = "INSERT INTO users('name', 'username', 'password')
                VALUES('Gagan', 'GaganDureja', 'gagan123')";

$insert_users . = "INSERT INTO users('name', 'username', 'password')
                VALUES('Golu', 'Golu123', 'golu!@#')";                



mysql_multi_query($connect, $create_db, $create_table, $insert_users);

?>