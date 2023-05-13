<?php
include ("../model/mydb.php");

$email=$_REQUEST["Email"];



$mydb= new MyDB();
$conobj=$mydb->openCon();
$result=$mydb->searchUser("Admin", $conobj, $email);
if($result->num_rows > 0)
{
    while($row=$result->fetch_assoc()){
        $fname=$row["firstname"];
        $lname=$row["lastname"];
        $email=$row["email"];
        $gender=$row["gender"];
        $file=$row["file"];
        echo "name: ".$fname.$lname.$email.$gender.$file;
    }
}
else
{
    echo "no data found";
}


?>