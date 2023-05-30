<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logging In</title>
</head>

<body>
    <?php
    session_start();
    include "conn.php";

    $username = $_POST['lin_un'];
    $password = $_POST['lin_pass'];

    $query = mysqli_query($mysqli, "SELECT * FROM kasir where username='$username' and password='$password'");

    $cek = mysqli_num_rows($query);

    if ($cek > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:index-kasir.php");
    } else {
        header("location:authentication-login.php");
    }
    ?>
</body>

</html>