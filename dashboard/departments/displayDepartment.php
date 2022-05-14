<?php
include('../functions.php');
if ($_SESSION['role'] != 1 || !isset($_SESSION['role'])) {
    header("Location: ../../index.php");
} 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['deleteItem'])) {
        $Department->deleteDepartment($_POST['item_id']);
    }
}
include("../header.php");
?>
<div class="container-fluid">
    <div class="row">
    <?php
        include("../theSideNav.php");
        ?>
        <div class="col-lg-10 col-md-9 col-sm-12 container-fluid thedetailll">
            <a href="addDepartment.php" class="addtotable">اضافه قسم</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">اسم القسم</th>
                        <th scope="col">وصف</th>
                        <th>-</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($Department->getData() as $department) :
                    ?>
                        <tr>
                            <td><?php echo $department["title"] ?></td>
                            <td><?php echo $department["description"] ?></td>
                              <td>
                                <div class="d-flex justify-content-around">
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $department["id"] ?>" name="item_id">
                                        <button name="deleteItem" class="btn btn-outline-danger" type="submit"><i class="fa fa-trash-o"></i></button>
                                    </form>
                                    <a href="<?php printf('%s?id=%s', 'updateDepartment.php',  $department['id']); ?>">
                                        <button class="btn btn-outline-info"><i class="fa fa-edit"></i></button>
                                    </a>
                                </div>
                            </td>
                        </tr>

                    <?php

                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include("../footer.php");
?>