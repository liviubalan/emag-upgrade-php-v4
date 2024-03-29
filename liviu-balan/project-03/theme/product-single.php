<?php
include "include/header.php";

$sql_modal = "SELECT * FROM products WHERE id=".$_GET['product_id'];
$result_modal = $mysqli->query($sql_modal);
$row_product = $result_modal->fetch_array(MYSQLI_ASSOC);
?>



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

					<!-- Home -->
					<li class="dropdown ">
						<a href="index.html">Home</a>
					</li><!-- / Home -->


					<!-- Elements -->
					<li class="dropdown dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
							role="button" aria-haspopup="true" aria-expanded="false">Shop <span
								class="tf-ion-ios-arrow-down"></span></a>
						<div class="dropdown-menu">
							<div class="row">

								<!-- Basic -->
								<div class="col-lg-6 col-md-6 mb-sm-3">
									<ul>
										<li class="dropdown-header">Pages</li>
										<li role="separator" class="divider"></li>
										<li><a href="shop.html">Shop</a></li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="cart.html">Cart</a></li>
										<li><a href="pricing.html">Pricing</a></li>
										<li><a href="confirmation.html">Confirmation</a></li>

									</ul>
								</div>

								<!-- Layout -->
								<div class="col-lg-6 col-md-6 mb-sm-3">
									<ul>
										<li class="dropdown-header">Layout</li>
										<li role="separator" class="divider"></li>
										<li><a href="product-single.html">Product Details</a></li>
										<li><a href="shop-sidebar.html">Shop With Sidebar</a></li>

									</ul>
								</div>

							</div><!-- / .row -->
						</div><!-- / .dropdown-menu -->
					</li><!-- / Elements -->


					<!-- Pages -->
					<li class="dropdown full-width dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
							role="button" aria-haspopup="true" aria-expanded="false">Pages <span
								class="tf-ion-ios-arrow-down"></span></a>
						<div class="dropdown-menu">
							<div class="row">

								<!-- Introduction -->
								<div class="col-sm-3 col-xs-12">
									<ul>
										<li class="dropdown-header">Introduction</li>
										<li role="separator" class="divider"></li>
										<li><a href="contact.html">Contact Us</a></li>
										<li><a href="about.html">About Us</a></li>
										<li><a href="404.html">404 Page</a></li>
										<li><a href="coming-soon.html">Coming Soon</a></li>
										<li><a href="faq.html">FAQ</a></li>
									</ul>
								</div>

								<!-- Contact -->
								<div class="col-sm-3 col-xs-12">
									<ul>
										<li class="dropdown-header">Dashboard</li>
										<li role="separator" class="divider"></li>
										<li><a href="dashboard.html">User Interface</a></li>
										<li><a href="order.html">Orders</a></li>
										<li><a href="address.html">Address</a></li>
										<li><a href="profile-details.html">Profile Details</a></li>
									</ul>
								</div>

								<!-- Utility -->
								<div class="col-sm-3 col-xs-12">
									<ul>
										<li class="dropdown-header">Utility</li>
										<li role="separator" class="divider"></li>
										<li><a href="login.html">Login Page</a></li>
										<li><a href="signin.html">Signin Page</a></li>
										<li><a href="forget-password.html">Forget Password</a></li>
									</ul>
								</div>

								<!-- Mega Menu -->
								<div class="col-sm-3 col-xs-12">
									<a href="shop.html">
										<img class="img-responsive" src="images/shop/header-img.jpg" alt="menu image" />
									</a>
								</div>
							</div><!-- / .row -->
						</div><!-- / .dropdown-menu -->
					</li><!-- / Pages -->



					<!-- Blog -->
					<li class="dropdown dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
							role="button" aria-haspopup="true" aria-expanded="false">Blog <span
								class="tf-ion-ios-arrow-down"></span></a>
						<ul class="dropdown-menu">
							<li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
							<li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
							<li><a href="blog-full-width.html">Blog Full Width</a></li>
							<li><a href="blog-grid.html">Blog 2 Columns</a></li>
							<li><a href="blog-single.html">Blog Single</a></li>
						</ul>
					</li><!-- / Blog -->

					<!-- Shop -->
					<li class="dropdown dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
							role="button" aria-haspopup="true" aria-expanded="false">Elements <span
								class="tf-ion-ios-arrow-down"></span></a>
						<ul class="dropdown-menu">
							<li><a href="typography.html">Typography</a></li>
							<li><a href="buttons.html">Buttons</a></li>
							<li><a href="alerts.html">Alerts</a></li>
						</ul>
					</li><!-- / Blog -->
				</ul><!-- / .nav .navbar-nav -->

			</div>
			<!--/.navbar-collapse -->
		</div><!-- / .container -->
	</nav>
</section>
<section class="single-product">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li><a href="shop.html">Shop</a></li>
					<li class="active">Single Product</li>
				</ol>
			</div>
			<div class="col-md-6">
				<ol class="product-pagination text-right">
					<li><a href="blog-left-sidebar.html"><i class="tf-ion-ios-arrow-left"></i> Next </a></li>
					<li><a href="blog-left-sidebar.html">Preview <i class="tf-ion-ios-arrow-right"></i></a></li>
				</ol>
			</div>
		</div>
		<div class="row mt-20">
			<div class="col-md-5">
				<div class="single-product-slider">
					<div id='carousel-custom' class='carousel slide' data-ride='carousel'>
						<div class='carousel-outer'>
							<!-- me art lab slider -->
							<div class='carousel-inner '>
								<div class='item active'>
                  <?php
                  $image = "/liviu-balan/project-03/theme/images/shop/products/" . $row_product["image"];
                  ?>
									<img src='<?=$image;?>' alt='' data-zoom-image="<?=$image;?>" />
								</div>
								<div class='item'>
									<img src='images/shop/single-products/product-2.jpg' alt='' data-zoom-image="images/shop/single-products/product-2.jpg" />
								</div>

								<div class='item'>
									<img src='images/shop/single-products/product-3.jpg' alt='' data-zoom-image="images/shop/single-products/product-3.jpg" />
								</div>
								<div class='item'>
									<img src='images/shop/single-products/product-4.jpg' alt='' data-zoom-image="images/shop/single-products/product-4.jpg" />
								</div>
								<div class='item'>
									<img src='images/shop/single-products/product-5.jpg' alt='' data-zoom-image="images/shop/single-products/product-5.jpg" />
								</div>
								<div class='item'>
									<img src='images/shop/single-products/product-6.jpg' alt='' data-zoom-image="images/shop/single-products/product-6.jpg" />
								</div>

							</div>

							<!-- sag sol -->
							<a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
								<i class="tf-ion-ios-arrow-left"></i>
							</a>
							<a class='right carousel-control' href='#carousel-custom' data-slide='next'>
								<i class="tf-ion-ios-arrow-right"></i>
							</a>
						</div>

						<!-- thumb -->
						<ol class='carousel-indicators mCustomScrollbar meartlab'>
							<li data-target='#carousel-custom' data-slide-to='0' class='active'>
								<img src='<?=$image;?>' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='1'>
								<img src='images/shop/single-products/product-2.jpg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='2'>
								<img src='images/shop/single-products/product-3.jpg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='3'>
								<img src='images/shop/single-products/product-4.jpg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='4'>
								<img src='images/shop/single-products/product-5.jpg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='5'>
								<img src='images/shop/single-products/product-6.jpg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='6'>
								<img src='images/shop/single-products/product-7.jpg' alt='' />
							</li>
						</ol>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="single-product-details">
					<h2><?=$row_product['name'];?></h2>
					<p class="product-price">$300</p>

					<p class="product-description mt-20">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum ipsum dicta quod, quia doloremque aut deserunt commodi quis. Totam a consequatur beatae nostrum, earum consequuntur? Eveniet consequatur ipsum dicta recusandae.
					</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, velit, sunt temporibus, nulla accusamus similique sapiente tempora, at atque cumque assumenda minus asperiores est esse sequi dolore magnam. Debitis, explicabo.</p>
					<div class="color-swatches">
						<span>color:</span>
						<ul>
							<li>
								<a href="#!" class="swatch-violet"></a>
							</li>
							<li>
								<a href="#!" class="swatch-black"></a>
							</li>
							<li>
								<a href="#!" class="swatch-cream"></a>
							</li>
						</ul>
					</div>
					<div class="product-size">
						<span>Size:</span>
						<select class="form-control">
							<option>S</option>
							<option>M</option>
							<option>L</option>
							<option>XL</option>
						</select>
					</div>
					<div class="product-quantity">
						<span>Quantity:</span>
						<div class="product-quantity-slider">
							<input id="product-quantity" type="text" value="0" name="product-quantity">
						</div>
					</div>
					<div class="product-category">
						<span>Stock:</span>
						<ul>
              <li><?=$row_product['stock'];?></li>
						</ul>
					</div>
          <?php if ($row_product['stock'] > 0) { ?>
	  				<button href="cart.html" class="btn btn-main mt-20">Add To Cart</button>
          <?php } else { ?>
            <span>Out of stock</span>
          <?php } ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="tabCommon mt-20">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#details" aria-expanded="true">Details</a></li>
						<li class=""><a data-toggle="tab" href="#reviews" aria-expanded="false">Reviews (3)</a></li>
					</ul>
					<div class="tab-content patternbg">
						<div id="details" class="tab-pane fade active in">
							<h4>Product Description</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut per spici</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis delectus quidem repudiandae veniam distinctio repellendus magni pariatur molestiae asperiores animi, eos quod iusto hic doloremque iste a, nisi iure at unde molestias enim fugit, nulla voluptatibus. Deserunt voluptate tempora aut illum harum, deleniti laborum animi neque, praesentium explicabo, debitis ipsa?</p>
						</div>
						<div id="reviews" class="tab-pane fade">
							<div class="post-comments">
						    	<ul class="media-list comments-list m-bot-50 clearlist">
								    <!-- Comment Item start-->
								    <li class="media">

								        <a class="pull-left" href="#!">
								            <img class="media-object comment-avatar" src="images/blog/avater-1.jpg" alt="" width="50" height="50" />
								        </a>

								        <div class="media-body">
								            <div class="comment-info">
								                <h4 class="comment-author">
								                    <a href="#!">Jonathon Andrew</a>

								                </h4>
								                <time datetime="2013-04-06T13:53">July 02, 2015, at 11:34</time>
								                <a class="comment-button" href="#!"><i class="tf-ion-chatbubbles"></i>Reply</a>
								            </div>

								            <p>
								                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod laborum minima, reprehenderit laboriosam officiis praesentium? Impedit minus provident assumenda quae.
								            </p>
								        </div>

								    </li>
								    <!-- End Comment Item -->

								    <!-- Comment Item start-->
								    <li class="media">

								        <a class="pull-left" href="#!">
								            <img class="media-object comment-avatar" src="images/blog/avater-4.jpg" alt="" width="50" height="50" />
								        </a>

								        <div class="media-body">

								            <div class="comment-info">
								                <div class="comment-author">
								                    <a href="#!">Jonathon Andrew</a>
								                </div>
								                <time datetime="2013-04-06T13:53">July 02, 2015, at 11:34</time>
								                <a class="comment-button" href="#!"><i class="tf-ion-chatbubbles"></i>Reply</a>
								            </div>

								            <p>
								                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni natus, nostrum iste non delectus atque ab a accusantium optio, dolor!
								            </p>

								        </div>

								    </li>
								    <!-- End Comment Item -->

								    <!-- Comment Item start-->
								    <li class="media">

								        <a class="pull-left" href="#!">
								            <img class="media-object comment-avatar" src="images/blog/avater-1.jpg" alt="" width="50" height="50">
								        </a>

								        <div class="media-body">

								            <div class="comment-info">
								                <div class="comment-author">
								                    <a href="#!">Jonathon Andrew</a>
								                </div>
								                <time datetime="2013-04-06T13:53">July 02, 2015, at 11:34</time>
								                <a class="comment-button" href="#!"><i class="tf-ion-chatbubbles"></i>Reply</a>
								            </div>

								            <p>
								                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.
								            </p>

								        </div>

								    </li>
							</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="products related-products section">
  <?php
  $sql_modal = "SELECT *
                FROM products
                WHERE `type`=" . $row_product['type'] . " AND `id`!=" . $row_product['id'];
  $result_modal = $mysqli->query($sql_modal);
  ?>
	<div class="container">
		<div class="row">
			<div class="title text-center">
				<h2>Related Products</h2>
			</div>
		</div>
		<div class="row">
      <?php while ($row_related_product = $result_modal->fetch_array(MYSQLI_ASSOC)) { ?>
  			<div class="col-md-3">
				<div class="product-item">
					<div class="product-thumb">
						<span class="bage">Sale</span>
						<img class="img-responsive" src="images/shop/products/product-5.jpg" alt="product-img" />
						<div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search"></i>
									</span>
								</li>
								<li>
			                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.html"><?=$row_related_product['name'];?></a></h4>
						<p class="price"><?=$row_related_product['price'];?> RON</p>
					</div>
				</div>
			</div>
      <?php } ?>
		</div>
	</div>
</section>



<!-- Modal -->
<div class="modal product-modal fade" id="product-modal">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<i class="tf-ion-close"></i>
	</button>
  	<div class="modal-dialog " role="document">
    	<div class="modal-content">
	      	<div class="modal-body">
	        	<div class="row">
	        		<div class="col-md-8">
	        			<div class="modal-image">
		        			<img class="img-responsive" src="images/shop/products/modal-product.jpg" />
	        			</div>
	        		</div>
	        		<div class="col-md-3">
	        			<div class="product-short-details">
	        				<h2 class="product-title">GM Pendant, Basalt Grey</h2>
	        				<p class="product-price">$200</p>
	        				<p class="product-short-description">
	        					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem iusto nihil cum. Illo laborum numquam rem aut officia dicta cumque.
	        				</p>
	        				<a href="#!" class="btn btn-main">Add To Cart</a>
	        				<a href="#!" class="btn btn-transparent">View Product Details</a>
	        			</div>
	        		</div>
	        	</div>
	        </div>
    	</div>
  	</div>
</div>

<?php
include "include/footer.php";
?>

