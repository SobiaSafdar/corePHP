<html>
<head>
    <?php include "includes/header.php"; ?>
</head>


<body>

<?php
include "includes/connect.php";


if(isset($_GET['deleteid']))
{
 echo "method called with ID". $_GET['deleteid'];

$deletequery ="DELETE FROM `student` WHERE id = ".$_GET['deleteid'];
$result = mysqli_query($link, $deletequery);

    if($result)
    {
        echo "Row Deleted";
        header('Location:home.php');
    }
    else
    echo "Unable to Delete";
}



$query = "SELECT * FROM student";
$result = mysqli_query($link, $query);

?>
<table border=1>
    <thead>
        <tr>
            <td>id</td>
            <td>username</td>
            <td>cnic</td>
            <td>image</td>
            <td>datetime</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
    </thead>
<tbody>
<?php
if(mysqli_num_rows($result) >0)
{
   
    while($row= mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['username']."</td>";
        echo "<td>".$row['cnic']."</td>";
        echo "<td>".$row['image']."</td>";
        echo "<td>".$row['datetime']."</td>";
        echo "<td>Edit</td>";
        echo "<td><a href='?deleteid=".$row['id']."'>Delete</a></td>";
        echo "</tr>";

    }


    
}
?>
</tbody>
</table>

<?php
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
        header('Location:home.php');
    }
    else {
        echo "Not inserted";    
    }

}
?>

<form name="" method="POST">

<input type="text" name="username" placeholder = "Username" >
<input type="text" name="cnic" placeholder = "cnic">
<!-- <input type="text" name="image" placeholder = "image"> -->

<input type="submit" name="submit" value="Submit">

</form>



</body>


<?php include "includes/footer.php"; ?>
</html>





<?php
