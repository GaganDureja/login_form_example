<?php 
$connect = mysqli_connect('localhost', 'root', 'Password@123', 'Welcome');

if($connect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$query = "SELECT * FROM userdata";



if ($result = mysqli_query($connect, $query)){
	if(mysqli_num_rows($result) > 0){
		echo "<table>";
		 echo "<tr>";
		  echo "<th>name</th>";
		  echo "<th>username</th>";
		  echo "<th>passsword</th>";
		 echo "</tr>";
	while ($row = mysqli_fetch_array($result)) {
		 echo "<tr>";
		 echo "<td>" . $row['name'] . "</td>";
		 echo "<td>" . $row['username'] . "</td>";
		 echo "<td>" . $row['passsword'] . "</td>";
		 echo "</tr>";
	} 
        echo "</table>";
       

	}else {
		echo "No records matching your query found";
	}
}else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}
mysqli_close($connect);

 ?>