<?php
$severname="localhost";
$username="root";
$password= "";
$database="qlbanqa";
$con=mysqli_connect($severname, $username, $password, $database);
if(!$con){
    die("error detected".mysqli_error($con));
}
else{
    echo"connection stablished succesfully";
}
?>