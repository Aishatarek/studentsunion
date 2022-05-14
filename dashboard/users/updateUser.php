<?php
include('../functions.php');
if ($_SESSION['role'] != 1 || !isset($_SESSION['role'])) {
    header("Location: ../../index.php");
} 
$item_id = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $name = "'" . $_POST['name'] . "'";
        $code = $_POST['code'];
        $email = "'" . $_POST['email'] . "'";
        $photo = $_FILES['photo'];
        $role = $_POST['role'];
        $Users->updateUser($item_id, $name,$code, $email, $photo, $role);
    }
}
include("../header.php");
?>
<div class="container-fluid">
    <div class="row">
    <?php
        include("../theSideNav.php");
        ?>
        <div class="col-lg-10 col-md-9 col-sm-12 thedetailll">
            <div class="theform">
                <?php
                foreach ($Users->getData() as $user) :
                    if ($user['id'] == $item_id) :
                ?>
                        <form action="" method="POST" class="login-email" enctype="multipart/form-data">
                            <p>الاسم</p>
                            <input type="text" name="name" placeholder="الاسم" value="<?php echo $user['name'] ?>">
                            <p>الكود</p>
                            <input type="number" name="code" min="100000000" max="999999999" placeholder="الكود" value="<?php echo $user['code'] ?>">
                            <p>الايميل</p>
                            <input type="email" name="email" placeholder="الايميل" value="<?php echo $user['email'] ?>">
                            <p>الصوره</p>
                            <img src="../../uploads/users/<?php echo $user['photo'] ?>" alt="" width="100px">
                            <input type="file" name="photo">
                            <select name="role">
                                <?php
                                if ($user['role'] == 1) {
                                ?>
                                    <option value="1" selected>Admin</option>
                                    <option value="0">User</option>

                                <?php
                                } else {
                                ?>
                                    <option value="1">Admin</option>
                                    <option value="0" selected>User</option>
                                <?php
                                }
                                ?>
                            </select>

                            <button name="submit" class="addtotable">تعديل</button>
                        </form>
                <?php
                    endif;
                endforeach;
                ?>

            </div>
        </div>
    </div>
</div>
<?php
include("../footer.php");
?>