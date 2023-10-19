<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="manifest" href="manifest.json">
    <script>
      if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('service-worker.js')
          .then((registration) => {
            console.log('Service Worker registered with scope:', registration.scope);
          })
          .catch((error) => {
            console.error('Service Worker registration failed:', error);
          });
      }
    </script>    
    <meta name="theme-color" content="#fa903e">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?></title>
    <meta name="keyword" content="<?= $keyword ?>">
    <meta name="description" content="<?= $description ?>">

    <meta name="author" content="G Digital India">
    <link rel="icon" href="assets/images/favicon/7.png" type="image/png">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;family=Qwitcher+Grypen:wght@400;700&amp;display=swap" rel="stylesheet">


<!-- Country Code Selection -->
    <link rel="stylesheet" type="text/css" href="assets/css/intlTelInput.css" media="all">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css" media="all">

    <!-- wow css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css" media="all">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css" media="all">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css" media="all">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick/slick.css" media="all">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick/slick-theme.css" media="all">

    <!-- Iconly css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bulk-style.css" media="all">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css" media="all">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="assets/css/style.css" media="all">
    <link id="color-link" rel="stylesheet" type="text/css" href="assets/css/mystyle.css" media="all">

</head>

<body class="theme-color-5">

    <!-- Loader Start -->
    <div class="fullpage-loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!-- Loader End -->

    <!-- Header Start -->
    <header class="noPrint">
        <div class="header-top">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-md-9 col-sm-8">
                        <div class="header-offer">
                            <div class="notification-slider">
                                <div>
                                    <div class="timer-notification">
                                        <h6>Wrap new offers/gift every single day on Weekends.<strong class="ms-1">
                                            </strong>
                                        </h6>
                                    </div>
                                </div>

                                <div>
                                    <div class="timer-notification">
                                        <h6>Something you love is now on sale!</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="about-list right-nav-about">
                            <a class="topno" href="tel:+911234567890">
                                <i data-feather="phone"></i> +911234567890</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="top-nav top-header sticky-header">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-12">
                        <div class="navbar-top">
                            <button class="navbar-toggler d-xl-none d-inline navbar-menu-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
                                <span class="navbar-toggler-icon">
                                    <i class="fa-solid fa-bars"></i>
                                </span>
                            </button>
                            <a href="index.php" class="web-logo nav-logo">
                                <img src="assets/images/logo/1.png" class="img-fluid blur-up lazyload" alt=""  loading="lazy">
                            </a>

                            <div class="offcanvas offcanvas-collapse main-nav navbar navbar-expand-xl navbar-light navbar-sticky" id="primaryMenu">
                                <div class="offcanvas-header navbar-shadow">
                                    <h5>Menu</h5>
                                    <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link ps-xl-2 ps-0" href="index.php">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link ps-xl-2 ps-0" href="about-us.php">About Us</a>
                                        </li>
                                        <li class="nav-item dropdown dropdown-mega">
                                            <a class="nav-link dropdown-toggle ps-xl-2 ps-0" href="javascript:void(0)" data-bs-toggle="dropdown">Shop</a>
                                            <div class="dropdown-menu dropdown-menu-2">
                                                <div class="row">
                                                    <div class="dropdown-column col-xl-3">
                                                        <h5 class="dropdown-header">Kids Wear</h5>
                                                        <a class="dropdown-item" href="products.php">Shirt</a>
                                                        <a class="dropdown-item" href="products.php">T-shirt</a>
                                                        <a href="products.php" class="dropdown-item">kurta pajama</a>
                                                        <a class="dropdown-item" href="products.php">Jeans</a>
                                                    </div>

                                                    <div class="dropdown-column col-xl-3">
                                                        <h5 class="dropdown-header">Men's Wear</h5>
                                                        <a class="dropdown-item" href="products.php">Shirt</a>

                                                        <a class="dropdown-item" href="products.php">T-shirt</a>

                                                        <a class="dropdown-item" href="products.php">Jeans</a>
                                                    </div>

                                                    <div class="dropdown-column col-xl-3">
                                                        <h5 class="dropdown-header">Women's Wear</h5>
                                                        <a class="dropdown-item" href="products.php">Kurtis</a>
                                                        <a class="dropdown-item" href="products.php">Suits</a>
                                                        <a class="dropdown-item" href="products.php">Sarees</a>
                                                        <a class="dropdown-item" href="products.php">Lehenga</a>
                                                    </div>

                                                    <div class="dropdown-column dropdown-column-img col-3">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link ps-xl-2 ps-0" href="blog-list.php">Blog</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link ps-xl-2 ps-0" href="contact-us.php">Contact Us</a>
                                        </li>

                                        <!-- <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown">Seller</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="seller-become.php">Become a Seller</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="seller-dashboard.php">Seller Dashboard</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="seller-detail.php">Seller Detail</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="seller-detail-2.php">Seller Detail 2</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="seller-grid.php">Seller Grid</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="seller-grid-2.php">Seller Grid 2</a>
                                                </li>
                                            </ul>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>


                            <div class="rightside-box">
                                <div class="search-full">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i data-feather="search" class="font-light"></i>
                                        </span>
                                        <input type="text" name="search" class="form-control search-type"  autocomplete="Search" placeholder="Search here..">
                                        <span class="input-group-text close-search">
                                            <i data-feather="x" class="font-light"></i>
                                        </span>
                                    </div>
                                </div>

                                <ul class="right-side-menu">
                                    <li class="right-side" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Search">
                                        <div class="onhover-dropdown header-badge">
                                            <button onclick="window.location.href = 'search.php';" type="button" class="btn p-0 position-relative header-wishlist">
                                                <i class="iconly-Search icli"></i>
                                            </button>
                                        </div>
                                    </li>

                                    <li class="right-side" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Compare">
                                        <div class="onhover-dropdown header-badge">
                                            <button onclick="window.location.href = 'compare.php';" type="button" class="btn p-0 position-relative header-wishlist">
                                                <i class="iconly-Swap icli"></i>
                                            </button>
                                        </div>
                                    </li>

                                    <li class="right-side" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Wishlist">
                                        <div class="onhover-dropdown header-badge">
                                            <button onclick="window.location.href = 'wishlist.php';" type="button" class="btn p-0 position-relative header-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </button>
                                        </div>
                                    </li>

                                    <li class="right-side" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Cart">
                                        <div class="onhover-dropdown header-badge">
                                            <button onclick="window.location.href = 'cart.php';" type="button" class="btn p-0 position-relative header-wishlist">
                                                <i class="icli">
                                                    <i data-feather="shopping-cart"></i>
                                                </i>
                                                <span class="position-absolute top-0 start-100 translate-middle badge">2
                                                    <span class="visually-hidden">unread messages</span>
                                                </span>
                                            </button>

                                            <div class="onhover-div">
                                                <ul class="cart-list">
                                                    <li class="product-box-contain">
                                                        <div class="drop-cart">
                                                            <a href="product-left-thumbnail.php" class="drop-image">
                                                                <img src="assets/images/fashion/product/1.jpg" class="blur-up lazyload" alt=""  loading="lazy">
                                                            </a>
                                                            <div class="drop-contain">
                                                                <a href="product-left-thumbnail.php">
                                                                    <h5>Brown Khadi Jacket</h5>
                                                                </a>
                                                                <h6><span>1 x</span> ₹300</h6>
                                                                <button class="close-button close_button">
                                                                    <i class="fa-solid fa-xmark"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="product-box-contain">
                                                        <div class="drop-cart">
                                                            <a href="product-left-thumbnail.php" class="drop-image">
                                                                <img src="assets/images/fashion/product/2.jpg" class="blur-up lazyload" alt=""  loading="lazy">
                                                            </a>
                                                            <div class="drop-contain">
                                                                <a href="product-left-thumbnail.php">
                                                                    <h5>White top</h5>
                                                                </a>
                                                                <h6><span>1 x</span> ₹300</h6>
                                                                <button class="close-button close_button">
                                                                    <i class="fa-solid fa-xmark"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>


                                                <div class="price-box">
                                                    <h5>Total :</h5>
                                                    <h4 class="theme-color fw-bold">₹600</h4>
                                                </div>

                                                <div class="button-group">
                                                    <a href="cart.php" class="btn btn-sm cart-button">View Cart</a>
                                                    <a href="checkout.php" class="btn btn-sm cart-button theme-bg-color
                                                    text-white">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>


                                    <li class="right-side onhover-dropdown" data-bs-toggle="tooltip" data-bs-placement="bottom" title="User">
                                        <div class="delivery-login-box">
                                            <div class="delivery-icon">
                                                <i class="iconly-Profile icli"></i>
                                            </div>
                                            <div class="delivery-detail">
                                                <h6>Hello,</h6>
                                                <h5>My Account</h5>
                                            </div>
                                        </div>

                                        <div class="onhover-div onhover-div-login">
                                            <ul class="user-box-name">
                                                <li class="product-box-contain">
                                                    <a href="login.php">Log In</a>
                                                </li>
                                                <li class="product-box-contain">
                                                    <a href="sign-up.php">Register</a>
                                                </li>
                                                <li class="product-box-contain">
                                                    <a href="forgot.php">Forgot Password</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- mobile fix menu start -->
    <div class="mobile-menu d-md-none d-block mobile-cart noPrint">
        <ul>
            <li class="active">
                <a href="index.php">
                    <i class="iconly-Home icli"></i>
                    <span>Home</span>
                </a>
            </li>
            <li class="mobile-category">
                <a href="shop-category.php">
                    <i class="iconly-Category icli js-link"></i>
                    <span>Category</span>
                </a>
            </li>
            <li>
                <a href="search.php" class="search-box">
                    <i class="iconly-Search icli"></i>
                    <span>Search</span>
                </a>
            </li>
            <li>
                <a href="wishlist.php" class="notifi-wishlist">
                    <i class="iconly-Heart icli"></i>
                    <span>Wishlist</span>
                </a>
            </li>
            <li>
                <a href="cart.php">
                    <i class="icli" data-feather="shopping-cart"></i>
                    <span>Cart</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- mobile fix menu end -->