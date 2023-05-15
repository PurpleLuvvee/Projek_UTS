<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--bootstrap 5 css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="css/style_navbar.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- custom js file link  -->
    <script src="js/card.js" defer></script>
    <!-- link font -->
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@700&display=swap" rel="stylesheet">

    <style type="text/css">
    a {
        font-family: 'Unbounded', cursive;
    }
    </style>

</head>

<body>
    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent">
        <div class="container">
            <div class="icon">
                <a class="navbar-brand fw-bold" href="index.php"><i></i>BRAVE</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="review.php">Review</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="card.php">All Products</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="navbar-extra">
            <a href="#" id="search"><i data-feather="search"></i></a>
        </div>
    </nav>

    <!-- card -->
    <div class="container">

        <h3 class="title"> All Products </h3>

        <div class="products-container">

            <div class="product" data-name="p-1">
                <img src="images/card/honda1.png" alt="">
                <h3>Honda CBR150R</h3>
                <div class="price">Rp.35.000.000</div>
            </div>

            <div class="product" data-name="p-2">
                <img src="images/card/yamaha1.png" alt="">
                <h3>Yamaha Nmax</h3>
                <div class="price">Rp.28.999.999</div>
            </div>

            <div class="product" data-name="p-3">
                <img src="images/card/suzuki1.png" alt="">
                <h3>Suzuki GSX R150</h3>
                <div class="price">Rp.32.500.999</div>
            </div>

            <div class="product" data-name="p-4">
                <img src="images/card/honda2.png" alt="">
                <h3>Honda Beat</h3>
                <div class="price">Rp.18.250.000</div>
            </div>

            <div class="product" data-name="p-5">
                <img src="images/card/yamaha2.png" alt="">
                <h3>Yamaha Aerox Connected</h3>
                <div class="price">Rp.25.199.999</div>
            </div>

            <div class="product" data-name="p-6">
                <img src="images/card/suzuki2.png" alt="">
                <h3>Suzuki GSX S150</h3>
                <div class="price">Rp.28.500.000</div>
            </div>

        </div>

    </div>

    <div class="products-preview">

        <div class="preview" data-target="p-1">
            <i class="fas fa-times"></i>
            <img src="images/card/honda1.png" alt="">
            <h3>Honda CBR150R</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>( 250 )</span>
            </div>
            <p>Motor bertipe manual dengan CC 150.</p>
            <div class="price">Rp.35.000.000</div>
            <div class="buttons">
                <a href="#" class="buy">buy now</a>
                <a href="#" class="cart">add to cart</a>
            </div>
        </div>

        <div class="preview" data-target="p-2">
            <i class="fas fa-times"></i>
            <img src="images/card/yamaha1.png" alt="">
            <h3>Yamaha Nmax</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>( 250 )</span>
            </div>
            <p>Motor bertipe matic dengan CC 150.</p>
            <div class="price">Rp.28.999.999</div>
            <div class="buttons">
                <a href="#" class="buy">buy now</a>
                <a href="#" class="cart">add to cart</a>
            </div>
        </div>

        <div class="preview" data-target="p-3">
            <i class="fas fa-times"></i>
            <img src="images/card/suzuki1.png" alt="">
            <h3>Suzuki GSX R150</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>( 250 )</span>
            </div>
            <p>Motor bertipe manual dengan CC 147.</p>
            <div class="price">Rp.32.500.999</div>
            <div class="buttons">
                <a href="#" class="buy">buy now</a>
                <a href="#" class="cart">add to cart</a>
            </div>
        </div>

        <div class="preview" data-target="p-4">
            <i class="fas fa-times"></i>
            <img src="images/card/honda2.png" alt="">
            <h3>Honda Beat</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>( 250 )</span>
            </div>
            <p>Motor bertipe matic dengan CC 110.</p>
            <div class="price">Rp.18.250.000</div>
            <div class="buttons">
                <a href="#" class="buy">buy now</a>
                <a href="#" class="cart">add to cart</a>
            </div>
        </div>

        <div class="preview" data-target="p-5">
            <i class="fas fa-times"></i>
            <img src="images/card/yamaha2.png" alt="">
            <h3>Yamaha Aerox Connected</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>( 250 )</span>
            </div>
            <p>Motor bertipe matic dengan CC 155.</p>
            <div class="price">Rp.25.199.999</div>
            <div class="buttons">
                <a href="#" class="buy">buy now</a>
                <a href="#" class="cart">add to cart</a>
            </div>
        </div>

        <div class="preview" data-target="p-6">
            <i class="fas fa-times"></i>
            <img src="images/card/suzuki2.png" alt="">
            <h3>Suzuki GSX S150</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>( 250 )</span>
            </div>
            <p>Motor bertipe manual dengan CC 150.</p>
            <div class="price">Rp.28.500.000</div>
            <div class="buttons">
                <a href="#" class="buy">buy now</a>
                <a href="#" class="cart">add to cart</a>
            </div>
        </div>

    </div>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">
                Copyright &copy; BRAVE 2023
            </p>
        </div>
    </footer>
</body>

</html>