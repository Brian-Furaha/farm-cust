<?php

ob_start();

@include 'db/conn.php';

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
			header('location:customer/customer_page.php');
		} elseif ($row['login_rank'] == 'farmer') {
			/*$_SESSION['farmer_email'] = $row['login_email'];*/
			$_SESSION['userid'] = $row['login_user_id'];
			header('location:farmer/farmer_page.php');
		}
	} else {

		$error[] = 'Login: Incorrect email or password!';
	}
	print_r($result);
}
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
							<a href="index.php"><button type="button" class="btn" placeholde="a">I'm new
									here</button></a>
							<a href="">Forgot password</a>
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