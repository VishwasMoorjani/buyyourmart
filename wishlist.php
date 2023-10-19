<?php
$title = "Fashion";
$description = "";
$keyword = "";
include('header.php'); ?>


<!-- Breadcrumb Section Start -->
<section class="breadscrumb-section">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadscrumb-contain">
                    <h2>Wishlist</h2>
                    
<nav class="breadcrumb-area">
    <div class="container">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="index.php">
                <i class="fa-solid fa-house"></i>
            </a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
    </ol>
    </div>
</nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->


<section class="wishlist-section section-b-space">
    <div class="container-fluid-lg">

        <div class="col-md-12">
            <div class="show-button">
                <div class="top-filter-menu">
                    <div class="category-dropdown">
                        <h5 class="text-content">Sort By :</h5>
                        <div class="dropdown">
                            <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                                <span>Most Popular</span> <i class="fa-solid fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li>
                                    <a class="dropdown-item" id="pop" href="javascript:void(0)">Popularity</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" id="low" href="javascript:void(0)">Low - High
                                        Price</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" id="high" href="javascript:void(0)">High - Low
                                        Price</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" id="rating" href="javascript:void(0)">Average
                                        Rating</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" id="aToz" href="javascript:void(0)">A - Z Order</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" id="zToa" href="javascript:void(0)">Z - A Order</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" id="off" href="javascript:void(0)">% Off - Hight To
                                        Low</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="grid-option d-none d-md-block">
                        <ul>
                            <li class="wish-grid">
                                <a href="javascript:void(0)">
                                    <img src="assets/images/grid-3.svg" class="blur-up lazyload" alt=""  loading="lazy">
                                </a>
                            </li>
                            <li class="wish-grid-btn d-xxl-inline-block d-none active">
                                <a href="javascript:void(0)">
                                    <img src="assets/images/grid-4.svg" class="blur-up lazyload d-lg-inline-block d-none" alt=""  loading="lazy">
                                    <img src="assets/images/grid.svg" class="blur-up lazyload img-fluid d-lg-none d-inline-block" alt=""  loading="lazy">
                                </a>
                            </li>
                            <li class="wishlist-btn">
                                <a href="javascript:void(0)">
                                    <img src="assets/images/list.svg" class="blur-up lazyload" alt=""  loading="lazy">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row g-sm-4 g-3 row-cols-md-4 row-cols-2 product-list-section">

                <div class="product-box-contain">
                    <div class="product-box-3 h-100 wow fadeInUp">
                        <div class="product-header">
                            <div class="product-image">
                                <div class="product-header-top">
                                    <button class="btn wishlist-button close_button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.php">
                                    <img src="assets/images/fashion/product/1.jpg" class="img-fluid blur-up lazyload" alt=""  loading="lazy">
                                </a>
                                <ul class="product-option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>

                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.php">
                                            <i data-feather="refresh-cw"></i>
                                        </a>
                                    </li>

                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Cart">
                                        <a href="cart.php" class="notifi-cart">
                                             <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-footer">
                            <div class="product-detail">
                                <span class="span-name">Tops</span>
                                <a href="product-left-thumbnail.php">
                                    <h5 class="name">Brown Khadi Jacket</h5>
                                </a>
                                <div class="product-rating mt-2">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <span>(4.0)</span>
                                </div>
                                <h6 class="unit">1 pcs</h6>
                                <h5 class="price"><span class="theme-color">₹300</span> <del>₹360</del></h5>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-box-contain">
                    <div class="product-box-3 h-100 wow fadeInUp">
                        <div class="product-header">
                            <div class="product-image">
                                <div class="product-header-top">
                                    <button class="btn wishlist-button close_button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                </div>
                                <a href="product-left-thumbnail.php">
                                    <img src="assets/images/fashion/product/1.jpg" class="img-fluid blur-up lazyload" alt=""  loading="lazy">
                                </a>
                                <ul class="product-option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>

                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.php">
                                            <i data-feather="refresh-cw"></i>
                                        </a>
                                    </li>

                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                        <a href="wishlist.php" class="notifi-wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-footer">
                            <div class="product-detail">
                                <span class="span-name">Tops</span>
                                <a href="product-left-thumbnail.php">
                                    <h5 class="name">Brown Khadi Jacket</h5>
                                </a>
                                <div class="product-rating mt-2">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <span>(4.0)</span>
                                </div>
                                <h6 class="unit">1 pcs</h6>
                                <h5 class="price"><span class="theme-color">₹300</span> <del>₹360</del></h5>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- <nav class="custome-pagination">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-disabled="true">
                            <i class="fa-solid fa-angles-left"></i>
                        </a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="javascript:void(0)">1</a>
                    </li>
                    <li class="page-item" aria-current="page">
                        <a class="page-link" href="javascript:void(0)">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">
                            <i class="fa-solid fa-angles-right"></i>
                        </a>
                    </li>
                </ul>
            </nav> -->

        </div>



    </div>
</section>



<?php include('footer.php'); ?>