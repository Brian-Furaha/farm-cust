<?php

ob_start();

@include 'db/conn.php';
@include 'functions.php';

session_start();

if (isset($_POST['login'])) {

  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = md5($_POST['password']);

  $result = mysqli_query($conn, " SELECT * FROM login WHERE login_email = '$email' && login_password = '$pass'");

  if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_array($result);


    if ($row['login_rank'] == 'admin') {
      /*$_SESSION['admin_email'] = $row['login_email']; */
      $_SESSION['user_id'] = $row['login_user_id'];
      header('location:admin/admin_page.php');
    } elseif ($row['login_rank'] == 'customer') {
      /*$_SESSION['customer_email'] = $row['login_email'];*/
      $_SESSION['userid'] = $row['login_user_id'];
      header('location:market/market_page.php');
    } elseif ($row['login_rank'] == 'farmer') {
      /*$_SESSION['farmer_email'] = $row['login_email'];*/
      $_SESSION['userid'] = $row['login_user_id'];
      header('location:farmer/farmer_page.php');
    }
  } else {
    $error[] = 'Login: Incorrect email or password!';
  }
}

if (isset($_POST['signup'])) {

  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = md5($_POST['password']);
  $cpass = md5($_POST['cpassword']);
  $role = $_POST['flexRadioDefault'];
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

      header('location:index.php');
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

  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  <!-- main style -->
  <link rel="stylesheet" href="./css/main.css" />
  <!-- <link rel="stylesheet" href="./css/style.css"> -->
  <title>Farm&Cust | login</title>

</head>

<body class="bg-gray">
  <!-- Login -->
  <div class="container mt-5 pt-5 d-flex flex-column flex-lg-row justify-content-evenly">
    <!-- heading -->
    <div class="text-center text-lg-start mt-0 pt-0 mt-lg-5 pt-lg-5">
      <h1 class="text-success fw-bold fs-0">farm$cust</h1>
      <p class="w-75 mx-auto fs-4 mx-lg-0">Farm&cust helps you connect with expirienced farmers and sale product to
        customers.</p>
    </div>
    <!-- form card -->
    <div style="max-width: 28rem; width: 100%">
      <!-- login form -->

      <div class="bg-white shadow rounded p-3 input-group-lg im">
        <form action="" method="post">
          <input type="email" class="form-control my-3" name="email" placeholder="Email address" />
          <input type="password" name="password" class="form-control my-3" placeholder="Password" required />
          <input type="submit" name="login" class="btn btn-primary w-100 my-3" value="Login">
          <a href="#" class="text-decoration-none text-center">
            <p>Forgotten password?</p>
          </a>
        </form>
        <?php
        if (isset($error)) {
          foreach ($error as $error) {
            echo '<span class="error-msg">' . $error . '</span>';
          };
        };
        ?>

        <!-- create form -->
        <hr />
        <div class="text-center my-4">
          <button class="btn btn-success btn-lg" type="button" data-bs-toggle="modal"
            data-bs-target="#createModal">Create New Account</button>
        </div>
        <!-- create modal -->
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content im">
              <!-- head -->
              <div class="modal-header">
                <div>
                  <h2 class="modal-title" id="exampleModalLabel">Sign Up</h2>
                  <span class="text-muted fs-7">It's quick and easy.</span>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <!-- body -->
              <div class="modal-body">
                <form method="post">
                  <!-- names -->
                  <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" name="firstname" placeholder="First name" />
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" name="surname" placeholder="Surname" />
                    </div>
                  </div>
                  <!-- email & pass -->
                  <input type="email" class="form-control my-3" name="email" placeholder="Email address" />
                  <input type="password" class="form-control my-3" name="password" placeholder="Create password"
                    required />
                  <input type="password" class="form-control my-3" name="cpassword" placeholder="Confirm password"
                    required />
                  <!-- roles -->
                  <div class="row my-3">
                    <span class="text-muted fs-7">ROLE <i class="fa-sharp fa-solid fa-circle-question"
                        data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right"
                        data-bs-content="Enter your date of birth"></i></span>
                    <div class="col">
                      <div class="border rounded p-2">
                        <label class="form-check-label" for="flexRadioDefault1">Admin </label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                      </div>
                    </div>
                    <div class="col">
                      <div class="border rounded p-2">
                        <label class="form-check-label" for="flexRadioDefault2">Farmer </label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" />
                      </div>
                    </div>
                    <div class="col">
                      <div class="border rounded p-2">
                        <label class="form-check-label" for="flexRadioDefault3">Customer </label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" />
                      </div>
                    </div>
                  </div>
                  <!-- disclaimer -->
                  <div>
                    <span class="text-muted fs-7">By clicking Sign Up, you agree to our Terms, Data Policy....</span>
                  </div>
                  <!-- btn -->
                  <div class="text-center mt-3">
                    <button type="button" name="signup" class="btn btn-success btn-lg" data-bs-dismiss="modal">Sign
                      Up</button>
                  </div>
                </form>
                <?php
                if (isset($error)) {
                  foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                  };
                };
                ?>
              </div>
            </div>
          </div>
        </div>
        <!-- modal end -->
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="bg-white p-4 text-muted">
    <div class="container">
      <!-- language -->
      <div class="d-flex flex-wrap">
        <p class="mx-2 fs-7 mb-0">English (US)</p>
      </div>
      <hr />
      <!-- copy -->
      <div class="mt-4 mx-2">
        <p class="fs-7">Farm&Cust &copy; 2022</p>
      </div>
    </div>
  </footer>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>
  <script src="./main.js"></script>
</body>

</html>

<!-- <div>
              <span class="text-muted fs-7">By clicking Sign Up, you agree to our Terms, Data Policy....</span>
            </div> -->
<!--<form>
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
</form>-->