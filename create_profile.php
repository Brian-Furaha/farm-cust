<?php

ob_start();

@include 'db/conn.php';

session_start();

$id = $_SESSION['user_id'];
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
$loca = mysqli_real_escape_string($conn, $_POST['location']);
$image = $_FILES['image']['name'];     
$image_size = $_FILES['image']['size'];
$image_tmp_name = $_FILES['image']['tmp_name'];    
$image_folder ='uploaded_img/'.$image;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create profile</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="profile">
        <?php
                $select = "SELECT * FROM 'login' WHERE login_user_id = '$id'";
                $result = mysqli_query($conn, $select);
                if (mysqli_num_row($result) > 0) {
                    $fetch = mysqli_fetch_assoc($result);
                    $insert = "INSERT INTO user(user_email, user_name, user_location, user_mobile, user_image) VALUES('$email', '$pass', '$role', $id)";
                }
                
            
            ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="flex">
                <div class="inputbox">
                    <span>Enter your full name :</span>
                    <input type="text" name="name" class="box">
                    <span>Enter your location :</span>
                    <input type="text" name="location" class="box">
                    <span>Enter Email :</span>
                    <input type="email" name="email" value="<?php echo $fetch['login_user_email']?>" class="box">
                    <span>Enter Your contact number :</span>
                    <input type="text" name="mobile" class="box">
                    <span>Upload your profile picture :</span>
                    <input type="file" name="image" accept="image/jpg, image/jpeg, image/png," class="box">
                </div>
            </div>
            <input type="submit" value="update profile" name="update_profile">    
        </form>
        
    </div>
</body>
</html>