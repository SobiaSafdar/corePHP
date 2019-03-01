<html>
<head>
    <?php include "../includes/header.php"; ?>
</head>


<body>

<?php
include "../includes/connect.php";



if(isset($_POST['submit']))
{
    //var_dump($_POST);
    $username = $_POST['username'];
     $cnic = $_POST['cnic'];
    //echo "submit method called";

    echo $insertquery= "
    INSERT INTO `student`(`username`, `cnic`)  VALUES ('".$username."','".$cnic."')
    ";
    
    $result = mysqli_query($link, $insertquery) or die("Error in the consult.." . mysqli_error($link));;

    var_dump($result);
    if($result)
    {
        echo "row inserted";
        header('Location:list.php');
    }
    else {
        echo "Not inserted";    
    }

}
?>

<form name="" method="POST" >

<input type="text" name="username" placeholder = "Username" >
<input type="text" name="cnic" placeholder = "cnic">
<!-- <input type="file" name="image" placeholder = "image">  -->

<input type="submit" name="submit" value="Submit">

</form>



</body>


<?php include "../includes/footer.php"; ?>
</html>





<?php
