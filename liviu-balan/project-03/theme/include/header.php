
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

?>
<?php
$mysqli = new mysqli("sql211.infinityfree.com","if0_36160780","Kjzyx0P5miS","if0_36160780_db");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>
<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
<head>
  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Glamour Concept</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">

  <!-- theme meta -->
  <meta name="theme-name" content="aviato" />

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">

  <!-- Animate css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>
<link href="https://fonts.cdnfonts.com/css/glamour" rel="stylesheet">

<body id="body">

<!-- Start Top Header Bar -->
<section class="top-header">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-xs-12 col-sm-4">
        <div class="contact-number">
          <i class="tf-ion-ios-telephone"></i>
          <span>0756 87 92 02</span>
        </div>
      </div>
      <div class="col-md-4 col-xs-12 col-sm-4">
        <!-- Site Logo -->
        <div class="logo text-center">
          <a href="index.html">
            <!-- replace logo here -->
            <svg width="270px" height="58px" viewBox="0 0 155 29" version="1.1" xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink">
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-size="40"
                 font-family="Glamour", sans-serif;font-weight="400">
                <g id="Group" transform="translate(-108.000000, -297.000000)" fill="#000000">
                  <text id="GlamourConcept">
                    <tspan x="108.94" y="325">Glamour Concept</tspan>
                  </text>
                </g>
              </g>
            </svg>
          </a>
        </div>
      </div>
      <div class="col-md-4 col-xs-12 col-sm-4">
        <!-- Cart -->
        <ul class="top-menu text-right list-inline">
          <li class="dropdown cart-nav dropdown-slide">
            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
                class="tf-ion-android-cart"></i>Cart</a>
            <div class="dropdown-menu cart-dropdown">
              <!-- Cart Item -->
              <div class="media">
                <a class="pull-left" href="#!">
                  <img class="media-object" src="images/shop/cart/cart-1.jpg" alt="image" />
                </a>
                <div class="media-body">
                  <h4 class="media-heading"><a href="#!">Ladies Bag</a></h4>
                  <div class="cart-price">
                    <span>1 x</span>
                    <span>1250.00</span>
                  </div>
                  <h5><strong>$1200</strong></h5>
                </div>
                <a href="#!" class="remove"><i class="tf-ion-close"></i></a>
              </div><!-- / Cart Item -->
              <!-- Cart Item -->
              <div class="media">
                <a class="pull-left" href="#!">
                  <img class="media-object" src="images/shop/cart/cart-2.jpg" alt="image" />
                </a>
                <div class="media-body">
                  <h4 class="media-heading"><a href="#!">Ladies Bag</a></h4>
                  <div class="cart-price">
                    <span>1 x</span>
                    <span>1250.00</span>
                  </div>
                  <h5><strong>$1200</strong></h5>
                </div>
                <a href="#!" class="remove"><i class="tf-ion-close"></i></a>
              </div><!-- / Cart Item -->

              <div class="cart-summary">
                <span>Total</span>
                <span class="total-price">$1799.00</span>
              </div>
              <ul class="text-center cart-buttons">
                <li><a href="cart.html" class="btn btn-small">View Cart</a></li>
                <li><a href="checkout.html" class="btn btn-small btn-solid-border">Checkout</a></li>
              </ul>
            </div>

          </li><!-- / Cart -->

          <!-- Search -->
          <li class="dropdown search dropdown-slide">
            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
                class="tf-ion-ios-search-strong"></i> Search</a>
            <ul class="dropdown-menu search-dropdown">
              <li>
                <form action="post"><input type="search" class="form-control" placeholder="Search..."></form>
              </li>
            </ul>
          </li><!-- / Search -->

          <!-- Languages -->
          <li class="commonSelect">
            <select class="form-control">
              <option>EN</option>
              <option>DE</option>
              <option>FR</option>
              <option>ES</option>
            </select>
          </li><!-- / Languages -->

        </ul><!-- / .nav .navbar-nav .navbar-right -->
      </div>
    </div>
  </div>
</section><!-- End Top Header Bar -->


<!-- Main Menu Section -->
<section class="menu">
  <nav class="navbar navigation">
    <div class="container">
      <div class="navbar-header">
        <h2 class="menu-title">Main Menu</h2>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

      </div><!-- / .navbar-header -->

      <!-- Navbar Links -->
      <div id="navbar" class="navbar-collapse collapse text-center">
        <ul class="nav navbar-nav">
          <?php
          $sql = "SELECT * FROM menu ORDER BY ord";
          $result = $mysqli->query($sql);

          // Associative array
          while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $link = $row['link'];
            $name = $row['name'];
            echo '<li class="dropdown"><a href="' . $link . '">' . $name . '</a></li>' . "\n";
          }
          ?>
        </ul><!-- / .nav .navbar-nav -->

      </div>
      <!--/.navbar-collapse -->
    </div><!-- / .container -->
  </nav>
</section>

