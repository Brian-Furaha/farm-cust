<?php


ob_start();

@include 'db/conn.php';

session_start();

$id = $_SESSION['user_id'];

if (!isset($id)) {
    header('location:../index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin | Profile</title>
</head>

<body>
    <div class="container">

        <div class="profile">
            <?php
            $select = "SELECT * FROM user WHERE user_email = '$email'";
            $result = mysqli_query($conn, $select);
            if (mysqli_num_rows($result) > 0) {
                $fetch = mysqli_fetch_assoc($result);
            }
            if ($fetch['image'] == '') {
                echo '<img src="../images/default.png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">';
            } else {
                echo '<img src="uploaded_img/' . $fetch['image'] . '"';
            }

            ?>
            <h3><?php echo $fetch['user_name']; ?></h3>
            <a href="update_profile.php">update profile</a>


        </div>
    </div>
</body>

</html>