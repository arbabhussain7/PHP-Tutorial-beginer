<?php
echo ' Now we are going to make database using php';

$servername="localhost";
$username= "root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn){
    die (" Connection Fail" . mysqli_connect_error());
}
else {
    echo "<br> Connected Successfully";
}

$sql="Create database Arbab1";
$result=mysqli_query($conn,$sql);
if(!$result){
echo " Your Database Couldn't Connected Successfully!!"
}

?>



