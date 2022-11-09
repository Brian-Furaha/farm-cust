<?php

ob_start();

@include 'db/conn.php';
@include 'functions.php';

session_start();



if (isset($_POST['signup'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $role = $_POST['user_role'];
    $id = random_num(20);

    $result = mysqli_query($conn, " SELECT login_email, login_rank FROM login WHERE login_email = '$email' && login_rank = '$role'");

    if (mysqli_num_rows($result) > 0) {

        $error[] = 'Signup: user already exists!';
    } else {

        if ($pass != $cpass) {
            $error[] = 'Signup: password does not match!';
        } else {
            $insert = "INSERT INTO login(login_email, login_password, login_rank, login_user_id) VALUES('$email', '$pass', '$role', $id)";
            $new = "INSERT INTO user(user_id) VALUES('$id')";

            mysqli_query($conn, $insert);
            mysqli_query($conn, $new);


            header('location:login.php');
        }
    }
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm&Cust | login</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <nav class="nav">
        <div class="logo">FARM&CUST </div>
    </nav>

    <main>
        <div class="container">
            <div class="card">
                <div class="inner-box" id="card">
                    <div class="card-back">
                        <form action="" method="post">
                            <h1 class="title">Signup</h1>
                            <input type="email" name="email" class="input" placeholder="a">
                            <label for="" class="label">Email</label>
                            <fieldset>
                                <legend>Choose user type </legend>
                                <label for="user_role"></label>
                                <select name="user_role">
                                    <option value="farmer">Farmer</option>
                                    <option value="customer">Customer</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </fieldset>
                            <input type="password" name="password" class="input" placeholder="a">
                            <label for="password" class="label">Password</label>
                            <input type="password" name="cpassword" class="input" placeholder="a">
                            <label for="cpassword" class="label">Confirm Password</label>
                            <input type="submit" name="signup" class="submitBtn" value="Signup">
                            <a href="login.php"><button type="button" class="btn" placeholde="a">I have an
                                    account</button></a>
                        </form>
                    </div>
                </div>
                <?php
                if (isset($error)) {
                    foreach ($error as $error) {
                        echo '<span class="error-msg">' . $error . '</span>';
                    };
                };
                ?>
            </div>
        </div>
    </main>
    <footer></footer>
</body>

</html>