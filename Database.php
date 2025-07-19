<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "promovie";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysqli_error());
}
?>