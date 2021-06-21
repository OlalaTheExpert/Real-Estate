<?php
include('includes/config.php');
session_start();
if (!isset($_SESSION["email"])) {

  header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<?php
include('includes/config.php');
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
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="css/formstyle.css">
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <!--//fonts-->
</head>

<style>
  .home a {
    color: rgb(248, 32, 3);

  }

  .home a:hover {
    color: rgb(3, 19, 247);
  }

  .products {
    float: left;
  }
</style>

<?php
include('includes/config.php');
if (isset($_GET['id'])) {
  $house_id = $_REQUEST['id'];
  $sel = "SELECT * FROM properties WHERE house_id = $house_id";

  $rs = $conn->query($sel);
  $rws = $rs->fetch_assoc();
  $house_id = $rws['house_id'];
  $type = $rws['house_type'];
  $rent = $rws['rent_cost'];
  $capacity = $rws['max_capacity'];
  $location = $rws['location'];






?>

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

        <?php
        $email = $_SESSION['email'];

        $query = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
        $rows = $query -> fetch_assoc();

        $name = $rows['name'];
        $phone = $rows['phone'];


        ?>

          <li style="color:#430f53;">Welcome <span style="font-size: 15px; font-weight: bold; "><?php echo $name; ?> </span> <i class="fa fa-user" aria-hidden="true"></i></li>
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


            <h1 style="text-align:right;"><a class="navbar-brand" href="index.php" style=" margin-left: 0rem;">CYTONN <span>INVESTMENTS</span>
                <p class="logo_w3l_agile_caption">Delivering to promise</p>
              </a></h1>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            <nav class="menu menu--iris">
              <ul class="nav navbar-nav menu__list" style="text-align:left; margin-top:-2rem;">
                <li class="menu__item "><a href="user.php" class="menu__link"><i class="fa fa-reply" style="color: #14ff27;"></i> Back</a></li>
                <!-- <li class="menu__item"><a href="#about" class="menu__link scroll">About</a></li> -->
                <!-- <li class="menu__item"><a href="#gallery" class="menu__link scroll">Gallery</a></li> -->




              </ul>
            </nav>
          </div>
        </nav>

      </div>
    </div>
    </div>

    <!-- <section class="payment-form dark"> -->
    <section class="payment1-form dark">
      <div class="container">

        <div class="block-heading">
          <h2 style="color:#14ff27;font-size:18px;letter-spacing: 5px;text-transform: uppercase;font-family: 'Lato', sans-serif; font-weight: bold;">SECURE A PROPERTY WITH US NOW!</h2>
          <!-- <p>Secure a Room with us Now!</p> -->
        </div>

        <form method="POST" action="mail.php">
          <div class="col-md-6 col-sm-12">

            <!-- <div class="products"> -->
            <div class="products1" style="height:110vh;">
              <h3 class="title" style="padding-top:25px;">Property Details</h3>
              <div class="item">
                <span class="price"><input type="text" name="departure" value="" readonly class="form-control" style="background-color: transparent; border:0px;"></span>
                <p class="item-name">Type: <span class="float-right"><strong> <?php echo $type; ?></span> </strong></p>

              </div>
              <div class="item">
                <span class="price"><input type="text" name="departure" value="" readonly class="form-control" style="background-color: transparent; border:0px;"></span>
                <p class="item-name">Location: <span class="float-right"><strong> <?php echo $location; ?></span> </strong></p>

              </div>
              <div class="item">

                <div class="item">
                  <span class="price"><input type="text" name="departure" value="" readonly class="form-control" style="background-color: transparent; border:0px;"></span>
                  <p class="item-name">Capacity: <span class="float-right"><strong> <?php echo $capacity; ?></span> </strong> </p>

                </div>
                <div class="item">
                  <span class="price"><input type="text" name="departure" value="" readonly class="form-control" style="background-color: transparent; border:0px;"></span>
                  <p class="item-name">Price: <span class="float-right"><strong> <?php echo $rent; ?></span> </strong></p>
                </div>
                <div class="item">
                  <span class="price"><input type="text" name="departure" value="" readonly class="form-control" style="background-color: transparent; border:0px;"></span>
                  <p class="item-name">Landlord</p>

                </div>
                <div class="item">
                  <span class="price"><input type="text" name="departure" value="" readonly class="form-control" style="background-color: transparent; border:0px;"></span>
                  <p class="item-name">Contact</p>

                </div>
                <div class="item">
                  <span class="price"><input type="text" name="departure" value="" readonly class="form-control" style="background-color: transparent; border:0px;"></span>
                  <p class="item-name">Date: <span class="float-right"><strong> <?php echo date("Y/m/d"); ?></span> </strong></p>

                </div>
                <input type="text" value="<?php echo $id ?>" name="the_id" hidden style="display:none;">
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="products1" style="height:110vh;">
              <div class="card-details">
                <h3 class="title">Personal Details</h3>
                <div class="row" style="width:100%;">
     
                  <div class="form-group col-sm-12">
                    <div class="item">
                      <label for="card-holder">Full Name</label>
                      <input id="card-holder" type="text" class="form-control" value="<?php echo $name; ?>" name="fname" style="height:45px;" required>
                    </div>
                  </div>

                

                  <div class="form-group col-sm-12">
                    <div class="item">
                      <label for="">Email</label>
                      <div class="input-group expiration-date">
                        <input type="email" class="form-control" value="<?php echo $email; ?>" name="email" style="height:45px;" required>

                      </div>
                    </div>
                  </div>

                  <div class="form-group col-sm-12">
                    <div class="item">
                      <label for="cvc">Gender</label>
                      <select class="custom-select col-12" name="gender" style="height:45px;">
                        <option selected="" disabled>Choose gender</option>
                        <option>Male</option>
                        <option>Female</option>

                      </select>
                    </div>
                  </div>

                  <div class="form-group col-sm-12">
                    <div class="item">
                      <label for="">Phone Number</label>
                      <div class="input-group expiration-date">
                        <input type="number" class="form-control" value="<?php echo $phone; ?>" name="phone" style="height:45px;" required>

                      </div>
                    </div>
                  </div>
                  <?php } ?>

                  <div class="form-group col-sm-12">
                    <div class="item">
                      <button type="submit" name="submit" class="btn btn-primary btn-block" style="height:45px; background-color:#14ff27;text-shadow: 0px 1px 3px #454a47; font-size:20px;">BOOK NOW</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </form>
      </div>
    </section>
    </main>
    </div>

  </body>

<div class="copy ">
  <p>© 2020 CYTONN INVESTMENTS . All Rights Reserved | Design by <a href="index.php ">CYTONN INVESTMENTS</a> </p>
</div>
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



<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
<?php

?>