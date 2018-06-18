
<?php 
	$name = $_POST["name"];	
	$city = $_POST["city"];	
	$tmp_name= $_FILES['uploadedimage']['tmp_name'];
	$filename= $_FILES['uploadedimage']['name'];
    $folder = "./images/".$filename;
    if($_FILES['uploadedimage']){
    	move_uploaded_file($tmp_name, $folder);
    }
    $servername = "localhost";
	$db = "testdb";
	$username = "root";
	$password = "";	

	$conn = new mysqli($servername, $username, $password, $db);

	if($conn->connect_error) {
		die("Connection Failed : " . $conn->connect_error);
	}

	$query = "INSERT INTO user (name, city, image) VALUES ('$name', '$city', '$folder')";
	$result = $conn->query($query);

	$conn->close();

	header ("location: ./listing.php");
?>