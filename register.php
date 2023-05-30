<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registering Your Account</title>
</head>

<body>
    <?php
    session_start();
    include "conn.php";

    $username = $_POST['reg_un'];
    $email = $_POST['reg_email'];
    $password = $_POST['reg_pass'];

    $query = mysqli_query($mysqli, "INSERT INTO `customer`(`username`, `email`, `password`) VALUES ( '$username', '$email', '$password')");

    header("location:index.php");
    ?>
</body>

</html>