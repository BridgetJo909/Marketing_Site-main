<?php
//DB connection
$user='root';
$pass='';
$db='clientdb';

//create connection
$conn=new mysqli('localhost', $user, $pass, $db)

//check connection
if ($conn->connect_error) {
    die("Unable to connect: "
        . $conn->connect_error);
}

//clientform
$clientName = $_POST['clientName']
$clientEmail = $_POST['clientEmail']
$actName = $_POST['actName']
$City = $_POST['City']
$StateProvince = $_POST['StateProvince']
$Country = $_POST['Country']
$clientSource = $_POST['clientSource']
$company = $_POST['company']
$startDate = $_POST['startDate']
$endDate = $_POST['endDate']
$monthlySpot = $_POST['monthlySpot']
$epkType = $_POST['epkType']
$genre = $_POST['genre']
$outlet = $_POST['outlet[]']
$hrRate = $_POST['hrRate']
$comments = $_POST['comments']

//inserting queries
$sql1 = "INSERT INTO clients VALUES ('$clientName',
           '$clientEmail','$actName','$City','$StateProvine',
            '$Country','$clientSource','$company' )";

$sql2 = "INSERT INTO projects VALUES ('$startDate','$endDate','$monthlySpot',
          '$epkType','$genre','$outlet','$hrRate','$comments')";

if(mysqli_query($conn, $sql1, $sql2)){
  echo "<h3>data stored in a database successfully."
          . " Please browse your localhost php my admin"
          . " to view the updated data</h3>";
  echo nl2br("\n$clientName\n $clientEmail\n "
          . "$actName\n $City\n $StateProvince");
} else{
    echo "ERROR: Uh oh, something went wrong. Check the db."
          . mysqli_error($conn);
}

//close connection
mysqli_close($conn);
?>
