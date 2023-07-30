<?php
$servername = "localhost";
$user = "root";
$password = "";
$db = "sample";

$conn = mysqli_connect($servername,$user,$password,$db);
if(!&conn){
    die("Connection failed: ".mysqli_connect_error());

}
else{
    echo"Connection successful! ";
}




?>