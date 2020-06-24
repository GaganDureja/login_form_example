<?php

$connect = mysqli_connect('localhost', 'root', '', 'Welcome');

$insert_users_query = "INSERT INTO users(name, username, password)
                       VALUES('Gagan', 'GaganDureja', 'gagan123')";

mysqli_query($connect, $insert_users_query);
                      


?>