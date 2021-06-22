<?php
include('includes/config.php');
session_start();
if (!isset($_SESSION["email"])) {
    header("location:login.php");
}
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <title>CYTONN INVESTMENTS</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/font-awesome.css" rel="stylesheet">


    <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
    <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
    <!--fonts-->
    <link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <!--//fonts-->
</head>
<style>
    /* @media (max-width: 575px) {
        .hero-btn {
            margin-bottom: 20 !important
        }
    } */
    .h3 h3 {
        color: #430f53;
        font-size: 30px;
        letter-spacing: 5px;
        text-transform: uppercase;
        font-family: 'Lato', sans-serif;
        font-weight: bold;
        text-align: center;
        padding-top: 0px;
        margin-bottom: 40px;
    }

    .h3 small a {
        color: red;
        text-align: left;
        margin-left: 2rem;


    }
</style>

<body>
    <!-- header -->
    <div class="banner-top">
        <div class="social-bnr-agileits">
            <ul class="social-icons3">
                <li>
                    <a href="#" class="fa fa-facebook icon-border facebook"> </a>
                </li>
                <li>
                    <a href="https://twitter.com/" class="fa fa-twitter icon-border twitter"> </a>
                </li>
                <li>
                    <a href="https://plus.google.com/u/0/" class="fa fa-google-plus icon-border googleplus"> </a>
                </li>

            </ul>
        </div>
        <div class="contact-bnr-w3-agile">
            <ul style="text-transform: capitalize;">

                <li style="color:#430f53;">Welcome <span style="font-size: 15px; font-weight: bold; "><?php echo $_SESSION["email"]; ?> </span> <i class="fa fa-user" aria-hidden="true"></i></li>
                <li style="color:#430f53;text-transform: uppercase;">
                    <a href="logout.php" style="text-transform: capitalize; font-weight:bold;">
                        Log Out <i class="fa fa-sign-out" aria-hidden="true"></i></a>
                </li>

            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="w3_navigation">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">
                    <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button> -->

                    <!--#14ff27; #5DA3FA-->


                    <h1><a class="navbar-brand" href="index.php" style=" margin-left: 0rem;">CYTONN <span>INVESTMENTS</span>
                            <p class="logo_w3l_agile_caption">Delivering to Promise</p>
                        </a></h1>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="menu menu--iris">
                        <ul class="nav navbar-nav menu__list">
                            <!-- <li class="menu__item menu__item--current"><a href="index.php" class="menu__link">Home</a></li> -->
                            <!-- <li class="menu__item"><a href="#about" class="menu__link scroll">About</a></li> -->
                            <!-- <li class="menu__item"><a href="#gallery" class="menu__link scroll">Gallery</a></li> -->




                        </ul>
                    </nav>
                </div>
            </nav>

        </div>
    </div>
    <div id="home" class="w3ls-banner">
        <!-- banner-text -->

        <div class="h3">
            <small><a href="#">Update your Details</a></small>
            <h3>SECURE A PROPERTY WITH US NOW!</h3>
            <ul class="properties_list">
                <?php
                include 'includes/config.php';
                $sel = "SELECT * FROM houses";
                $rs = $conn->query($sel);
                while ($rws = $rs->fetch_assoc()) {

                ?>
        </div>
        <!-- rooms & rates -->
        <div class="col-md-4 price-grid ">
            <div class="price-block agile ">
                <div class="price-gd-top ">
                    <a href="#">
                        <img class="thumb" src="house_images/<?php echo $rws['image']; ?>" width="300px" height="300px">
                    </a>


                    <h4><?php echo 'Property Type: <span>' . $rws['house_type']; ?></span></h4>
                </div>
                <div class="price-gd-bottom ">
                    <div class="price-list ">
                        <ul>
                            <li><i class="fa fa-star " aria-hidden="true "></i></li>
                            <li><i class="fa fa-star " aria-hidden="true "></i></li>
                            <li><i class="fa fa-star " aria-hidden="true "></i></li>
                            <li><i class="fa fa-star " aria-hidden="true "></i></li>
                            <li><i class="fa fa-star-o " aria-hidden="true "></i></li>

                        </ul>
                    </div>
                    <div class="price-selet ">
                        <h3><span style="font-size:15px;"><?php echo 'Location: <span style="font-size:15px;">' . $rws['location']; ?></span> <?php echo '' . $rws['rent_cost']; ?></h3>
                    </div>
                    <div class="price-selet ">
                        <h3 style="font-size:15px; text-align: center;"><?php echo $rws['location_description']; ?></h2>
                    </div>
                    <div class="price-selet ">
                        <a href="book.php?id=<?php echo $rws['house_id']; ?> ">Book Now</a>
                    </div>
                </div>
            </div>
            </li>



            <div class="clearfix "> </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    </div>
    </div>
<?php
                }
?>


<!--/footer -->
<!-- js -->
<script type="text/javascript " src="js/jquery-2.1.4.min.js "></script>
<!-- contact form -->
<script src="js/jqBootstrapValidation.js "></script>

<!-- /contact form -->
<!-- Calendar -->
<script src="js/jquery-ui.js "></script>
<script>
    $(function() {
        $("#datepicker,#datepicker1,#datepicker2,#datepicker3 ").datepicker();
    });
</script>
<!-- //Calendar -->
<!-- gallery popup -->
<link rel="stylesheet " href="css/swipebox.css ">
<script src="js/jquery.swipebox.min.js "></script>
<script type="text/javascript ">
    jQuery(function($) {
        $(".swipebox ").swipebox();
    });
</script>
<!-- //gallery popup -->
<!-- start-smoth-scrolling -->
<script type="text/javascript " src="js/move-top.js "></script>
<script type="text/javascript " src="js/easing.js "></script>
<script type="text/javascript ">
    jQuery(document).ready(function($) {
        $(".scroll ").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- flexSlider -->
<script defer src="js/jquery.flexslider.js "></script>
<script type="text/javascript ">
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide ",
            start: function(slider) {
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- //flexSlider -->
<script src="js/responsiveslides.min.js "></script>
<script>
    // You can also use "$(window).load(function() { "
    $(function() {
                // Slideshow 4
                $("#slider4 ").responsiveSlides({
                            auto: true,
                            pager: true,
                            nav: false,
                            speed: 500,
                            namespace: "callbacks ",
                            before: function() {
                                $('.events').append("<li>before event fired.</li>");
                            },
                            after: function() {
                                    $('.events').append(" <
                                            li > after event fired. <
                                            /li>"); } }); });
</script>
<!--search-bar-->
<script src="js/main.js"></script>
<!--//search-bar-->
<!--tabs-->
<script src="js/easy-responsive-tabs.js"></script>
<script>
    $(document).ready(function() {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<!--//tabs-->
<!-- smooth scrolling -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
        	var defaults = {
        	containerID: 'toTop', // fading element id
        	containerHoverID: 'toTopHover', // fading element hover id
        	scrollSpeed: 1200,
        	easingType: 'linear'
        	};
        */
        $().UItoTop({
            easingType: 'easeOutQuart'
        });
    });
</script>

<div class="arr-w3ls">
    <a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>

</html>