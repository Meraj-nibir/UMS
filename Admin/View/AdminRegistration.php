<?php 
include '../control/process.php';
?>

<html>  
    <head>   
        <title>  
            Registration Page  
        </title>  
    </head>  
    <body bgcolor="white">

        <?php
            include '..\..\Layout\header.php';
        ?>
        <h1 style="margin-left:auto; margin-right:auto; text-align:center;">Admin Registration Page</h1>   
        <form style="margin-left:auto; margin-right:auto; text-align:left;" action="" method="POST" enctype="multipart/form-data">  
        <br> <br>
            <table>
                <tr>
                    <td>
                        First name: 
                    </td>
                    <td>
                        <input type="text" name="firstname" size="15"/> <?php echo $fnameerror ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Middle name: 
                    </td>
                    <td>
                        <input type="text" name="middlename" size="15"/><?php echo $mnameerror ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Last name: 
                    </td>
                    <td>
                        <input type="text" name="lastname" size="15"/><?php echo $lnameerror ?>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>
                        Gender :
                    </td>
                    <td>
                        <input type="checkbox" name="gender" value="male"/> Male
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input type="checkbox" name="gender" value="female"/> Female
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input type="checkbox" name="gender" value="other"/> Other  
                    </td>
                </tr>
                <tr>
                    <td>
                    <?php echo $gendererror; ?>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Phone :
                    </td>
                    <td>
                        <input type="text" name="country code"  value="+880" size="2"/>   
                        <input type="text" name="phone" size="10"/> <?php echo $phoneerror ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Profile Picture:
                    </td>
                    <td>
                        <input type="file" name="image"> <?php echo $writteneror; echo " ".$_FILESerror; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <input type="text" id="email" name="email"/> <?php echo $emailerror ?>
                        
                    </td>
                </tr>

                <tr>
                    <td>
                        Address:
                    </td>
                    <td>
                        <input type="text" name="address"/> <?php echo $addresserror ?>
                        
                    </td>
                </tr>

                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="Password" id="pass" name="pass"><?php echo $passerror ?>
                    </td>
                </tr>
                
                <tr>
                    <td>
                         Re-type password:
                    </td>
                    <td>
                        <input type="Password" id="repass" name="repass"><?php echo $repasserror ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="Submit" value="Submit"/> 
                    </td>
                    <td>
                        <input type="reset" name="Reset" value="Reset"/> 
                    </td>
                    <td>
                        <a href="../../RegistrationPage.php">Back</a>
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