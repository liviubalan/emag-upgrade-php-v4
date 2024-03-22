<footer class="footer section text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="social-media">
          <li>
            <a href="https://www.facebook.com/themefisher">
              <i class="tf-ion-social-facebook"></i>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/themefisher">
              <i class="tf-ion-social-instagram"></i>
            </a>
          </li>
          <li>
            <a href="https://www.twitter.com/themefisher">
              <i class="tf-ion-social-twitter"></i>
            </a>
          </li>
          <li>
            <a href="https://www.pinterest.com/themefisher/">
              <i class="tf-ion-social-pinterest"></i>
            </a>
          </li>
        </ul>
        <ul class="footer-menu text-uppercase">
          <?php
          $sql = "SELECT * FROM meniul_de_jos ORDER BY ord";
          $result = $mysqli->query($sql);

          // Associative array
          while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $link = $row['link'];
            $name = $row['name'];
            echo '<li><a href="' . $link . '">' . $name . '</a></li>' . "\n";
          }
          /*
          ?>
					<li>
						<a href="contact.php">CONTACT</a>
					</li>
          <li>
						<a href="alerts.php">PRIVACY POLICY</a>
					</li>
          <?php */ ?>
        </ul>
        <p class="copyright-text">Copyright &copy;2021, Designed &amp; Developed by <a href="https://themefisher.com/">Themefisher</a></p>
      </div>
    </div>
  </div>
</footer>

<!--
Essential Scripts
=====================================-->

<!-- Main jQuery -->
<script src="plugins/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.1 -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- Bootstrap Touchpin -->
<script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
<!-- Instagram Feed Js -->
<script src="plugins/instafeed/instafeed.min.js"></script>
<!-- Video Lightbox Plugin -->
<script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
<!-- Count Down Js -->
<script src="plugins/syo-timer/build/jquery.syotimer.min.js"></script>

<!-- slick Carousel -->
<script src="plugins/slick/slick.min.js"></script>
<script src="plugins/slick/slick-animation.min.js"></script>

<!-- Google Mapl -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script type="text/javascript" src="plugins/google-map/gmap.js"></script>

<!-- Main Js File -->
<script src="js/script.js"></script>



</body>
</html>
<?php
// Free result set
$result -> free_result();

$mysqli -> close();
?>
