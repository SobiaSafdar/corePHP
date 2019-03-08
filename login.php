
<?php


if(isset($_POST['submit'])){

    $username =  $_POST['username'];
    $password =  $_POST['password'];

    include "includes/connect.php";

    $query = "SELECT * FROM admin where username ='".$username."' and password = '".$password."'";
    $result = mysqli_query($link,$query);

    //var_dump($result);

    if(mysqli_num_rows($result) > 0 )
    {
        session_start();
        $row = mysqli_fetch_assoc($result);
        
        // direct username 
        $_SESSION['username']=$row['username'] ;
        // complete row
        $_SESSION['row']=$row;


echo $_SESSION['username'];
       // var_dump($row);

        echo "Row Matched";

        header('Location: home.php');
    }
    else
    {
        echo "Username and Password does not match";
    }


}
?>

<form name="" method="POST" >

<input type="text" name="username" required placeholder = "Username" >
<input type="text" name="password" required placeholder = "password">

<input type="submit" name="submit" value="Submit">

</form>
