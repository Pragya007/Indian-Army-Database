<?php
//Start the session to see if the user is authenticated user. 

$pin = $_POST['pin']; 
$district = $_POST['district']; 
$state = $_POST['state']; 
$country = $_POST['country']; 

//If all valpinations are correct, connect to MySQL and execute the query 

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
$query = "INSERT INTO location VALUES ('$pin','$district','$state','$country')"; 
//Execute query 
$results = mysqli_query($link,$query); 
 
//Check if query executes successfully 
if($results == FALSE) 
{echo mysqli_error($link) ; }
else
    {

        echo '<script language="javascript">';
        echo 'alert("Successfully Registered"); location.href="location.html"';
        echo '</script>';
    }  

 
 


 
?>
