<?php
//DB connection
$server = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'clientdb';

//create connection
$conn = mysqli_connect("$server" , "$user" , "$pass");
if(!$conn) {
  die("DB connection failed" . mysqli_error($conn));
}
$select_db = mysqli_select_db($conn, $dbname);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
error_reporting(1);

$clientName = $_POST['clientName'];
$clientEmail = $_POST['clientEmail'];
$actName = $_POST['actName'];
$City = $_POST['City'];
$StateProvince = $_POST['StateProvince'];
$Country = $_POST['Country'];
$clientSource = $_POST['clientSource'];
$company = $_POST['company'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$monthlySpot = $_POST['monthlySpot'];
$epkType = $_POST['epkType'];
$genre = $_POST['genre'];
$outlet = $_POST['outlet[]'];
$hrRate = $_POST['hrRate'];
$comments = $_POST['comments'];

//inserting queries, 1 is client table 2 is project
$sql = "INSERT INTO clients (clientName, clientEmail, actName,
          City, StateProvince, Country, clientSource, company)
          VALUES ('$clientName', '$clientEmail','$actName','$City','$StateProvince',
            '$Country','$clientSource','$company');
        INSERT INTO projects (startDate, endDate, monthlySpot,
          epkType, genre, outlet, hrRate, comments)
          VALUES ('$startDate','$endDate','$monthlySpot',
          '$epkType','$genre','$outlet','$hrRate','$comments')";

$mysqli = new mysqli($server, $user, $pass, $dbname);
$result = $mysqli -> multi_query($sql);

if($result){echo "inserted";}else{echo"error";}
/*if ($mysqli -> multi_query($sql)); {
  do {
    // Store first result set
    if($result = $mysqli -> store_result()){
      while ($row = $result -> fetch_row()){
        printf("%s/n"$row[0]);
      }
    }
    //print divider
    if ($mysqli->more_results()){
      printf("--------------/n")
    }
  }
} while ($mysqli -> next_result());
  echo "New records created";

  //echo nl2br("\n$clientName\n $clientEmail\n "
        //  . "$actName\n $City\n $StateProvince");
*/
//close connection
$mysqli -> close();
?>
