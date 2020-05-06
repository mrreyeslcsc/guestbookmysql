<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
    <td><strong>View Guestbook | <a href="guestbook.php">Sign Guestbook</a> </strong></td>
    </tr>
    </table>
<br>

<?php

    $host="localhost"; // Host Name
    $username="msteinmetz"; // MYSQL User
    $password="Fr0gTr!p#2298"; // MYSQL Password
    $db_name="msteinmetz_guestbook"; // Database Name
    $tbl_name="guestbook"; // Table Name

// Connect to the server and the select database.
    $conn = mysqli_connect("$host", "$username", "$password")or die("cannot connect server ");
    mysqli_select_db($conn, $db_name);

    $sql="SELECT * FROM $tbl_name";
    $result=mysqli_query($conn, $sql) or die(mysqli_error($conn));

    while($rows=mysqli_fetch_array($result)){
?>

    <table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
        <tr>
            <td><table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                <tr>
                <td>ID</td>
                <td>:</td>
                <td><? echo $rows['id']; ?></td>
                </tr>

                <tr>
                <td width="117">Name</td>
                <td width="14">:</td>
                <td width="357"><? echo $rows['name']; ?></td>
                </tr>

                <tr>
                <td>Email</td>
                <td>:</td>
                <td><? echo $rows['email']; ?></td>
                </tr>

                <tr>
                <td valign="top">Comment</td>
                <td valign="top">:</td>
                <td><? echo $rows['comment']; ?></td>
                </tr>
                
                <tr>
                <td valign="top">Date/Time </td>
                <td valign="top">:</td>
                <td><? echo $rows['datetime']; ?></td>
                </tr>
            </table></td>
        </tr>
    </table>

<?php
}
mysqli_close($conn); //close database
?>

</body>
</html>