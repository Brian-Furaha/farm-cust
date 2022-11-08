<?php

ob_start();

@include '../db/conn.php';

session_start();

$id = $_SESSION['user_id'];
//$email = $_SESSION['admin_email'];
if (!isset($id)) {
    header('location:../index.php');
} else {

    $select = " SELECT * FROM user WHERE user_id = '$id'";

    $result = mysqli_query($conn, $select);
    if (mysqli_num_rows($result) < 2) {

        $row2 = mysqli_fetch_array($result);
        $_SESSION['email'] = $row['login_email'];
        $_SESSION['user_id'] = $row['login_user_id'];
        header('location:../create_profile.php');
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <div class="container">
        <div class="content">
            <h3>hi, <span>admin</span></h3>
            <h1>welcome <span></span></h1>
            <p>this is an admin page</p>
            <a href="../index.php" class="btn">login or register</a>
            <a href="../logout.php" class="btn">Logout</a>
        </div>
    </div>
</body>

</html>