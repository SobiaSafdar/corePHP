<?php
$link = mysqli_connect("localhost","root","","aptech_db");

if( mysqli_connect_errno())
echo "connection not established".mysqli_connect_error() ;
else  echo "Connected successfully";

?>