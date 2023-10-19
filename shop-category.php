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
                    <h2>Product Category</h2>
                    <nav class="breadcrumb-area">
    <div class="container">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="index.php">
                <i class="fa-solid fa-house"></i>
            </a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Product Category</li>
    </ol>
    </div>
</nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Breadcrumb Section End -->


<section class="section-b-space shop-section">
    <div class="container-fluid-lg">
        <div class="row">

            <div class="col-custome-3">
                <div class="left-box wow fadeInUp">
                    <div class="shop-left-sidebar">


                        <div class="col-custome-12">
                            <div class="left-box wow fadeInUp">
                                <div class="shop-left-sidebar">
                                    <div class="back-button">
                                        <h3><i class="fa-solid fa-arrow-left"></i> Back</h3>
                                    </div>

                                    <div class="filter-category">
                                        <div class="filter-title categoryheading">
                                            <h2>Products Category</h2>
                                        </div>
                                    </div>

                                    <div class="accordion custome-accordion" id="accordionExample">

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingzero">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsezero" aria-expanded="true" aria-controls="collapsezero">
                                                    <span>Kid's Wear</span>
                                                </button>
                                            </h2>
                                            <div id="collapsezero" class="accordion-collapsed collapse show" aria-labelledby="headingzero">
                                                <div class="accordion-body">
                                                    <ul class="productscategory">
                                                        <li><a href=""> Shirt</a></li>
                                                        <li><a href=""> T-shirt</a></li>
                                                        <li><a href=""> Kurta-Pajama</a></li>
                                                        <li><a href=""> Jeans</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <span>Men's Wear</span>
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapsed collapse show" aria-labelledby="headingOne">
                                                <div class="accordion-body">
                                                    <ul class="productscategory">
                                                        <li><a href=""> Shirt</a></li>
                                                        <li><a href=""> T-shirt</a></li>
                                                        <li><a href=""> Kurta-Pajama</a></li>
                                                        <li><a href=""> Jeans</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                    <span>Women's Wear</span>
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapsed collapse show" aria-labelledby="headingThree">
                                                <div class="accordion-body">
                                                    <ul class="productscategory">
                                                        <li><a href=""> Kurtis</a></li>
                                                        <li><a href=""> Shuits</a></li>
                                                        <li><a href=""> Sarees</a></li>
                                                        <li><a href=""> Lehengas</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

            <div class="col-custome-9">
                <div class="show-button">
                    <div class="filter-button-group mt-0">
                        <div class="filter-button d-inline-block d-lg-none">
                            <a>Products Category</a>
                        </div>
                    </div>

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
                                <li class="three-grid">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/grid-3.svg" class="blur-up lazyload" alt=""  loading="lazy">
                                    </a>
                                </li>
                                <li class="grid-btn d-xxl-inline-block d-none active">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/grid-4.svg" class="blur-up lazyload d-lg-inline-block d-none" alt=""  loading="lazy">
                                        <img src="assets/images/grid.svg" class="blur-up lazyload img-fluid d-lg-none d-inline-block" alt=""  loading="lazy">
                                    </a>
                                </li>
                                <li class="list-btn">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/list.svg" class="blur-up lazyload" alt=""  loading="lazy">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <div class="row g-sm-4 g-3 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-sm-2 row-cols-1 product-list-section">
                            <div>
                                <div class="product-box-3 h-100 wow fadeInUp">
                                    <div class="product-header">
                                        <div class="product-image">
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

                                            <button onclick="location.href = 'cart.php';" class="productaddcart btn btn-md cart-button text-white">Add To Cart</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>



                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                        <div class="row g-sm-4 g-3 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 product-list-section">
                            <div>
                                <div class="product-box-3 h-100 wow fadeInUp">
                                    <div class="product-header">
                                        <div class="product-image">
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

                                            <button onclick="location.href = 'cart.php';" class="productaddcart btn btn-md cart-button text-white">Add To Cart</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row g-sm-4 g-3 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 product-list-section">
                            <div>
                                <div class="product-box-3 h-100 wow fadeInUp">
                                    <div class="product-header">
                                        <div class="product-image">
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

                                            <button onclick="location.href = 'cart.php';" class="productaddcart btn btn-md cart-button text-white">Add To Cart</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                <nav class="custome-pagination">
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
                </nav>
            </div>
        </div>
    </div>
</section>


</div>
</div>
</section>


<?php include('footer.php'); ?>