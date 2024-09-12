<?php
include "db_conn.php";
$id=$_GET['id'];
$sql="DELETE FROM `fistcrud` WHERE id=$id";
$result=mysqli_query($conn,$sql);
    if($result)
    {
     header("location:used registration.php?msg=Record Deleted successfully");}
     else{
        echo "Failed:" . mysqli_error($conn);
     
    }
    ?>