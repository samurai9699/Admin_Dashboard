<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn=mysqli_connect($server,$username,$password,$database);

$sql = mysqli_query($conn,"SELECT * FROM enrollment");

 
//  echo $fetchrecords['firstname'].''.$fetchrecords['gender'].''.
//  echo $fetchrecords['email']
while($fetchrecords= mysqli_fetch_array($sql)){
    #code...
    echo $fetchrecords['fullname'].$fetchrecords['gender'].$fetchrecords['email']. '<br>';
}
?>