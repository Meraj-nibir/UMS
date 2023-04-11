<?php
    include "..\Control\show_all_user_process.php"
?>

<html>
    <head>   
        <title>  
             All user page  
        </title>  
    </head>  
    <body bgcolor="white"> 
        <?php
            include '..\..\Layout\header.php';
        ?> 
        <br>
        <?php
            if($result->num_rows>0){
                echo "<table>";
                echo "<tr><th>First Name</th> <th>Middle Name</th> <th>Last Name</th> <th>Email</th> <th>Gender</th> <th>Address</th> <th>File</th></tr>";
                while($row=$result->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$row["Firstname"]."</td>";
                    echo "<td>".$row["Middlename"]."</td>";
                    echo "<td>".$row["Lastname"]."</td>";
                    echo "<td>".$row["Email"]."</td>";
                    echo "<td>".$row["Gender"]."</td>";
                    echo "<td>".$row["Address"]."</td>";
                    echo "<td>".$row["File"]."</td>" ;
                  //  echo "<td>"."<a href ='AdminUpdate.php?email='".$row["Email"]."'>Edit</a>"."</td>" ;
                  echo "<td>"."<a href ='AdminUpdate.php?email=".$row["Email"]."'>Edit</a>"."</td>" ;
                    echo "<td>"."<a href ='AdiminDelete.php?email=".$row["Email"]."'>Delete</a>"."</td>" ;
                    echo "</tr>";
                }
                echo "</tr>";
            }
            else{
                echo "No data found.";
            }
        ?>

        <br>
        <br>
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