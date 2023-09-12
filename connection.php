<?php
$servername="localhost";
$username="root";
$password="";
$dbname="responsiveform";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{

    //echo"Conection Ok";
}
else
{
    echo"Connection failed".mysqli_connect_error();
}

?>