<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "ob";
    $conn = new mysqli($servername,$username,$password,$database);
    if ($conn->connect_error){
        die("connection failed");
    }
    echo "connection success";
    $conn->close();
    ?>
</body>
</html>