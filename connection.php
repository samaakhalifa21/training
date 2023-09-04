<?php 

$host= "localhost";
$user="root";
$password="samaa";
$database="library";
$connect = new mysqli ($host,$user,$password,$database);
if (!$connect){
    echo "failed";
}
else { echo "database connected";}

?>
