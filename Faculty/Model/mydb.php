<?php
class MyDB{

    function openCon(){
        $conn = new mysqli("localhost","root","","Project");
        return $conn;
    }
    function insertData($tablename,$firstname,$lastname,$gender,$phone,$email,$address,$eduq,$pdep,$tex,$psub,$pass,$conn){
        $sql="INSERT INTO $tablename (Firstname,Lastname,Gender,Phone,Email,Address,Education_quali,
        Preferable_dept,Teaching_exp,Preferable_sub,Password) 
        VALUES ('$firstname','$lastname','$gender','$phone','$email','$address','$eduq','$pdep','$tex','$psub',
        '$pass')";
        $result=$conn->query($sql);
        return $result;
    }
    function checkUser($tablename, $email, $pass, $conn){
        $sql="SELECT * FROM $tablename WHERE email='$email' AND 
        Password='$pass'";
        $result=$conn->query($sql);
    return $result;
    }

    function getUserInfo($tablename,$email,$conn){
        $sql="SELECT * FROM $tablename WHERE email='$email'";
        $result=$conn->query($sql);
        return $result; 
    }

    function getAllUsers($tablename,$conn){
        $sql=$sql="SELECT * FROM $tablename";
        $result=$conn->query($sql);
        return $result;
    }

    function updateUser($tablename, $firstname,$middlename,$lastname,$gender,$phone,$address,$email,
    $pass,$file,$conn){
        $sql="UPDATE $tablename SET $firstname='$fname',$middlename='$mname',$lastname='$lname',$gender='$gender',$phone='$phone',$address='$address',
        $pass='$pass',$files='$file' WHERE $email='$email'";
        $result=$conn->query($sql);
        return $result;
    }

}


?>