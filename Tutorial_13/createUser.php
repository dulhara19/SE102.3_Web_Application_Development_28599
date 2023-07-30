<?php

$conn = mysqli_connect("localhost","root","","sample");

if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}

$id =$_REQUEST['id'];
$name =$_REQUEST['name'];
$email =$_REQUEST['email'];
$psw= $_REQUEST['password'];

$sql = "INSERT INTO STUDENTS (id,name,email,password) 
VALUES('". $id . "','" . $name . "','" . $email ."','" . $psw . "')";

if($conn->query($sql)){
    echo "New User created successfully ";

}
else{
    echo "Error: " . $sql. "<br>" .$conn->error;
}

?>
