<?php
include "include/header.php";
?>

<div class="block">
  <div id="map_canvas" style="width: 1350px; height: 500px"></div>

  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script type="text/javascript"
          src="http://maps.google.com/maps/api/js?sensor=TRUEORFALSE"></script>
  <script type="text/javascript">
    var map;
    var markers;
    function initialize() {

      $
        .ajax({

          type : "POST",
          url : "Your Servlet Name", //Servlet Name
          data : $("#FormID"),

          success : function(responseJson) {


            var result = $.parseJSON(responseJson);
            markers = result;

            // Below mapOptions var includes styling maps and zoom level of your map, it also includes mapTypeId.
            var mapOptions = {
              center : new google.maps.LatLng(
                markers[0].latitude, markers[0].longitude),
              zoom : 5,
              scrollwheel: false,
              styles : [ {
                "featureType" : "administrative",
                "elementType" : "labels.text.fill",
                "stylers" : [ {
                  "color" : "#444444"
                } ]
              }, {
                "featureType" : "landscape",
                "elementType" : "all",
                "stylers" : [ {
                  "color" : "#f2f2f2"
                } ]
              }, {
                "featureType" : "poi",
                "elementType" : "all",
                "stylers" : [ {
                  "visibility" : "off"
                } ]
              }, {
                "featureType" : "poi.park",
                "elementType" : "geometry.fill",
                "stylers" : [ {
                  "visibility" : "on"
                }, {
                  "color" : "#1ba093"
                } ]
              }, {
                "featureType" : "road",
                "elementType" : "all",
                "stylers" : [ {
                  "saturation" : -100
                }, {
                  "lightness" : 45
                } ]
              }, {
                "featureType" : "road.highway",
                "elementType" : "all",
                "stylers" : [ {
                  "visibility" : "simplified"
                } ]
              }, {
                "featureType" : "road.arterial",
                "elementType" : "labels.icon",
                "stylers" : [ {
                  "visibility" : "off"
                } ]
              }, {
                "featureType" : "transit",
                "elementType" : "all",
                "stylers" : [ {
                  "visibility" : "off"
                } ]
              }, {
                "featureType" : "water",
                "elementType" : "all",
                "stylers" : [ {
                  "color" : "#00748c"
                }, {
                  "visibility" : "on"
                } ]
              } ],
              mapTypeId : google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document
              .getElementById("map_canvas"), mapOptions);
            addYourLocationButton(map,marker);
            //Create and open InfoWindow.
            var infoWindow = new google.maps.InfoWindow();

            for (var i = 0; i < markers.length; i++) {
              var data = markers[i];

              var myLatlng = new google.maps.LatLng(
                data.latitude, data.longitude);
              var marker = new google.maps.Marker({
                position : myLatlng,
                animation: google.maps.Animation.DROP,
                map : map,
                title : //Any title that you want to display while cursor over the marker.
              });

              //Click event
              (function(marker, data) {
                google.maps.event
                  .addListener(
                    marker,
                    "click",
                    function(e) {
                      infoWindow
                        .setContent("<div style = 'width:300px;min-height:50px'>+Write information about your location if you want.+"</div>");
                      infoWindow
                        .open(map, marker);
                    });
              })(marker, data);

            }

          }

        });

    }
  </script>
</div>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Contact Us</h1>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">contact</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>




<section class="page-wrapper">
	<div class="contact-section">
		<div class="container">
			<div class="row">
				<!-- Contact Form -->
				<div class="contact-form col-md-6 " >
					<form id="contact-form" method="post" action="" role="form">

						<div class="form-group">
							<input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
						</div>

						<div class="form-group">
							<input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
						</div>

						<div class="form-group">
							<input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
						</div>

						<div class="form-group">
							<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>
						</div>

						<div id="mail-success" class="success">
							Thank you. The Mailman is on His Way :)
						</div>

						<div id="mail-fail" class="error">
							Sorry, don't know what happened. Try later :(
						</div>

						<div id="cf-submit">
							<input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
						</div>

					</form>
				</div>
				<!-- ./End Contact Form -->

				<!-- Contact Details -->
				<div class="contact-details col-md-6 " >
					<div class="google-map">
						<div id="map"></div>
					</div>
					<ul class="contact-short-info" >
						<li>
							<i class="tf-ion-ios-home"></i>
							<span>Khaja Road, Bayzid, Chittagong, Bangladesh</span>
						</li>
						<li>
							<i class="tf-ion-android-phone-portrait"></i>
							<span>Phone: +880-31-000-000</span>
						</li>
						<li>
							<i class="tf-ion-android-globe"></i>
							<span>Fax: +880-31-000-000</span>
						</li>
						<li>
							<i class="tf-ion-android-mail"></i>
							<span>Email: hello@example.com</span>
						</li>
					</ul>
					<!-- Footer Social Links -->
					<div class="social-icon">
						<ul>
							<li><a class="fb-icon" href="https://www.facebook.com/themefisher"><i class="tf-ion-social-facebook"></i></a></li>
							<li><a href="https://www.twitter.com/themefisher"><i class="tf-ion-social-twitter"></i></a></li>
							<li><a href="https://themefisher.com/"><i class="tf-ion-social-dribbble-outline"></i></a></li>
							<li><a href="https://themefisher.com/"><i class="tf-ion-social-googleplus-outline"></i></a></li>
							<li><a href="https://themefisher.com/"><i class="tf-ion-social-pinterest-outline"></i></a></li>
						</ul>
					</div>
					<!--/. End Footer Social Links -->
				</div>
				<!-- / End Contact Details -->



			</div> <!-- end row -->
		</div> <!-- end container -->
	</div>
</section>

<?php
include "include/footer.php";
?>
