<?php
require_once('logics/dbconnection.php');
$sqldelete = mysqli_query($conn,"DELETE FROM subscribers WHERE no=' ".$_GET["id"]."' ");
if($sqldelete)
{
    echo "User deletion success";
    header('location:subscribers.php');
}
else
{
    echo "ERROR.Try Again Later";
}
?>