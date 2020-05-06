<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $host="localhost"; // Host Name
    $username="msteinmetz"; // MYSQL User
    $password="Fr0gTr!p#2298"; // MYSQL Password
    $db_name="msteinmetz_guestbook"; // Database Name
    $tbl_name="guestbook"; // Table Name

// Connect to the server and select the database.
    $conn = mysqli_connect("$host", "$username", "$password")or die("cannot connect server ");
    mysqli_select_db($conn, $db_name);

    $datetime=date("y-m-d h:i:s"); // Date and Time

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $comment = htmlspecialchars($_POST["comment"]);

    $sql="INSERT INTO $tbl_name(name, email, comment, datetime)VALUES('$name', '$email', '$comment', '$datetime')";
    $result=mysqli_query($conn, $sql);

//Check Query Success
    if($result){
    echo "Successful";
    echo "<BR>";

// Link View Guestbook Page
    echo "<a href='viewguestbook.php'>View guestbook</a>";
    }

    else {
    echo "ERROR";
    }

mysqli_close($conn);
?>

</body>
</html>
