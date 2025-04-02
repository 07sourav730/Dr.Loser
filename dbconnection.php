<?php
$host="localhost";
$username="root";
$password="";
$databasename="dr.loser01";
$connection=mysqli_connect( $host,$username,$password,$databasename);
if($connection){
    echo "connected";
}
else{
    echo"not connected";
}
?>