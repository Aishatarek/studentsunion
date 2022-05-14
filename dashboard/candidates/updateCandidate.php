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
        $department_id = $_POST['department_id'];
        $Candidates->updateCandidate($item_id, $name,$code, $email, $photo, $department_id);
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
                foreach ($Candidates->getData() as $candidate) :
                    if ($candidate['id'] == $item_id) :
                ?>
                        <form action="" method="POST" class="login-email" enctype="multipart/form-data">
                            <p>الاسم</p>
                            <input type="text" name="name" placeholder="الاسم" value="<?php echo $candidate['name'] ?>">
                            <p>الكود</p>
                            <input type="number" name="code" min="100000000" max="999999999" placeholder="الكود" value="<?php echo $candidate['code'] ?>">
                            <p>الايميل</p>
                            <input type="email" name="email" placeholder="الايميل" value="<?php echo $candidate['email'] ?>">
                            <p>الصوره</p>
                            <?php if (!empty($candidate['photo'])) : ?>
                                <img src="../../uploads/candidates/<?php echo $candidate['photo'] ?>" alt="" width="100px">
                            <?php endif; ?>

                            <input type="file" name="photo">
                            <select name="department_id">
                                <?php
                                foreach ($Department->getData() as $department) {
                                    if ($department['id'] == $candidate['department_id']) {
                                ?>
                                        <option value="<?php echo $department['id'] ?>" selected><?php echo $department['title'] ?></option>
                                    <?php
                                    } else {
                                    ?>
                                        <option value="<?php echo $department['id'] ?>"><?php echo $department['title'] ?></option>
                                <?php
                                    }
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