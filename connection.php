<?php
$servername= "localhost";
$username= "root";
$password= "";
$db_name= "db users";


$conn = new mysqli($servername, $username, $password, $db_name, 3306);
if ($conn->connect_error) {
    die("Connection failed". $conn->connect_error);
}
echo"Connection successful!"; //nampak dekat browser
                             //kalau tak nak nampak just 
?>