<?php
//delete user
require_once('dbconnection.php');

//sql
$sql= mysqli_query($conn,"DELETE FROM enrollments WHERE id='".$_GET['id']."' ");

if($sql)
{
    echo "user deleted successfully";
    header('location:students.php');
}
else
{
    echo "Error occured.Please try again";
}

?>