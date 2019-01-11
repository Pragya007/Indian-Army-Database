<?php
//Start the session to see if the user is authenticated user. 

$ID = $_POST['ID']; 
$name = $_POST['name']; 
$rank = $_POST['rank']; 

    $doj = $_POST['doj']; 
    $dob = $_POST['dob']; 
    $dor = $_POST['dor']; 
    $squad = $_POST['squad']; 
    $year= $_POST['year']; 
    $pin= $_POST['pin'];
    $sex= $_POST['sex'];
    $weight= $_POST['weight'];
    $height= $_POST['height'];
$chest= $_POST['chest'];

//If all validations are correct, connect to MySQL and execute the query 

//Connect to mysql server 
$link = mysqli_connect('localhost', 'root', ''); 
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server: ' . mysqli_error()); 
} 
//Select database 
$db = mysqli_select_db($link,'armydb'); 
if(!$db){ 
die("Unable to select database"); 
} 
//Create Insert query 
$query = "INSERT INTO soldier  VALUES ('$ID','$name' ,'$rank' ,'$doj' , '$dob','$dor', '$squad' ,'$year', '$pin','$sex','$weight','$height','$chest')"; 
//Execute query 
$results = mysqli_query($link,$query); 
 
//Check if query executes successfully 
if($results == FALSE) 
echo mysqli_error($link) ; 
else 
echo 'Data inserted successfully! '; 
 
 

 
 


 
?>
