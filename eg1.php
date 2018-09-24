<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dm_db";
$bmi=array();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM nutrition";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$y=$row["bmi"];
		echo $y."<br>";
		
		
        //echo "<br> Height: ". $row["height"]. " Weight: ". $row["weight"]. " BMI:" . $row["bmi"] . "<br>";
		
    }
	
	$arrlength = count($bmi);
	for($x = 0; $x < $arrlength; $x++) {
		
	//echo printf("%f\n", $bmi[$x]);
   
    echo "<br>";
	}
	
	
	
	
} 

else {
    echo "0 results";
}

$conn->close();




?>

