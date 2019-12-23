<!DOCTYPE html>
<html>
<head>
	<title>Task1</title>
</head>
<body>
	<style>
		img{width: 150px;}
		body{
			border:2px solid black;
			border-radius:5px;
			width:300px;
			height: 120px;
			display:flex;
		}
	</style>
	<img src="38.jpg">
	
</body>
</html>

<?php
	$connect = mysqli_connect('localhost', 'root', '', 'task10.1');

	if(isset($_POST['cars'])){
		$name=$_FILES["image1"]["image"];
		$type=$_FILES["image1"]["type"];
		$data = file_get_contents($_FILES["image1"]['tmp_image']);
		$stmt = "INSERT INTO cars VALUES('$data','$name')";
		mysql_query($stmt);
	}
		echo "<br>";
	$result = $connect->query("SELECT * FROM  cars");
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "id: " . $row["id"]. " NAME: " . $row["maker"] .$row["model"]. " PRICE: " . $row["price"]. $row['image'].
	        "<br>";
	    }
	} else {
	    echo "0 results";
	} 	
?>