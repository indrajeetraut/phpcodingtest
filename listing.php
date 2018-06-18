<?php include 'header.php';	?>
<?php

	$servername = "localhost";
	$db = "testdb";
	$username = "root";
	$password = "";	
	
	$conn = new mysqli($servername, $username, $password, $db);

	if($conn->connect_error) {
		die("Connection Failed : " . $conn->connect_error);
	}

	$sqlselect = "SELECT * FROM user";
	$result = $conn->query($sqlselect);

	$conn->close();
?>

  	<div class="container data">
  		
  		<table class="table jumbotron">
  			<th>Name</th>
  			
				<?php
  				if ($result->num_rows > 0) {
				    while($row = $result->fetch_assoc()) {
				    echo "<tr><td>" . $row["name"]. "</td><td><a href='./details.php?value=" .$row["name"]. "'>Details</a></td></tr>";
				  	}			    
				} else {
				    echo "0 results";
				}
				?>
			
  			
  		</table>
  	</div>

<?php include 'footer.php';	?>
