<?php
    include '..\Control\profile_process.php';
?>

<html>
    <head>   
        <title>  
             Profile Page  
        </title>  
    </head>  
    <body bgcolor="white"> 
        <?php
            include '..\..\Layout\header.php';
        ?> 
        <br>
        <form style="margin-left:auto; margin-right:auto; text-align:left;" action="" method="POST" enctype="multipart/form-data">
        hellow user
            <?php
                echo $_SESSION["email"];
            ?>
            <br>
            <br>
            <hr>
            <a href="ShowAllUser.php">Show all users</a>

            <br>First Name:<?php echo $fname;?>
            <br>Middle Name:<?php echo $mname;?>
            <br>Last Name:<?php echo $lname;?>
            <br>Email:<?php echo $email;?>
            <br>Gender:<?php echo $gender;?>
            <br>Profile Picture:
            <br><img src="<?php echo $_FILES;?>" width="100px" height="100px">
            <br>
            <br>
            <tr>
                <td><a href="..\Control\logout.php">Log out</a></td>
            </tr>
            <?php
                include '..\..\Layout\footer.php';
            ?>
        </form>
    <body>
</html>