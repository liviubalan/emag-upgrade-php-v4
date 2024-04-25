<?php
$mysqli = new mysqli("sql309.infinityfree.com", "if0_34880724", "LMlkHEAV1yf72", "if0_34880724_db_exotic_shop");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

// Check if product ID is provided in the URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $productId = $_GET['id'];

    // Fetch product details from the database
    $sql = "SELECT * FROM animals WHERE id = $productId";
    $result = $mysqli->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $description = $row['description'];
        $price = $row['price'];
        $image = $row['image']; // Add image field
        // Add more fields if needed
    } else {
        echo "Product not found";
        exit();
    }
} else {
    echo "Invalid product ID";
    exit();
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo htmlspecialchars($name); ?> - Exotic Emporium</title>
        <!-- Include Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            body {
                min-height: 100vh;
                display: flex;
                flex-direction: column;
            }

            .content {
                flex: 1;
                display: flex;
                justify-content: center;
                align-items: center; /* Align items to the center */
            }

            .navbar-dark .navbar-nav .nav-link {
                color: white;
            }

            .navbar-dark .navbar-brand {
                color: white;
            }

            .navbar-dark .navbar-toggler-icon {
                background-color: white;
            }

            .bg-black {
                background-color: black !important;
            }

            .footer {
                color: white;
            }

            /* Style for the image box */
            .image-box {
                width: 400px;
                height: 450px;
                margin-right: 20px;
                flex-shrink: 0; /* Prevent the image box from shrinking */
            }

            .image-box img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            /* Custom button style */
            .custom-button {
                width: 100%;
                max-width: 200px;
                margin-top: 20px;
                background-color: black;
                color: white;
                border: none;
            }

            /* Description box */
            .description-box {
                flex-grow: 1; /* Allow the description box to grow */
                margin-top: 20px;
            }

            .description {
                margin-top: 0;
            }
            
            h1 {
                margin-left: 0;
            }

            @media (max-width: 576px) {
                .image-box {
                    width: 100%;
                    margin-right: 0;
                }

                .description-box {
                    width: 100%; /* Reset width for smaller screens */
                }

                h1 {
                    margin-left: 0;
                }
            }

            /* Center the Exotic Emporium text */
            .navbar-text.exotic-text {
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
                color: white;
                font-size: 30px;
            }
        </style>
    </head>

    <body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container-fluid">
            <!-- Navbar content -->
            <a class="navbar-brand" href="index.php">Home</a>
            <span class="navbar-text exotic-text">Exotic Emporium</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <form class="d-flex">
                            <button id="cartButton" class="btn btn-outline-light" type="submit"
                                    onmouseover="this.style.color='black'; this.style.borderColor='black'; this.style.backgroundColor='white'; document.querySelector('.bi-cart-fill').classList.remove('text-white');"
                                    onmouseout="this.style.color='white'; this.style.borderColor='white'; this.style.backgroundColor='transparent'; document.querySelector('.bi-cart-fill').classList.add('text-white');">
                                <i class="bi bi-cart-fill me-1 text-white"></i>
                                Cosul meu
                                <span id="cartCounter" class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5 content">
        <div class="product-details d-flex justify-content-center align-items-start"> <!-- Centered content -->
            <div class="image-box">
                <!-- Display product image -->
                <img src="<?php echo htmlspecialchars($image); ?>" alt="Product Image" class="img-fluid">
            </div>
            <div class="description-box">
                <h1><?php echo htmlspecialchars($name); ?></h1>
                <p><strong>Price:</strong> <?php echo htmlspecialchars($price); ?></p>
                <p class="description"><strong>Description:</strong><br><?php echo htmlspecialchars($description); ?></p>
                <div class="text-center">
                    <a class="btn btn-outline-dark custom-button" href="#" onclick="addToCart()">Adaugă în Coș</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer bg-black text-center mt-auto">
        <div class="container">
            <span class="text-muted">&copy; 2024 Exotic Emporium</span>
        </div>
    </footer>

    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Add to cart script -->
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