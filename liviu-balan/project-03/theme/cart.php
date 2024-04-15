<?php
session_start();
if (count($_POST) > 0) {
  if ($_POST['cart_button'] == 'Add To Cart') {
    $_SESSION['cart'][$_POST['cart_product_id']] = [
      'id' => $_POST['cart_product_id'],
      'quantity' => $_POST['product-quantity'],
    ];
  }
}
//var_dump($_SESSION);
include "include/header.php";
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




<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Cos de cumparaturi</h1>
					<ol class="breadcrumb">
						<li><a href="index.php">Acasa</a></li>
						<li class="active">Cos de cumparaturi</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>



<div class="page-wrapper">
  <div class="cart shopping">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="block">
            <div class="product-list">
              <form method="post">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="">Item Name</th>
                      <th class="">Item Price</th>
                      <th class="">Quantity</th>
                      <th class="">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  if (isset($_SESSION['cart'])) {
                    $product_ids = array_keys($_SESSION['cart']);
                    $product_ids = implode(', ', $product_ids);
                    $sql_modal = "SELECT * FROM products WHERE id IN (".$product_ids.")";
                    $result_modal = $mysqli->query($sql_modal);
                    while ($row_product = $result_modal->fetch_array(MYSQLI_ASSOC)) {
                      $image = "/liviu-balan/project-03/theme/images/shop/products/" . $row_product["image"];
                    ?>
                      <tr class="">
                        <td class="">
                          <div class="product-info">
                            <img width="80" src="<?= $image ?>" alt="" />
                            <a href="product-single.php?product_id=<?= $row_product['id'] ?>"><?= $row_product['name'] ?></a>
                          </div>
                        </td>
                        <td class=""><?= $row_product['price'] ?> RON</td>
                        <td class=""><?= $_SESSION['cart'][$row_product["id"]]['quantity'] ?></td>
                        <td class="">
                          <a class="product-remove" href="#!">Remove</a>
                        </td>
                      </tr>
                    <?php }
                  } else { ?>
                    No products in cart.
                  <?php } ?>
                  </tbody>
                </table>
                <a href="checkout.php" class="btn btn-main pull-right">Checkout</a>
              </form>
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
