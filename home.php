<?php
if(!isset($_SESSION['username']))
header('Location:login.php');
?>

Home  | <a href="logout.php">Logout</a>


<br><br>
<?php
session_start();

if(isset($_SESSION['username']))
echo $_SESSION['username'];

if(isset($_SESSION['row']))
var_dump( $_SESSION['row']);
?>

