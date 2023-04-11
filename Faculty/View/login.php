<?php
include ('../control/Login_control.php');

?>

<html>
    <head>   
        <title>  
            Login Page  
        </title>  
    </head>  
    <body bgcolor="white"> 
        
        <?php
            include '..\..\Layout\header.php';
        ?>
        <h1 >Login Page</h1> 

        <form action="" method="POST">
            
            <table>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <input type="text" name="email"> <?php echo $emailerror ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="password" name="pass"> <?php echo $passerror ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="login" value="Log In">
                    </td>
                    <td>
                        <a href="..\..\home.php">Back</a>
                    </td>
                </tr>
            </table>
        </form>
        <br>
        <br>
        <br>
        <br>
        <?php
            include '..\..\Layout\footer.php';
        ?>
    </body>
</html>