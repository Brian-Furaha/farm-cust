<?php

ob_start();

@include 'db/conn.php';

session_start();

if (isset($_POST['signup'])) {

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pass = md5($_POST['password']);
	$cpass = md5($_POST['cpassword']);
	$role = $_POST['user_role'];

	$select = " SELECT * FROM login WHERE login_email = '$email' && login_rank = '$role'";

	$result = mysqli_query($conn, $select);

	if (mysqli_num_rows($result) > 0) {

		$error[] = 'Signup: user already exists!';
	} else {

		if ($pass != $cpass) {
			$error[] = 'Signup: password does not match!';
		} else {
			$insert = "INSERT INTO login(login_email, login_password, login_rank) VALUES('$email', '$pass', '$role')";
			mysqli_query($conn, $insert);
			header('location:index.php');
		}
	}
};

if (isset($_POST['login'])) {

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pass = md5($_POST['password']);

	$select = " SELECT * FROM login WHERE login_email = '$email' && login_rank = '$pass'";

	$result = mysqli_query($conn, $select);

	if (mysqli_num_rows($result) > 0) {

		$row = mysqli_fetch_array($result);

		if ($row['login_rank'] == 'admin') {

			$_SESSION['admin_email'] = $row['email'];
			header('location:admin/admin_page.php');
		} elseif ($row['login_rank'] == 'customer') {

			$_SESSION['customer_email'] = $row['email'];
			header('location:customer/customer_page.php');
		} elseif ($row['login_rank'] == 'farmer') {

			$_SESSION['farmer_email'] = $row['email'];
			header('location:farmer/farmer_page.php');
		}
	} else {
		$error[] = 'Incorrect email or password!';
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
					<div class="card-front">
						<form action="" method="post">
							<h1 class="title">Login</h1>
							<input type="email" name="email" class="input" placeholder="a" required>
							<label for="" class="label">Email</label>

							<input type="password" name="password" class="input" placeholder="a" required>
							<label for="" class="label">Password</label>

							<input type="submit" name="login" class="submitBtn" value="Login">
							<button type="button" class="btn" placeholde="a" onclick="openSignup()">I'm new
								here</button>
							<a href="">Forgot password</a>
						</form>
					</div>
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
							<button type="button" class="btn" placeholde="a" onclick="openLogin()">I have an account</button>
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
	<script>
		var card = document.getElementById("card");

		function openSignup() {
			card.style.transform = "rotateY(-180deg)";
		}

		function openLogin() {
			card.style.transform = "rotateY(0deg)";
		}
	</script>
</body>

</html>