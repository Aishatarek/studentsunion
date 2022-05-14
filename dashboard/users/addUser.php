<?php
ob_start();
include('../functions.php');
if ($_SESSION['role'] != 1 || !isset($_SESSION['role'])) {
    header("Location: ../../index.php");
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
            $Users->addUser($name,$code, $email, $password, $photo, $role);
        } else {
            echo "<script>alert('Password Not Matched.')</script>";
        }
    }
}
include("../header.php");
?>
<div class="container-fluid">
    <div class="row">
        <?php
        include("../theSideNav.php");
        ?>
        <div class="col-lg-10 col-md-9 col-sm-12 container-fluid">
            <div class="theform">
                <div>
                    <img src="images/pexels-mister-mister-380782.jpg" alt="">
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <h3>اضافه المستخدم</h3>
                    <input type="text" placeholder="الاسم" name="name" required>
                    <input type="number" min="100000000" max="999999999" placeholder="الكود" name="code" required>
                    <input type="email" placeholder="الايميل" name="email" required>
                    <input type="password" placeholder="كلمه السر" name="password" required>
                    <input type="password" placeholder="تاكيد كلمه السر" name="cpassword" required>
                    <input type="file" name="photo">
                    <button name="submit" class="addtotable">اضافه مستخدم</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include("../footer.php");
?>