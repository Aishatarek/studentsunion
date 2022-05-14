<?php
ob_start();
include('dashboard/functions.php');
if (isset($_SESSION['role'])) {
	if ($_SESSION['role'] == 1) {
		header("Location: dashboard/dashboard.php");
	} else if ($_SESSION['role'] == 0) {
		header("Location: vote.php");
	}
} elseif (isset($_SESSION['candidate_id'])) {
	header("Location: candidateVotes.php");
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	if (isset($_POST['submit'])) {
		$code = "'" . $_POST['code'] . "'";
		$password = "'" . md5($_POST['password']) . "'";
		$Users->signIn($code, $password);
	}
}

?>
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/templatemo_style.css">
	<title>students union</title>
</head>

<body>
	<div class="thesignin">
		<div class="theform2">
			<img src="images/pexels-sora-shimazaki-5673502.jpg" alt="">
			<form action="" method="POST">
				<h3>تسجيل الدخول </h3>
				<input type="number" min="100000000" max="999999999" placeholder="كود" name="code" required>
				<input type="password" placeholder="كلمه السر" name="password" required>
				<button name="submit" class="addtotable">تسجيل الدخول</button>
				<p class="login-register-text">تسجيل الدخول كمرشح ؟ <a href="signinCandidate.php"> تسجيل الدخول هنا</a>.</p>
				<p class="login-register-text">انشاء حساب ؟<a href="register.php">انشاء حساب هنا</a>.</p>

			</form>

		</div>

	</div>

	<script src="js/vendor/jquery-1.10.1.min.js"></script>
	<script src="js/jquery.easing-1.3.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/plugins.js"></script>
</body>

</html>