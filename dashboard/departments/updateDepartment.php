<?php
include('../functions.php');
if ($_SESSION['role'] != 1 || !isset($_SESSION['role'])) {
    header("Location: ../../index.php");
} 
$item_id = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $title = "'" . $_POST['title'] . "'";
        $description = "'" . $_POST['description'] . "'";
        $Department->updateDepartment($item_id, $title, $description);
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
                foreach ($Department->getData() as $department) :
                    if ($department['id'] == $item_id) :
                ?>
                        <form action="" method="POST" class="login-email" enctype="multipart/form-data">
                            <p>Title</p>
                            <input type="text" name="title" placeholder="title" value="<?php echo $department['title'] ?>">
                            <p>Description</p>
                            <textarea name="description" cols="30" rows="10"><?php echo $department['description'] ?></textarea>
                         
                            <button name="submit" class="addtotable">edit Department</button>
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