<?php
session_start();
if ($_SESSION['role'] != 1 || !isset($_SESSION['role'])) {
    header("Location: ../index.php");
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/templatemo_style.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php
            include("./sideNav.php");
            ?>
            <div class="col-lg-10 col-md-9 col-sm-12 thedetailll container-fluid">
                <div class='row cardss'>
                    <div class='col-lg-6 cardy col-md-6 col-sm-12'>
                        <a class='linkuser' href='votes/displayVotes.php'>
                            <div class='users'>
                                <i class="fa fa-trophy"></i>
                                <p>النتيجه</p>
                            </div>
                        </a>
                    </div>
                    <div class='col-lg-6 cardy col-md-6 col-sm-12'>
                        <a class='linkuser' href='departments/displayDepartment.php'>
                            <div class='users'>
                                <i class="fa fa-list"></i>
                                <p>الاقسام</p>
                            </div>
                        </a>
                    </div>
                    <div class='col-lg-6 cardy col-md-6 col-sm-12'>
                        <a class='linkuser' href='candidates/displayCandidates.php'>
                            <div class='users'>
                                <i class="fa fa-user"></i>
                                <p>المرشحين</p>
                            </div>
                        </a>
                    </div>
                    <div class='col-lg-6 cardy col-md-6 col-sm-12'>
                        <a class='linkuser' href='users/displayUsers.php'>
                            <div class='users'>
                                <i class='fa fa-users'></i>
                                <p>الطلاب</p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <script src="../js/vendor/jquery-1.10.1.min.js"></script>
    <script src="../js/jquery.easing-1.3.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/plugins.js"></script>
</body>

</html>