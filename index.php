<?php
session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title>Sprint HTML5 Template</title>
    <meta name="description" content="">
    <!--

Sprint Template

https://templatemo.com/tm-401-sprint

-->
    <meta name="viewport" content="width=device-width">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/templatemo_misc.css">
    <link rel="stylesheet" href="css/templatemo_style.css">

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>

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

                        <?php
                        if (isset($_SESSION['user_id']) || isset($_SESSION['candidate_id'])) {
                        ?>
                        <a href="logout.php">تسجيل الخروج</a>
                        <?php  } else {
                        ?>
                        <a href="signin.php">تسجيل الدخول</a>
                        <?php
                        }
                        ?>

                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-8 col-sm-6 col-xs-6">
                        <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                        <div class="main-menu">
                            <ul>
                                <li><a href="#front">الرئيسية</a></li>
                                <li><a href="#services">&nbsp;عن</a></li>
                                <li><a href="#products">المرشحين</a></li>
                                <li><a href="#contact">التواصل</a></li>

                            </ul>

                        </div> <!-- /.main-menu -->

                    </div> <!-- /.col-md-8 -->
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="responsive">
                            <div class="main-menu">
                                <ul>
                                    <li><a href="#front">Home</a></li>
                                    <li><a href="#services">Services</a></li>
                                    <li><a href="#products">Products</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                    <li><a href="signin.php">Sign In</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.container -->
        </div> <!-- /.site-header -->
    </div> <!-- /#front -->

    <div class="site-slider">
        <!-- /.bxslider -->
        <div class="bx-thumbnail-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="bx-pager">
                            <img src="images/slider/thumb1.jpg" alt="image 1" width="950" height="443"> <img src="images/slider/thumb2.jpg" alt="image 2" width="950"> <img src="images/slider/thumb3.jpg" alt="image 3" width="950"> <a data-slide-index="3" href=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.site-slider -->

    <div id="services" class="content-section">
        <div class="container">
            <div class="row">
                <!-- /.col-md-3 -->
                <div class="col-sm-6 col-md-12">
                    <div class="service-item">
                        <div class="col-sm-1 col-md-12">
                            <div class="service-item"><img src="images/slider/images.jpg" width="150"> <img src="file:///E|/Unnamed Site 4/download (2).jpg" width="150"></div>
                            <!-- /.service-item -->
                        </div>
                    </div> <!-- /.service-item -->
                </div> <!-- /.col-md-3 -->
                <!-- /.col-md-3 -->
                <!-- /.col-md-3 -->
            </div>
            <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /#services -->

    <div id="product-promotion" class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="section-title">عن&nbsp;</h1>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
            <div class="row">
                <!-- /.col-md-2 -->
                <div class="col-sm-6 col-md-12">
                    <div class="item-large">
                        <img src="images/promotion/promotion3.jpg" alt="Product 3" width="500"><img src="images/promotion/promotion2.jpg" alt="Product 2">
                        <div class="item-large-content">
                            <div class="item-header">
                                <h2 class="pull-right">اتحاد الطلبة&nbsp;</h2>
                                <div class="clearfix"></div>
                            </div> <!-- /.item-header -->
                            <p>&nbsp; اتحاد الطلبة، هو "حكومة طلابية" أو "نقابة طلاب حرة" أو "مجلس شيوخ الطلاب" أو "جمعية طلابية" أو "منظمة طلابية، يتم إنشاؤه في العديد من الجامعات والكليات والمدارس الثانوية. في مجال التعليم العالي، غالباً ما يكون اتحاد الطلبة ضمن الحرم الجامعي ويكرس للتنظيم الأنشطة الاجتماعية وتمثيل الطلاب وتقديم الدعم الأكاديمي. في الولايات المتحدة، يشير اتحاد الطلبة أحياناً للمبنى تملكه الجامعة يهدف وجوده إلى توفير الخدمات للطلاب دون وجود هيئة مسؤولة، كما يشير إلى مركز الأنشطة الطلابية. في دول أخرى، يكون اتحاد الطلبة عبارة عن هيئة تمثيلية. في بعض الحالات، يدير الاتحاد مجموعة من الطلاب بطريقة مستقلة عن المنشأة التعليمية. الهدف هو تمثيل الطلاب سواء داخل الكيان الجامعي أو خارجه، بما في ذلك القضايا المحلية والوطنية. تكون اتحادات الطلبة أيضاً مسؤولة عن توفير مجموعة منوعة من الخدمات للطلاب. يمكن للطلاب الانخراط في هذا العمل من خلال حضور المجالس والاجتماعات العامة وأعمال لجنة الأنشطة، أو من خلال الانتخاب. بعض اتحادات الطلبة تكون هيئات مسيسة، وتكون ساحات تدريب للطامحين في المشاركة السياسية. ومن المشكلات التي قد يتعرض لها اتحاد الطلبة، حماسة الطلاب الأعضاء ونقص الخبرة العامة ما يؤدي إلى عواقب وخيمة في اتخاذ القرارات فضلاً عن الوقوع تحت وقع الضغوط المالية اللازمة لتغطية الحملات الانتخابية والأنشطة. تخصص بعض الاتحادات بميزانيات سنوية. وفي بعض المؤسسات ينضم طلاب الدراسات العليا ضمن نقابات الطلاب العامة، وفي أحيان أخرى يكون لهم هيئات ممثلة مستقلة. أما في حالات أخرى، يفتقر طلاب الدراسات العليا إلى هيئة ممثلة لهم في الجامعة. يعد اتحاد الطلاب الممثل الشرعي الحقيقي لجميع طلاب الجامعة، للتعبير عن آرائهم ومتطلباتهم، كما ينبثق منه عدة لجان تهدف إلى تفعيل جميع الأنشطة الطلابية بالجامعة. ويهدف إلى تحقيق ما يلي: 1. تنمية القيم الروحية والأخلاقية والوعي الوطني بين الطلاب، وتدريبهم على القيادة وإتاحة الفرصة لهم للتعبير عن آرائهم. 2. بث الروح الجامعية بين الطلاب، وتوثيق الروابط بينهم وبين أعضاء هيئة التدريس والعاملين. 3. اكتشاف مواهب الطلاب وقدراتهم في شتى المجالات. 4. نشر وتشجيع تكوين الأسر الطلابية. 5. تنظيم الإفادة من طاقات الطلاب وتوظيفها في خدمة المجتمع. 6. تنظيم وتفعيل الأنشطة الرياضية والاجتماعية والفنية والثقافية. 7. إكساب الطلاب طرق الممارسة الديمقراطية السليمة. 8. اكتشاف القيادات الطلابية وصقلها. - شروط التقدم لعضوية الاتحاد 1- أن يكون الطالب متمتعاً بالخلق القويم والسمعة الحسنة. 2- أن يكون الطالب مستجداً بفرقته غير باق للإعادة لأي سبب من الأسباب. 3- أن يكون الطالب مسدداً للرسوم الدراسية. 4- أن يكون الطالب من ذوي النشاط الملحوظ في مجال عمل اللجنة التي يرشح فيها نفسه. 5- ألا يكون قد سبق الحكم عليه بعقوبة مقيدة للحرية. - الهيكل التنظيمي للاتحاد الطلابي • يتكون اتحاد طلاب الجامعة من الأمين والأمين المساعد لكل كلية بالجامعة، وهما اللذان يترأسان الاتحاد. • ويتكون الاتحاد من عدة لجان تُمثل الأنشطة المختلفة للاتحاد، بعدد عضوين من الطلاب في كل لجنة، ويترأسهم أيضًا الأمين والأمين المساعد. • ويتم اختيار هؤلاء الطلاب عن طريق أسلوب الترشح والانتخاب، مع مراعاة شروط التقدم.
                            </p>
                        </div> <!-- /.item-large-content -->
                    </div> <!-- /.item-large -->
                </div> <!-- /.col-md-8 -->
                <div class="col-md-12">
                    <div class="item-small"> </div> <!-- /.item-small -->
                </div> <!-- /.col-md-2 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /#product-promotion -->

    <div id="products" class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="section-title">المرشحين&nbsp;</h1>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <span class="note"><img src="images/small_logo_1.png" alt=""></span>
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <a href="#nogo" class="view-detail">انتخاب&nbsp;</a>
                                </div>
                            </div> <!-- /.overlay -->
                            <img src="images/products/product1.jpg" alt="">
                        </div> <!-- /.item-thumb -->
                        <h3 class="text-center">محمد ابراهيم</h3>
                        <span>امين اتحاد الطلاب: - </span>
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <span class="note"><img src="images/small_logo_3.png" alt=""></span>
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <a href="#nogo" class="view-detail">انتخاب</a>
                                </div>
                            </div> <!-- /.overlay -->
                            <img src="images/products/product2.jpg" alt="">
                        </div> <!-- /.item-thumb -->
                        <h3 class="text-center">يوسف سمير</h3>
                        <span>رئيس اتحاد: - </span>
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <span class="note"><img src="images/small_logo_2.png" alt=""></span>
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <a href="#nogo" class="view-detail">انتخاب</a>
                                </div>
                            </div> <!-- /.overlay -->
                            <img src="images/products/product3.jpg" alt="">
                        </div> <!-- /.item-thumb -->
                        <h3 class="text-center">ابراهيم سعيد&nbsp;</h3>
                        <span>رئيس اتحاد: <em class="text-muted">&nbsp;</em> </span>
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <span class="note"><img src="images/small_logo_1.png" alt=""></span>
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <a href="#nogo" class="view-detail">انتخاب</a>
                                </div>
                            </div> <!-- /.overlay -->
                            <img src="images/products/product4.jpg" alt="">
                        </div> <!-- /.item-thumb -->
                        <h3 class="text-center">حسام مصطفى&nbsp;</h3>
                        <span>امين اتحاد الطلاب: <em class="text-muted">&nbsp;</em> </span>
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <span class="note"><img src="images/small_logo_3.png" alt=""></span>
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <a href="#nogo" class="view-detail">انتخاب</a>
                                </div>
                            </div> <!-- /.overlay -->
                            <img src="images/products/product5.jpg" alt="">
                        </div> <!-- /.item-thumb -->
                        <h3 class="text-center">على محمد&nbsp;</h3>
                        <span>امين اتحاد: <em class="text-muted">&nbsp;</em> </span>
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <span class="note"><img src="images/small_logo_1.png" alt=""></span>
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <a href="#nogo" class="view-detail">انتخاب&nbsp;</a>
                                </div>
                            </div> <!-- /.overlay -->
                            <img src="images/products/product6.jpg" alt="">
                        </div> <!-- /.item-thumb -->
                        <h3 class="text-center">محمد سليم&nbsp;</h3>
                        <span>رئيس اتحاد: <em class="text-muted">&nbsp;</em> </span>
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <span class="note"><img src="images/small_logo_2.png" alt=""></span>
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <a href="#nogo" class="view-detail">انتخاب</a>
                                </div>
                            </div> <!-- /.overlay -->
                            <img src="images/products/product7.jpg" alt="">
                        </div> <!-- /.item-thumb -->
                        <h3 class="text-center">ابراهيم سعيد&nbsp;</h3>
                        <span>رئيس اتحاد: <em class="text-muted">&nbsp;</em> </span>
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <span class="note"><img src="images/small_logo_3.png" alt=""></span>
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <a href="#nogo" class="view-detail">انتخاب&nbsp;</a>
                                </div>
                            </div> <!-- /.overlay -->
                            <img src="images/products/product8.jpg" alt="">
                        </div> <!-- /.item-thumb -->
                        <h3 class="text-center">محمد امين&nbsp;</h3>
                        <span>امين مساعد: <em class="text-muted">&nbsp;</em> </span>
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /#products -->

    <div id="contact" class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="section-title">Contact</h1>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
            <div class="row">
                <div class="col-md-offset-2 col-md-8 text-center bigger-text">
                    <p>Quisque egestas, dui accumsan bibendum semper, eros metus iaculis orci, in fermentum sapien magna quis turpis. Vestibulum ante ipsum primis.</p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div id="map">
                    </div>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6">

                    <div class="row contact-form">

                        <fieldset class="col-md-6 col-sm-6">
                            <input id="name" type="text" name="name" placeholder="Name">
                        </fieldset>
                        <fieldset class="col-md-6 col-sm-6">
                            <input type="email" name="email" id="email" placeholder="Email">
                        </fieldset>
                        <fieldset class="col-md-12">
                            <input type="text" name="subject" id="subject" placeholder="Subject">
                        </fieldset>
                        <fieldset class="col-md-12">
                            <textarea name="comments" id="comments" placeholder="Message"></textarea>
                        </fieldset>
                        <fieldset class="col-md-12">
                            <input type="submit" name="send" value="Send Message" id="submit" class="button">
                        </fieldset>

                    </div> <!-- /.contact-form -->

                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /#products -->

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
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')
    </script>
    <script src="js/jquery.easing-1.3.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <!-- templatemo 401 sprint -->
</body>

</html>