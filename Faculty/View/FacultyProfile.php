<?php
    include '..\Control\profile_process.php';
?>

<html>
    <head>   
        <title>  
             Profile Page  
        </title>  
    </head>  
    <body> 
        <?php
            include '..\..\Layout\header.php';
        ?> 
        <br>
        hellow user
        <?php
            echo $_SESSION["email"];
        ?>
        <br>
        <br>
        <hr>

        <br>First Name:<?php echo $fname;?>
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
    <body>
</html>