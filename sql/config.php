<?php
$db="php";
$host="localhost";
$password="admin";
$username="root";
$conn=mysqli_connect($host,$username,$password,$db);
if($conn){
    echo "Database connect maze kro";

}
else{
    echo " error".mysqli_error($conn);
}
?>