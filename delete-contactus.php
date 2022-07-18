<?php
require_once('logics/dbconnection.php');
$sqldelete = mysqli_query($conn,"DELETE FROM contactus WHERE no=' ".$_GET["id"]."' ");
if($sqldelete)
{
    echo "User deletion success";
    header('location:contactus.php');
}
else
{
    echo "ERROR.Try Again Later";
}
?>