<?php
    include ("../model/mydb.php");

    $selected="";
    $email = $_REQUEST["email"];
    echo $email;

    $mydb = new MyDB();
    $conobj = $mydb->openCon();
    $result = $mydb->getUserinfo("admin",$email,$conobj);

    if($result->num_rows>0)
    {
        while($row = $result->fetch_assoc())
        {
            $fname=$row["Firstname"];
            $mname=$row["Middlename"]; 
            $lname=$row["Lastname"];
            $gender=$row["Gender"];
            $phone=$row["Phone"]; 
            $address=$row["Address"]; 
            $password=$row["pass"];
            $_FILES= $row["File"];

        }

    }
    if(isset($_REQUEST["update"]))
    {
   
        if($_FILES["image"]["name"]!="")
        {
            echo $_FILES["image"]["name"];
            $file="../uploads/".$email.".jpg";
            move_uploaded_file($_FILES["image"]["tmp_name"],$file);
        }
        $mydb = new Mydb();
        $conobj = $mydb->openCon();
        $result=$mydb->updateUser("admin", $conobj, $_REQUEST["Firstname"],
        $_REQUEST["Middlename"], 
        $_REQUEST["Lastname"],
        $_REQUEST["Phone"],
        $_REQUEST["Address"],  
        $_REQUEST["pass"],
        $_REQUEST["Gender"],
        $file, $email);
    }
?>