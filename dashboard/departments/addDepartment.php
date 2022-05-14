<?php
include('../functions.php');
if ($_SESSION['role'] != 1 || !isset($_SESSION['role'])) {
    header("Location: ../../index.php");
} 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $title ="'".$_POST['title']."'";
        $description ="'".$_POST['description']."'";
        $Department->addDepartment($title, $description);
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
                        <h3> اضافه القسم</h3>
                        <input type="text" name="title" placeholder="اسم القسم" >
                        <textarea name="description" placeholder="وصف" cols="30" rows="10"></textarea>
                     <div class="input-group">
                            <button name="submit" class="addtotable" >اضافه القسم</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
include("../footer.php");
?>