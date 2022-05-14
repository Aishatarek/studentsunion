<?php
ob_start();
include('dashboard/functions.php');
if (!isset($_SESSION['candidate_id'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo_style.css">
    <title>students union</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">

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
                            if ($candidate['id'] == $_SESSION['candidate_id']) :
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
                            endif;
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
        <div class="logoutcandidate">
            <a href="logout.php">
                <i class="fa fa-sign-out"></i>
                <p>Log out</p>
            </a>
        </div>
        <script src="js/vendor/jquery-1.10.1.min.js"></script>
        <script src="js/jquery.easing-1.3.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/plugins.js"></script>
</body>

</html>