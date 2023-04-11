<?php 
include '../control/Facultyprocess.php';
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
        <h1 style="margin-left:auto; margin-right:auto; text-align:center;">Faculty Registration Page</h1>   
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
                        Last name: 
                    </td>
                    <td>
                        <input type="text" name="lastname" size="15"/> <?php echo $lnameerror ?>
                    </td>
                </tr>

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
                        <input type="text" id="email" name="email"/> <?php echo $emailerror; ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Address:
                    </td>
                    <td>
                        <input type="text"  name="address"/> <?php echo $addresserror; ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Education Qualification:
                    </td>
                    <td>
                        <select name="eduq" id="eduq">
                            <option value="">----</option>
                            <option value="Doctorate">Doctorate</option>
                            <option value="Msc">MSc</option>
                            <option value="MBA">MBA</option>
                            <option value="MA">MA</option>
                        </select>
                    </td>
                    <td>
                        <?php echo $eduqerror; ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Preferable Department:
                    </td>
                    <td>
                        <select name="pdep" id="pdep">
                            <option value="">----</option>
                            <option value="CSE">CSE</option>
                            <option value="EEE">EEE</option>
                            <option value="IPE">IPE</option>
                            <option value="BBA">BBA</option>
                            <option value="LLB">LLB</option>
                        </select>
                    </td>
                    <td>
                        <?php echo $pdeperror; ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Teaching Experience:
                    </td>
                    <td>
                        <select name="tex" id="tex">
                            <option value="">----</option>
                            <option value="0 years">0 years</option>
                            <option value="1 years">1 years</option>
                            <option value="2 years">2 years</option>
                            <option value="3 years">3 years</option>
                            <option value="More than 3 years">More than 3 years</option>
                        </select>
                    </td>
                    <td>
                        <?php echo $texerror; ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Preferable Subject:
                    </td>
                    <td>
                        <select name="psub" id="psub">
                            <option value="">----</option>
                            <option value="Algorithm">Algorithm</option>
                            <option value="Micro processor">Micro processor</option>
                            <option value="Introduction to industrial engineering">Introduction to industrial engineering</option>
                            <option value="Management">Management</option>
                            <option value="Jurisprudence">Jurisprudence</option>
                        </select>
                    </td>
                    <td>
                        <?php echo $psuberror; ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="Password" id="pass" name="pass">
                    </td>
                </tr>
                
                <tr>
                    <td>
                         Re-type password:
                    </td>
                    <td>
                        <input type="Password" id="repass" name="repass">
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
                        <a href="..\..\RegistrationPage.php">Back</a>
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