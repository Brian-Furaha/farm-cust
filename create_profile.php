<?php



@include 'db/conn.php';

session_start();

$id = $_SESSION['user_id'];
$mail = $_SESSION['email'];
echo $mail;
print_r($_SESSION['email']);

/**if (isset($_SESSION['user_id']) && is_numeric($_SESSION['user_id'])) {
} */



if (isset($_POST['create_profile'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $loca = mysqli_real_escape_string($conn, $_POST['location']);
    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'uploaded_img/' . $image;

    $select2 = "SELECT * FROM 'user' WHERE user_id = '$id'";
    $result2 = mysqli_query($conn, $select2);
    if (mysqli_num_rows($result2) > 0) {
        $fetch = mysqli_fetch_assoc($result2);
        if (!empty($image)) {
            if ($image_size > 2000000) {
                $error[] = 'image is to large!';
            } else {
                $image_query = mysqli_query($conn, "INSERT INTO user(user_email, user_name, user_location, user_mobile, user_image) VALUES('$email', '$name', '$loca', $mobile, '$image')");
                if ($image_query) {
                    move_uploaded_file($image_tmp_name, $image_folder);
                }
            }
        }
    }
}
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
        /**$select = " SELECT * FROM login WHERE login_email = '$email' && *login_user_id = '$id'";

         *$result = mysqli_query($conn, $select); */
        $select = " SELECT * FROM login WHERE login_email = '$mail' && login_user_id = '$id'";

        $result = mysqli_query($conn, $select);


        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_array($result);
            print_r($row['login_email']);
            if ($row['login_rank'] == 'admin') {
                /** $_SESSION['admin_email'] = $row['email'];*/

                $_SESSION['user_id'] =  $row['login_user_id'];
                header('location:admin/admin_page.php');
            } elseif ($row['login_rank'] == 'customer') {
                /** $_SESSION['customer_email'] = $row['email'];*/

                $_SESSION['user_id'] =  $row['login_user_id'];
                header('location:customer/customer_page.php');
            } elseif ($row['login_rank'] == 'farmer') {
                /** $_SESSION['farmer_email'] = $row['email'];*/

                $_SESSION['user_id'] =  $row['login_user_id'];
                header('location:farmer/farmer_page.php');
            }
        };
        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="flex">
                <div class="inputbox">
                    <span>Enter your full name :</span>
                    <input type="text" name="name" class="box">
                    <span>Enter your location :</span>
                    <input type="text" name="location" class="box">
                    <span>Enter Email :</span>
                    <input type="email" name="email" value="<?php echo $row['login_email']; ?>" class="box">
                    <span>Enter Your contact number :</span>
                    <input type="text" name="mobile" class="box">
                    <span>Upload your profile picture :</span>
                    <input type="file" name="image" accept="image/jpg, image/jpeg, image/png," class="box">
                </div>
            </div>
            <input type="submit" value="create profile" name="create_profile">
        </form>

    </div>
</body>

</html>