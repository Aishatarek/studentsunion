<?php
include('../functions.php');
if ($_SESSION['role'] != 1 || !isset($_SESSION['role'])) {
    header("Location: ../../index.php");
} 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['deleteItem'])) {
        $Candidates->deleteCandidate($_POST['item_id']);
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
            <a href="addCandidate.php" class="addtotable">اضافه مرشح</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">الاسم</th>
                        <th scope="col">الكود</th>
                        <th scope="col">الايميل</th>
                        <th scope="col">الصوره</th>
                        <th scope="col">القسم</th>
                        <th>-</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($Candidates->getData() as $candidate) :
                    ?>
                        <tr>
                            <td><?php echo $candidate["name"] ?></td>
                            <td><?php echo $candidate["code"] ?></td>
                            <td><?php echo $candidate["email"] ?></td>
                            <td class="tdimg">
                                <?php if (!empty($candidate['photo'])) : ?>
                                    <img src="../../uploads/candidates/<?php echo $candidate["photo"] ?>" alt="" width="50px">
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php
                                foreach ($Department->getData() as $department) :
                                    if ($department['id'] == $candidate['department_id']) :
                                        echo $department["title"];
                                    endif;
                                endforeach;
                                ?>
                            </td>
                            <td>
                                <div class="d-flex justify-content-around">
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $candidate["id"] ?>" name="item_id">
                                        <button name="deleteItem" class="btn btn-outline-danger" type="submit"><i class="fa fa-trash-o"></i></button>
                                    </form>
                                    <a href="<?php printf('%s?id=%s', 'updateCandidate.php',  $candidate['id']); ?>">
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