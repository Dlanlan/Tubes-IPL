<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ini title</title>
</head>

<body>
<?php 
    session_start();
    if (!isset($_SESSION['username'])) {
        header("location: ../index.php");
    }else {
        $username = $_SESSION['username'];  
    }

 ?>
</body>

</html>