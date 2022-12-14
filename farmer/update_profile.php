<?php

// ob_start();

// @include 'db/conn.php';

// session_start();

// $id = $_SESSION['userid'];

// if (isset($_POST['update_profile'])) {

// 	$email = mysqli_real_escape_string($conn, $_POST['email']);
// 	$name = mysqli_real_escape_string($conn, $_POST['update_name']);
// 	$loca = mysqli_real_escape_string($conn, $_POST['update_location']);
// 	$mobile = mysqli_real_escape_string($conn, $_POST['update_mobile']);
// 	$pass = mysqli_real_escape_string($conn, md5($_POST['update_pass']));
// 	$npass = mysqli_real_escape_string($conn, md5($_POST['new_pass']));
// 	$cpass = mysqli_real_escape_string($conn, md5($_POST['confirm_pass']));
// 	$opass = $_POST['old_pass'];
// 	$image = $_FILES['image']['name'];
// 	$image_size = $_FILES['image']['size'];
// 	$image_tmp_name = $_FILES['image']['tmp_name'];
// 	$image_folder = 'uploaded_img/' . $image;

// 	$select = " SELECT * FROM login WHERE login_email = '$email' && login_password = '$pass'";
// 	$select2 = " SELECT * FROM login WHERE login_email = '$email' && login_password = '$pass'";

// 	$result = mysqli_query($conn, $select);
// 	$result2 = mysqli_query($conn, $select2);

// 	if (mysqli_num_rows($result['login_email']) > 0) {
// 		/**$row = mysqli_fetch_array($result); */
// 		$error[] = 'email already exists!';
// 	} elseif (mysqli_num_rows($result2['user_name']) > 0) {
// 		/**$row = mysqli_fetch_array($result); */
// 		$error[] = 'name already exists!';
// 	} else {

// 		mysqli_query($conn, "UPDATE user SET user_name= '$name', user_email= '$email', user_mobile= '$mobile',user_location= '$loca' WHERE user_id= '$id'");
// 		mysqli_query($conn, "UPDATE login SET login_email= '$email' WHERE login_user_id= '$id'");
// 		$error[] = 'update successful!';
// 	}

// 	if (!empty($pass) || !empty($npass) || !empty($cpass)) {

// 		if ($opass != $pass) {
// 			$error[] = 'old password does not match!';
// 		} elseif ($npass != $cpass) {
// 			$error[] = 'new password does not match!';
// 		} else {
// 			mysqli_query($conn, "UPDATE login SET login_password= '$npass' WHERE login_user_id= '$id'");
// 			$error[] = 'password update successful!';
// 		}
// 	}

// 	if (!empty($image)) {
// 		if ($image_size > 2000000) {
// 			$error[] = 'image is to large!';
// 		} else {
// 			$image_query = mysqli_query($conn, "UPDATE user SET image = '$image' WHERE user_id = '$id'");
// 			if ($image_query) {
// 				move_uploaded_file($image_tmp_name, $image_folder);
// 			}
// 			$error[] = 'image update successful!';
// 		}
// 	}
// };
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>update profile</title>
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  <!-- main style -->
  <link rel="stylesheet" href="./main.css" />
  <link rel="stylesheet" href="update.css">
  <link rel="stylesheet" href="../css/nav.css">
</head>

<body>
  <div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
      <a class="nav-link active ms-0" href="farmer_profile.php">back</a>
    </nav>
    <hr class="mt-0 mb-4">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-xl-4">
          <!-- Profile picture card-->
          <div class="card mb-4 mb-xl-0">
            <div class="card-header">Profile Picture</div>
            <div class="card-body text-center">
              <!-- Profile picture image-->
              <?php
							// if ($fetch['image'] == '') {
							// 	echo '<img src="../images/default.png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">';
							// } else {
							// 	echo '<img src="uploaded_img/' . $fetch['image'] . '" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">';
							// }
							// if (isset($error)) {
							// 	foreach ($error as $error) {
							// 		echo '<span class="error-msg">' . $error . '</span>';
							// 	};
							// };
							echo '<img src="../images/default.png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">';
							?>
              <!-- Profile picture help block-->
              <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
              <!-- Profile picture upload button-->
              <input type="file" id="actual-btn" hidden />
              <label class="btn btn-primary" for="actual-btn" style="
								color: white;
								padding: 0.5rem;
								font-family: sans-serif;
								border-radius: 0.3rem;
								cursor: pointer;
								margin-top: 1rem;">Upload new image</label>
            </div>
          </div>
        </div>
        <div class="col-xl-8">
          <!-- Account details card-->
          <div class="card mb-4">
            <div class="card-header">Account Details</div>
            <div class="card-body">

              <!-- Form Row-->
              <div class="row gx-3 mb-3">
                <!-- Form Group (first name)-->
                <div class="col-md-6">
                  <label class="small mb-1" for="inputFirstName">First name</label>
                  <input class="form-control" id="inputFirstName" name="update_fname" type="text"
                    placeholder="Enter your first name" value="
									<?php
									// echo $fetch['user_fname'] 
									?>">
                </div>
                <!-- Form Group (last name)-->
                <div class="col-md-6">
                  <label class="small mb-1" for="inputLastName">Last name</label>
                  <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name"
                    name="update_lname" value="
									<?php
									// echo $fetch['user_sname'] 
									?>">
                </div>
              </div>
              <!-- Form Row        -->
              <div class="row gx-3 mb-3">
                <!-- Form Group (location)-->
                <div class="col-md-6">
                  <label class="small mb-1" for="inputLocation">Location</label>
                  <input class="form-control" id="inputLocation" name="inputLocation" type="text"
                    placeholder="Enter your location" value="
									<?php
									// echo $fetch['user_location'] 
									?>">
                </div>
                <!-- Form Group (phone number)-->
                <div class="col-md-6">
                  <label class="small mb-1" for="inputPhone">Phone number</label>
                  <input class="form-control" id="inputPhone" name="inputPhone" type="text"
                    placeholder="Enter your phone number" value="
									<?php
									// echo $fetch['user_mobile'] 
									?>">
                </div>
              </div>
              <!-- Form Group (email address)-->
              <div class="mb-3">
                <label class="small mb-1" for="inputEmailAddress">Email address</label>
                <input class="form-control" id="inputEmailAddress" name="inputEmailAddress" type="email"
                  placeholder="Enter your email address" value="
								<?php
								// echo $fetch['user_email'] 
								?>">
              </div>
              <!-- Form Row-->
              <div class="row gx-3 mb-3">
                <!-- Form Group (old password hidden)-->
                <div class="col-md-6" hidden>
                  <label class="small mb-1" for="oldpass">Location</label>
                  <input class="form-control" id="oldpass" name="oldpass" type="password" placeholder="old password"
                    value="
										<?php
										// $fetch2['login_password']
										?>">
                </div>
                <!-- Form Group (old password)-->
                <div class="col-md-6">
                  <label class="small mb-1" for="pass">Location</label>
                  <input class="form-control" id="pass" name="pass" type="password" placeholder="Enter old password">
                </div>
                <!-- Form Group (new password)-->
                <div class="col-md-6">
                  <label class="small mb-1" for="newpass">Location</label>
                  <input class="form-control" id="newpass" name="newpass" type="password"
                    placeholder="Enter new password">
                </div>
                <!-- Form Group (confirm new password)-->
                <div class="col-md-6">
                  <label class="small mb-1" for="cnewpass">Phone number</label>
                  <input class="form-control" id="cnewpass" name="cnewpass" type="password"
                    placeholder="confirm new password">
                </div>
              </div>
              <!-- Save changes button-->

              <button class="btn btn-primary" type="submit" name="update_profile">Save changes</button>
    </form>
  </div>
</body>

</html>