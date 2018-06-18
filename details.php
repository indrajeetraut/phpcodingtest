<?php include 'header.php';	?>
<?php

	$servername = "localhost";
	$db = "testdb";
	$username = "root";
	$password = "";	
	$name= $_GET["value"];
	$conn = new mysqli($servername, $username, $password, $db);

	if($conn->connect_error) {
		die("Connection Failed : " . $conn->connect_error);
	}

	$sqlselect = "SELECT * FROM user where name='" .$name. "'" ;
	$result = $conn->query($sqlselect);

	$conn->close();
?>

  	<div class="container data">
  		
  		<?php
  			if ($result->num_rows > 0) {
			    while($row = $result->fetch_assoc()) {
				    echo "<br><strong>Name : </strong>" .$row["name"]. "<br><strong>City : </strong>" . $row["city"]. "<br>";
				    $imageaddress = $row['image'];
				    echo  "<strong>Image : </strong><img src='./" .$imageaddress. "' width='150px' />";
				    }			    
				} else {
				    echo "0 results";
				}
				?>
  	</div>

<?php include 'footer.php';	?>
