<?php
ob_start();
include('../functions.php');
if ($_SESSION['role'] != 1 || !isset($_SESSION['role'])) {
    header("Location: ../../index.php");
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['deleteItem'])) {
        $Users->deleteUser($_POST['item_id']);
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
            <a href="addUser.php" class="addtotable">اضافه مستخدم</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">الاسم</th>
                        <th scope="col">الكود</th>
                        <th scope="col">الايميل</th>
                        <th scope="col">الصوره</th>
                        <th>-</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($Users->getData() as $user) :
                        if ($user['role'] != 1) :
                    ?>
                            <tr>
                                <td><?php echo $user["name"] ?></td>
                                <td><?php echo $user["code"] ?></td>
                                <td><?php echo $user["email"] ?></td>
                                <td class="tdimg">
                                    <?php if (!empty($user['photo'])) : ?>
                                        <img src="../../uploads/users/<?php echo $user["photo"] ?>" alt="" width="50px">
                                    <?php endif; ?>
                                </td>

                                <td>
                                    <div class="d-flex justify-content-around">
                                        <form method="post">
                                            <input type="hidden" value="<?php echo $user["id"] ?>" name="item_id">
                                            <button name="deleteItem" class="btn btn-outline-danger" type="submit"><i class="fa fa-trash-o"></i></button>
                                        </form>
                                        <a href="<?php printf('%s?id=%s', 'updateUser.php',  $user['id']); ?>">
                                            <button class="btn btn-outline-info"><i class="fa fa-edit"></i></button>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                    <?php
                        endif;
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