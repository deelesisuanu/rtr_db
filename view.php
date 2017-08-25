<?php
    include_once("db_con.php")
?>

<!DOCTYPE HTML lang="en">

<html>
    <head>
        <title>Basic Retrieval Code</title>
        <!--<link rel="stylesheet" type="text/css" href="css/styles.css">-->
        <style>
            body{
                background-color:#eee;; color:black;
            }
            table{
                border: 1px solid beige;
            }
        </style>
    </head>

    <body>
        <center>
            <table>
                <thead>
                    <tr>
                        <th>S/NO</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Sex</th>
                        <th>Position</th>                                                            
                    </tr>
                </thead>

                <?php
                    $querydbt = "SELECT * FROM users";
                    $return = mysqli_query($conn, $querydbt);
                    while($values = mysqli_fetch_array($return)){
                        print "
                            <tbody>
                                <tr style='font-weight:lighter;'>
                                    <td> ".$values["id"]." </td>
                                    <td> ".$values["fname"]." </td>
                                    <td> ".$values["lname"]." </td>
                                    <td> ".$values["Sex"]." </td>
                                    <td> ".$values["Position"]." </td>
                                </tr>
                            </tbody>
                        ";
                    }
                ?>
            </table>

            <div style="margin-top: 40px;">
                <button type="button" style="font-weight:lighter; background-color: crimson;color: beige;border: none;border-radius: 4px;cursor: pointer;padding: 10px;"
                onclick="href: location='index.php'"> Return </button>
            </div>
        </center>
    </body>
</html>