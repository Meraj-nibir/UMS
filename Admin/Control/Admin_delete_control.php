<?php
include ("../model/mydb.php");


$email=$_REQUEST["Email"];


$mydb = new Mydb();
$conobj = $mydb->openCon();
$result=$mydb->deleteUser("admin", $conobj, $email);

if($result==TRUE)
{
    header("Location: ../view/showalluser.php");
}
else
{
    echo "can't delete";
}




?>
