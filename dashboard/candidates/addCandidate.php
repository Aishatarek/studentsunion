<?php
include('../functions.php');
if ($_SESSION['role'] != 1 || !isset($_SESSION['role'])) {
    header("Location: ../../index.php");
} 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $name = "'" . $_POST['name'] . "'";
        $code = $_POST['code'];
        $email = "'" . $_POST['email'] . "'";
        $password = "'" . md5($_POST['password']) . "'";
        $cpassword = "'" . md5($_POST['cpassword']) . "'";
        $photo = $_FILES['photo'];
        $department_id = $_POST['department_id'];
        if ($password == $cpassword) {
            $Candidates->addCandidate($name,$code, $email, $password, $photo, $department_id);
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
            <div class="theform2">

                <form action="" method="POST" class="login-email" enctype="multipart/form-data">
                    <h3>اضافه مرشح</h3>
                    <input type="text" placeholder="الاسم" name="name" required>
                    <input type="number" min="100000000" max="999999999" placeholder="الكود" name="code" required>
                    <input type="email" placeholder="الايميل" name="email" required>
                    <input type="password" placeholder="الباسورد" name="password" required>
                    <input type="password" placeholder="تاكيد الباسورد" name="cpassword" required>
                    <input type="file" name="photo">
                    <select name="department_id">
                        <?php
                        foreach ($Department->getData() as $department) {
                        ?>
                            <option value="<?php echo $department['id'] ?>"><?php echo $department['title'] ?></option>
                        <?php
                        }

                        ?>
                    </select>
                    <div class="input-group">
                        <button name="submit" class="addtotable">اضافه مرشح</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include("../footer.php");
?>