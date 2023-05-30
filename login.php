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

    $username = $_POST['user'];
    $password = $_POST['pass'];

    $query = mysqli_query($mysqli, "SELECT * FROM accounts where username='$username' and password='$password'");

    $cek = mysqli_num_rows($query);

    if ($cek > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:show_table.php");
    } else {
        header("location:index.php");
    }
    ?>
</body>

</html>