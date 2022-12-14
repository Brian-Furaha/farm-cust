<?php
session_start();
require 'db/conn.php';
require 'functions.php';

if (isset($_POST['login'])) {

  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = md5($_POST['password']);

  $result = mysqli_query($conn, " SELECT * FROM login WHERE login_email = '$email' && login_password = '$pass'");

  if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_array($result);

    if ($row['login_rank'] == 'admin') {
      $_SESSION['userid'] = $row['login_user_id'];
      header("Location:admin/admin.php");
    } elseif ($row['login_rank'] == 'customer') {
      $_SESSION['userid'] = $row['login_user_id'];
      header('Location:market/market_page.php');
    } elseif ($row['login_rank'] == 'farmer') {
      $_SESSION['userid'] = $row['login_user_id'];
      header('Location:farmer/farmer_page.php');
    }
  } else {
    $_SESSION['error'] = 'Login: Incorrect email or password!';
    header("Location: index.php");
    exit(0);
  }
}

if (isset($_POST['signup'])) {

  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $fname = mysqli_real_escape_string($conn, $_POST['firstname']);
  $sname = mysqli_real_escape_string($conn, $_POST['surname']);
  $pass = md5($_POST['password']);
  $cpass = md5($_POST['cpassword']);
  $role = $_POST['flexRadioDefault'];
  $id = random_num(19);
  $result = mysqli_query($conn, " SELECT login_email, login_rank FROM login WHERE login_email = '$email' && login_rank = '$role'");

  if (mysqli_num_rows($result) > 0) {
    // old user new account with different role
    $row = mysqli_fetch_array($result);
    if ($role == $row['login_rank']) {
      $_SESSION['error'] = 'Signup: user already exists!';
      header("Location: index.php");
      exit(0);
    } else {
      if ($pass != $cpass) {
        $_SESSION['error'] = 'Signup: password does not match!';
        header("Location: index.php");
        exit(0);
      } else {
        $insert = "INSERT INTO login(login_email, login_password, login_rank, login_user_id) VALUES('$email', '$pass', '$role', $id)";
        $new = "INSERT INTO user(user_id, user_fname, user_sname, user_email, user_rank) VALUES('$id', '$fname', '$sname', '$email', '$role')";
        mysqli_query($conn, $insert);
        mysqli_query($conn, $new);

        header('location:index.php');
      }
    }
  } else {

    if ($pass != $cpass) {
      $_SESSION['error'] = 'Signup: password does not match!';
      header("Location: index.php");
      exit(0);
    } else {
      $insert = "INSERT INTO login(login_email, login_password, login_rank, login_user_id) VALUES('$email', '$pass', '$role', $id)";
      $new = "INSERT INTO user(user_id, user_fname, user_sname, user_email) VALUES('$id', '$fname', '$sname', '$email')";
      mysqli_query($conn, $insert);
      mysqli_query($conn, $new);

      header('location:index.php');
    }
  }
};
if (isset($_POST['add_user'])) {

  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $fname = mysqli_real_escape_string($conn, $_POST['firstname']);
  $sname = mysqli_real_escape_string($conn, $_POST['surname']);
  $pass = md5($_POST['password']);
  $cpass = md5($_POST['cpassword']);
  $role = $_POST['flexRadioDefault'];
  $id = random_num(19);
  $result = mysqli_query($conn, " SELECT login_email, login_rank FROM login WHERE login_email = '$email' && login_rank = '$role'");

  if (mysqli_num_rows($result) > 0) {
    // old user new account with different role
    $row = mysqli_fetch_array($result);
    if ($role == $row['login_rank']) {
      $_SESSION['error'] = 'Add user: user already exists!';
      header("location: ./admin/usertables.php");
      exit(0);
    } else {
      if ($pass != $cpass) {
        $_SESSION['error'] = 'Add user: password does not match!';
        header("location: ./admin/usertables.php");
        exit(0);
      } else {
        $insert = "INSERT INTO login(login_email, login_password, login_rank, login_user_id) VALUES('$email', '$pass', '$role', $id)";
        $new = "INSERT INTO user(user_id, user_fname, user_sname, user_email) VALUES('$id', '$fname', '$sname', '$email')";
        mysqli_query($conn, $insert);
        $query_run = mysqli_query($conn, $new);

        if ($query_run) {
          $_SESSION['error'] = "User Created Successfully";
          header("Location: ./admin/usertables.php");;
        } else {
          $_SESSION['message'] = "User Not Created";
          header("Location: ./admin/usertables.php");;
        }
      }
    }
  } else {

    if ($pass != $cpass) {
      $_SESSION['error'] = 'Signup: password does not match!';
      header("Location: ./admin/usertables.php");
      exit(0);
    } else {
      $insert = "INSERT INTO login(login_email, login_password, login_rank, login_user_id) VALUES('$email', '$pass', '$role', $id)";
      $new = "INSERT INTO user(user_id, user_fname, user_sname, user_email) VALUES('$id', '$fname', '$sname', '$email')";
      mysqli_query($conn, $insert);
      mysqli_query($conn, $new);

      header('location: ./admin/usertables.php');
    }
  }
};



if (isset($_POST['delete_user'])) {
  $user_id = mysqli_real_escape_string($conn, $_POST['delete_user']);

  $query = "DELETE FROM user WHERE user_id='$user_id' ";
  $query2 = "DELETE FROM login WHERE user_id='$user_id' ";
  mysqli_query($conn, $query2);
  $query_run = mysqli_query($conn, $query);

  if ($query_run) {
    $_SESSION['error'] = "User Deleted Successfully";
    header("Location: ./admin/usertables.php");
    exit(0);
  } else {
    $_SESSION['message'] = "User Not Deleted";
    header("Location: ./admin/usertables.php");
    exit(0);
  }
}

if (isset($_POST['update_user'])) {
  $user_id = mysqli_real_escape_string($con, $_POST['user_id']);

  $name = mysqli_real_escape_string($con, $_POST['name']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $course = mysqli_real_escape_string($con, $_POST['course']);

  $query = "UPDATE user SET name='$name', email='$email', phone='$phone', course='$course' WHERE id='$student_id' ";
  $query_run = mysqli_query($con, $query);

  if ($query_run) {
    $_SESSION['message'] = "Student Updated Successfully";
    header("Location: ./admin/usertables.php");
    exit(0);
  } else {
    $_SESSION['message'] = "Student Not Updated";
    header("Location: ./admin/usertables.php");
    exit(0);
  }
}