<!DOCTYPE html>
<html lang="en">


<?php
// define variables and set to empty values
$customer_id = $PIN = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_id = test_input($_POST["customer_id"]);
    $PIN = test_input($_POST["PIN"]);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["customer_id"])) {
        $customerIdErr = "Contact Number is required";
    } else if (strlen($_POST["customer_id"]) > 10 || strlen($_POST["customer_id"]) < 10) {
        $customerIdErr = "Contact Number is 10 digits required";
    } else {
        $customer_id = test_input($_POST["customer_id"]);
    }

    if (empty($_POST["PIN"])) {
        $PINErr = "PIN is required";
    } else if (strlen($_POST["PIN"]) > 4 || strlen($_POST["PIN"]) < 4) {
        $PINErr = "PIN Number is 4 digits required";
    } else {
        $PIN = test_input($_POST["PIN"]);
    }

    if ($customer_id = "" || $PIN = "") {
        $err = "Login was unsuccessful";
    }else{
        $err = "Login was successful";
    }
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>

<head>
<?php include 'header.php';?>
<?php include 'error.php';?>
<?php include 'success.php';?>
</head>

<body>
  <!--==========================
  Header
  ============================-->
  <header id="header">

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><img src="img/logo.png" alt="" class="img-fluid"><a href="home.html" class="scrollto"><span>Melbourne Polytechnic Markets</span></a></h1>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="home.html">Home</a></li>
          <li><a href="sponsors.html">Sponsors</a></li>
          <li><a href="index.html">Register</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->
  <main id="main">
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
          <div class="col-lg-6">

            <div class="form">
              
              <h4>Enter your details</h4>
              <p><span class="error">* required field</span></p>
              <form action="" method="post" role="form" class="contactForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="form-group">
                  <input type="number" name="customer_id" class="form-control" id="customer_id" placeholder="Your Contact Number" data-rule="minlen:10" data-msg="Please enter 10 digit contact number" />
                  <div class="validation"></div><span class="error">* <?php echo $customerIdErr;?></span>
                </div>
                <div class="form-group">
                  <input type="number" class="form-control" name="PIN" id="PIN" placeholder="Your PIN" data-rule="minlen:4" data-msg="Please enter a valid 4 digit PIN" />
                  <div class="validation"></div><span class="error">* <?php echo $PINErr;?></span>
                </div>

                <div id="errormessage"></div>
                <div id="sendmessage">* <?php echo $err;?></div>
                <div class="text-center"><button type="submit1" style= "background: #1bb1dc;
                  border: 0;
                  border-radius: 3px;
                  padding: 8px 30px;
                  color: #fff;
                  transition: 0.3s;" title="Submit Details">Submit Details</button></div>
              </form>

          </div>
        </div>
  
        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="img/intro-img.svg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- #intro -->
  </main>

  <div><?php include 'footer.php';?></div>

  <a href="#" class="back-to-top"><em class="fa fa-chevron-up"></em></a>
  <!-- Uncomment below i you want to use a preloader -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/udithJavaScript.js"></script>

</body>
</html>
