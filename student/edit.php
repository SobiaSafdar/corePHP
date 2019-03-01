<?php

include "../includes/connect.php";

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $cnic = $_POST['cnic'];
    
    $insertquery= "UPDATE `student` SET
    username = '$username',
    cnic = '$cnic'
    WHERE id =". $_GET['id']
    ;
    
    $result = mysqli_query($link, $insertquery) or die("Error in the consult.." . mysqli_error($link));;

     //var_dump($result);
    if($result)
    {
        
        header('Location:list.php');
    }
    else {
        echo "Not Updated";    
    }

}

if(isset($_GET['id']))
{


    //echo $_GET['id'];
    

    $query = "SELECT * FROM student where id = ".$_GET['id'];
    $result = mysqli_query($link, $query);


    if(mysqli_num_rows($result) > 0)
    {
    
        $row = mysqli_fetch_object($result);
        //var_dump($row);

        
        ?>


        <form name="" method="POST">

        <input type="text" name="username" placeholder = "Username" value="<?php echo $row->username;?>">
        <input type="text" name="cnic" placeholder = "cnic" value="<?php echo $row->cnic;?>">
        <!-- <input type="text" name="image" placeholder = "image"> -->

        <input type="submit" name="submit" value="EDIT">

        </form>
        <?php
        
    }




}

?>