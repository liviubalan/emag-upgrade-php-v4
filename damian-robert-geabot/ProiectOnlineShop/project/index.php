<?php
$mysqli = new mysqli("sql309.infinityfree.com", "if0_34880724", "LMlkHEAV1yf72", "if0_34880724_db_exotic_shop");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"/>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet"/>
    </head>
    <body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">All Products</a></li>
                            <li><hr class="dropdown-divider"/></li>
                            <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                            <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <button id="cartButton" class="btn btn-outline-light" type="submit"
                            style="color: white; border-color: #ffffff; margin-left: auto;"
                            onmouseover="this.style.color='black'; this.style.borderColor='black'; this.style.backgroundColor='white'; document.querySelector('.bi-cart-fill').classList.remove('text-white');"
                            onmouseout="this.style.color='white'; this.style.borderColor='white'; this.style.backgroundColor='transparent'; document.querySelector('.bi-cart-fill').classList.add('text-white');">
                        <i class="bi bi-cart-fill me-1 text-white"></i>
                        Cosul meu
                        <span id="cartCounter" class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-white py-5">
        <div class="container-fluid px-0 py-5">
            <div class="row justify-content-center">
                <div class="col-12 text-center text-dark">
                    <h1 class="display-4 fw-bolder">Exotic Emporium</h1>
                    <p class="lead fw-normal text-dark-50 mb-5">"If we don't have it, it's probably extinct"</p>
                    <div style="position: relative; width: 100%; height: 350px; overflow: hidden;">
                        <img class="img-fluid"
                             src="https://cdn.wallpaperdirect.com/shared-assets/images/products/188082full.jpg"
                             alt="Image Description"
                             style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); min-width: 100%; min-height: 100%; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- anunt -->
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-10 text-center">
                <p class="lead fw-normal text-dark-50 mb-5 fs-3">Livarile de animale vii se fac doar in perioada Martie -
                    Septembrie, pentru a evita accidente sau temperaturi precare</p>
            </div>
        </div>
    </div>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                // Loop through each product from 1 to 8
                for ($i = 1; $i <= 8; $i++) {
                    // Query to fetch product details
                    $sql = "SELECT * FROM animals WHERE id = $i";
                    $result = $mysqli->query($sql);
                    if ($result && $result->num_rows > 0) {
                        // Fetch the row as an associative array
                        $row = $result->fetch_assoc();
                        // Echo the product card with onclick event
                        echo '<div class="col mb-5">
                            <div class="card h-100">
                                <!-- Sale badge-->
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Reducere</div>
                                <!-- Product image-->
                                <a href="product.php?id=' . $row['id'] . '"><img class="card-img-top" src="' . htmlspecialchars($row['image']) . '" alt="Product Image" /></a>
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">' . htmlspecialchars($row['name']) . '</h5>
                                        <!-- Product price-->
                                        <span class="text-muted text-decoration-line-through">' . htmlspecialchars($row['old_price']) . ' Lei</span>
                                        <p>' . htmlspecialchars($row['price']) . ' Lei</p>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#" onclick="addToCart()">Adaugă în Coș</a></div>
                                </div>
                            </div>
                        </div>';
                    } else {
                        echo '<div class="col mb-5">Product not found</div>';
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Project Website 2024</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- Add to cart !-->
    <script>
        function addToCart() {
            // Increment the counter value by 1
            var counter = document.getElementById('cartCounter');
            counter.innerText = parseInt(counter.innerText) + 1;
        }
    </script>
    </body>
    </html>
<?php
// Free result set
$result->free_result();
$mysqli->close();
?>