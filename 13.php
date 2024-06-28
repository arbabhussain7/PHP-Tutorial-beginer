<?php
echo ' Nw we are connecting MySQL to Php ';


$servername = "localhost";
$username ="root";
$password="";

$conn= mysqli_connect($servername,$username,$password);
if(!$conn){
    die('connection Failed'.mysqli_connect_error());
}
else{
    echo"<br> connection Was Successfully! ";
}


?>