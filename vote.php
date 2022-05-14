<?php
include("dashboard/functions.php");
if (!isset($_SESSION['user_id'])) {
    if (isset($_SESSION['candidate_id'])) {
        header("Location: candidateVotes.php");
    } else {
        header("Location: signin.php");
    }
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['vote_submit'])) {
        $Votes->addVote($_POST['user_id'], $_POST['candidate_id'], $_POST['department_id']);
    }
}
if (count($Votes->getData()) > 0) {
    $voted = $Votes->getVoteId($Votes->getData());
} else {
    $voted = [];
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
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    <div id="front">
        <div class="site-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div id="templatemo_logo">
                            <h1><a href="#">اتحاد الطلبة</a></h1>
                            <p>&nbsp;</p>
                        </div>
                        <!-- /.logo -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-8 col-sm-6 col-xs-6">
                        <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                        <div class="main-menu">
                            <ul>
                                <li><a href="index.php#front">الرئيسية</a></li>
                                <li><a href="index.php#services">&nbsp;عن</a></li>
                                <li><a href="index.php#products">المرشحين</a></li>
                                <li><a href="index.php#contact">التواصل</a></li>
                            </ul>
                        </div> <!-- /.main-menu -->
                    </div> <!-- /.col-md-8 -->

                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="responsive">
                            <div class="main-menu">
                                <ul>
                                    <li><a href="index.php#front">Home</a></li>
                                    <li><a href="index.php#services">Services</a></li>
                                    <li><a href="index.php#products">Products</a></li>
                                    <li><a href="index.php#contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.container -->
        </div> <!-- /.site-header -->
    </div> <!-- /#front -->
    <?php
    foreach ($Department->getData() as $department) :
    ?>
        <div class="addVote">
            <h3><?php echo $department['title'] ?></h3>
            <form method="post">
                <div class="voteformdiv">
                    <?php
                    foreach ($Candidates->getData() as $candidate) :
                        if ($department['id'] == $candidate['department_id']) :
                    ?>
                            <div class="votedivv">
                                <div class="voteimgdiv">
                                    <img src="uploads/candidates/<?php echo $candidate['photo'] ?>" alt="" width="100px">
                                </div>
                                <p><?php echo $candidate['name'] ?></p>
                                <input type="radio" name="candidate_id" value="<?php echo $candidate['id'] ?>" />
                            </div>
                    <?php
                        endif;
                    endforeach;
                    ?>
                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                    <input type="hidden" name="department_id" value="<?php echo $department['id']; ?>">
                </div>
                <?php
                if (in_array($department['id'], $voted)) {
                    echo '<button  disabled class="addtotable">voted</button>';
                } else {
                    echo '<button type="submit" class="addtotabled" name="vote_submit" >vote</button>';
                }
                ?>
            </form>
        </div>
    <?php
    endforeach;
    ?>
    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6">
                    <span id="copyright">
                        Copyright &copy; 2020 <a href="#">Company Name</a> . Design: Template Mo </span>

                </div> <!-- /.col-md-6 -->
                <div class="col-md-4 col-sm-6">
                    <ul class="social">
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                        <li><a href="#" class="fa fa-linkedin"></a></li>
                        <li><a href="#" class="fa fa-rss"></a></li>
                    </ul>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

    <script src="js/vendor/jquery-1.10.1.min.js"></script>
    <script src="js/jquery.easing-1.3.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins.js"></script>
</body>

</html>