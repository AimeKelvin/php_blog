<?php 

$host="localhost";
$user="root";
$pass="";
$dbname="blog";

$conn = mysqli_connect($host,$user,$pass,$dbname) ;

if($conn){
   echo "sucess";
}

?>