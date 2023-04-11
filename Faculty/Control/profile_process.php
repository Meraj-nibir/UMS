<?php
    session_start();
    include("../model/mydb.php");

    $fname=$mname=$lname=$gender=$email=$address=$_FILES="";
    if(empty($_SESSION["email"])){
        header("Location:../view/login.php");
    }

    $mydb=new MyDB();
    $conobj=$mydb->openCon();
    $result=$mydb->getUserInfo("admin",$_SESSION["email"],$conobj);
    
    if($result->num_rows>0){
        
        while($row=$result->fetch_assoc()){
            $fname=$row["firstname"];
            $mname=$row["middlename"];
            $lname=$row["lastname"];
            $email=$row["email"];
            $gender=$row["gender"];
            $address=$row["address"];
            $_FILES=$row["file"];
        }
    }
    
?>