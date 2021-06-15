<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "omphu";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
"<br>";
$fname = $_POST['fname'];
$lname = $_POST['lname'];

$sql="select * from omphu where (fname='$fname' or lname='$lname');";

      $res=mysqli_query($conn,$sql);

      if (mysqli_num_rows($res) > 0) {
        
        $row = mysqli_fetch_assoc($res);
        if($fname==isset($row['fname']))
        {
            	echo "first name already exists";
				"<br>";
        }
		if($lname==isset($row['lname']))
		{
			echo "last name  already exists";
			"<br>";
		}
		}
else{
	echo "email and username doesnt exist";
//do your insert code here or do something (run your code)
}

?>
