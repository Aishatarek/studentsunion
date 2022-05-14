<?php
include('../functions.php');
if ($_SESSION['role'] != 1 || !isset($_SESSION['role'])) {
    header("Location: ../../index.php");
}
include("../header.php");
?>
<div class="container-fluid">
    <div class="row">
        <?php
        include("../theSideNav.php");
        ?>
        <div class="col-lg-10 col-md-9 col-sm-12 container-fluid thedetailll">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">المرشح</th>
                        <th scope="col">القسم</th>
                        <th scope="col">عدد الاصوات</th>
                        <th>-</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($Candidates->getData() as $candidate) :
                    ?>
                        <tr>
                            <td><?php echo $candidate["name"] ?></td>
                            <td>
                                <?php
                                foreach ($Department->getData() as $department) {
                                    if ($department['id'] == $candidate['department_id']) {
                                        echo $department['title'];
                                    }
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                echo count($Votes->getVotes($candidate["id"]))
                                ?>
                            </td>
                        </tr>
                    <?php

                    endforeach;

                    ?>
                </tbody>
            </table>
            <div class="winners">
                <h3>الفائزين</h3>
                <?php
                $i = 0;
                foreach ($Department->getData() as $department) {
                    $i++;
                    foreach ($Candidates->getData() as $candidate) {
                        if ($department['id'] == $candidate['department_id']) {
                            $subTotal[$i][] = count($Votes->gettheVotes($candidate["id"], $department['id']));
                        }
                    }
                ?>

                    <div class="thediv">
                    <p> : <?php echo $department['title']; ?> </p>
                    <span>
                        <?php
                        if (max($subTotal[$i]) == 0) {
                            echo " no votes ";
                        } else {
                            foreach ($Candidates->getData() as $candidate) {
                                if (max($subTotal[$i]) == count($Votes->getVotes($candidate["id"]))&&$candidate['department_id']==$department['id']) {
                                    echo $candidate["name"] ;
                                }
                            }
                            echo " (" . max($subTotal[$i]) . ") ";
                        }
                        ?>

                    </div>
                <?php
                }
                ?>
            </div>

        </div>
    </div>
</div>
<?php
include("../footer.php");
?>