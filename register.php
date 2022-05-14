<?php
include('dashboard/functions.php');
ob_start();
if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 1) {
        header("Location: dashboard/dashboard.php");
    } else if ($_SESSION['role'] == 0) {
        header("Location: vote.php");
    }
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['submit'])) {
        $name = "'" . $_POST['name'] . "'";
        $code = $_POST['code'];
        $email = "'" . $_POST['email'] . "'";
        $password = "'" . md5($_POST['password']) . "'";
        $cpassword = "'" . md5($_POST['cpassword']) . "'";
        $photo = $_FILES['photo'];
        $role = 0;
        if ($password == $cpassword) {
            $Users->Register($name, $code, $email, $password, $photo, $role);
        } else {
            echo "<script>alert('Password Not Matched.')</script>";
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
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo_style.css">
    <title>students union</title>
</head>

<body>
    <div class="thesignin">
        <div class="theform2">
            <img src="images/pexels-sora-shimazaki-5673502.jpg" alt="">

            <form action="" method="POST" enctype="multipart/form-data">
                <h3>انشاء حساب</h3>
                <input type="text" placeholder="الاسم" name="name" required>
                <input type="number" min="100000000" max="999999999" placeholder="الكود" name="code" required>
                <input type="email" placeholder="الايميل" name="email" required>
                <input type="password" placeholder="كلمه السر" name="password" required>
                <input type="password" placeholder="تاكيد كلمه السر" name="cpassword" required>
                <input type="file" name="photo">
                <button name="submit" class="addtotable">انشاء حساب</button>

                <p class="login-register-text">تسجيل الدخول كمستخدم ؟ <a href="signin.php"> تسجيل الدخول هنا</a>.</p>
                <p class="login-register-text">تسجيل الدخول كمرشح ؟ <a href="signinCandidate.php"> تسجيل الدخول هنا</a>.</p>


            </form>
        </div>
    </div>
    <script src="js/vendor/jquery-1.10.1.min.js"></script>
    <script src="js/jquery.easing-1.3.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins.js"></script>
</body>

</html>