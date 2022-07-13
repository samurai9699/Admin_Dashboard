<?php
require_once('logics/dbconnection.php');
$sqldelete = mysqli_query($conn,"DELETE FROM enrollment WHERE no=' ".$_GET["id"]."' ");
if($sqldelete)
{
    echo "User deletion success";
    header('location:student.php');
}
else
{
    echo "ERROR.Try Again Later";
}
?>