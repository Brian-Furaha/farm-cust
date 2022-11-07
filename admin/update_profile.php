<?php

ob_start();

@include 'db/conn.php';

session_start();

$id = $_SESSION['user_id'];

if (isset($_POST['update_profile'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $name = mysqli_real_escape_string($conn, $_POST['update_name']);
    $loca = mysqli_real_escape_string($conn, $_POST['update_location']);
    $mobile = mysqli_real_escape_string($conn, $_POST['update_mobile']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['update_pass']));
    $npass = mysqli_real_escape_string($conn, md5($_POST['new_pass']));
    $cpass = mysqli_real_escape_string($conn, md5($_POST['confirm_pass']));
    $opass = $_POST['old_pass'];
    $image = $_FILES['image']['name'];     
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];    
    $image_folder ='uploaded_img/'.$image;

    $select = " SELECT * FROM login WHERE login_email = '$email' && login_password = '$pass'";
    $select2 = " SELECT * FROM login WHERE login_email = '$email' && login_password = '$pass'";

    $result = mysqli_query($conn, $select);
    $result2 = mysqli_query($conn, $select2);

    if (mysqli_num_rows($result['login_email']) > 0) {
        /**$row = mysqli_fetch_array($result); */
        $error[] = 'email already exists!';

    } elseif (mysqli_num_rows($result2['user_name']) > 0) {
        /**$row = mysqli_fetch_array($result); */
        $error[] = 'name already exists!';

    } else {

        mysqli_query($conn, "UPDATE user SET user_name= '$name', user_email= '$email', user_mobile= '$mobile',user_location= '$loca' WHERE user_id= '$id'");
        mysqli_query($conn, "UPDATE login SET login_email= '$email' WHERE login_user_id= '$id'");
        $error[] = 'update successful!';
    }

    if (!empty($pass) || !empty($npass) || !empty($cpass)) {

        if ($opass != $pass) {
            $error[] = 'old password does not match!';
        } elseif ($npass != $cpass) {
            $error[] = 'new password does not match!';
        } else {
            mysqli_query($conn, "UPDATE login SET login_password= '$npass' WHERE login_user_id= '$id'");
            $error[] = 'password update successful!';
        }
    }

    if(!empty($image)) {
        if($image_size > 2000000){
            $error[] = 'image is to large!';
        } else {
            $image_query = mysqli_query($conn, "UPDATE user SET image = '$image' WHERE user_id = '$id'");
            if ($image_query) {
                move_uploaded_file($image_tmp_name, $image_folder);
            }
            $error[] = 'image update successful!';
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
    <title>update profile</title>
</head>
<body>
    
    <div class="update-profile">
        <?php
                $select = "SELECT * FROM user WHERE user_id = '$id'";
                $select2 = "SELECT * FROM 'login' WHERE login_user_id = '$id'";
                $result = mysqli_query($conn, $select);
                $result2 = mysqli_query($conn, $select2);
                if (mysqli_num_row($result) > 0) {
                    $fetch = mysqli_fetch_assoc($result);
                    $fetch2 = mysqli_fetch_assoc($result2);
                }
                
            
            ?>

            <form action="" method="post" enctype="multipart/form-data">
                <?php
                    if ($fetch['image'] == '') {
                    echo '<img src="../images/default.png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">' 
                } else {
                    echo '<img src="uploaded_img/'.$fetch['image'].'"'
                }
                if (isset($error)) {
                    foreach ($error as $error) {
                        echo '<span class="error-msg">' . $error . '</span>';
                    };
                };
                
                ?>
                <div class="flex">
                    <div class="inputBox">
                        <span>name :</span>
                        <input type="text" name="update_name" value="<?php echo $fetch['user_name']?>" class="box">
                        <span>your email :</span>
                        <input type="email" name="update_email" value="<?php echo $fetch['user_email']?>" class="box">
                        <span>your contact :</span>
                        <input type="text" name="update_mobile" value="<?php echo $fetch['user_mobile']?>" class="box">
                        <span>location :</span>
                        <input type="text" name="update_location" value="<?php echo $fetch['user_location']?>" class="box">
                        <span>update your pic :</span>
                        <input type="file" name="image" accept="image/jpg, image/jpeg, image/png," class="box">
                    </div>
                    <div class="inputBox">
                        <input type="hidden" name="old_pass" value="<?php $fetch2['login_password'] ?>" >
                        <span>old password</span>
                        <input type="password" name="update_pass" placeholder="enter current password">
                        <span>new password</span>
                        <input type="password" name="new_pass" placeholder="enter new password">
                        <span>confirm new password</span>
                        <input type="password" name="confirm_pass" placeholder="confirm password" >
                    </div>
                </div>
                <input type="submit" value="update profile" name="update_profile">
            </form>
    </div>
</body>
</html>