<?php ob_start();

@include '../db/conn.php';

session_start();
/** $id = $_SESSION['user_id'];
 *$email = $_SESSION['admin_email'];
 *if (!isset($id)) {
 *    header('location:../login.php');
 *} else {

 *    $select = " SELECT * FROM user WHERE user_id = '$id'";

 *    $result = mysqli_query($conn, $select);
 *    if (mysqli_num_rows($result) < 2) {

 *        $row2 = mysqli_fetch_array($result);
 *        $_SESSION['email'] = $row['login_email'];
 *        $_SESSION['user_id'] = $row['login_user_id'];
 *        header('location:../create_profile.php');
 *    }
 *}*/

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <link rel="stylesheet" href="../css/admin.css">
  <link rel="stylesheet" href="../css/nav.css">

  <title>Admin Dashboard</title>

</head>

<body class="bg-gray postion-relative">
  <!-- ================= Appbar ================= -->
  <?php
	include '../includes/appbar.php';
	?>
  <!-- =============== New Chat Mobile =============== -->
  <?php
	include '../includes/newchatmobile.php';
	?>
  <!-- ================= Chat Modal Mobile ================= -->
  <?php
	include '../includes/mobilechat.php'
	?>

  <!-- ================= Main ================= -->
  <div class="container-fluid">
    <div class="row justify-content-evenly">
      <!-- ================= Timeline ================= -->
      <?php
			include '../includes/feeds.php';
			?>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
  </script>
  <script src="./main.js"></script>
</body>

</html>