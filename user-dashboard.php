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
                    <h2>User Dashboard</h2>
                    <nav class="breadcrumb-area">
                        <div class="container">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.php">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">User Dashboard</li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Breadcrumb Section End -->



<!-- User Dashboard Section Start -->
<section class="user-dashboard-section section-b-space">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-xxl-3 col-lg-4">
                <div class="dashboard-left-sidebar">
                    <div class="close-button d-flex d-lg-none">
                        <button class="close-sidebar">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <div class="profile-box">
                        <div class="cover-image">
                            <img src="assets/images/inner-page/cover-img.jpg" class="img-fluid blur-up lazyload" alt=""  loading="lazy">
                        </div>

                        <div class="profile-contain">
                            <div class="profile-image">
                                <div class="position-relative">
                                    <img src="assets/images/inner-page/user/1.jpg" class="blur-up lazyload update_img" alt=""  loading="lazy">
                                    <div class="cover-icon">
                                        <i class="fa-solid fa-pen">
                                            <input type="file" onchange="readURL(this,0)">
                                        </i>
                                    </div>
                                </div>
                            </div>

                            <div class="profile-name">
                                <h3>karishma</h3>
                                <h6 class="text-content">karishma@gmail.com</h6>
                            </div>
                        </div>
                    </div>



                    <ul class="nav nav-pills user-nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-dashboard-tab" data-bs-toggle="pill" data-bs-target="#pills-dashboard" type="button" role="tab" aria-controls="pills-dashboard" aria-selected="true"><i data-feather="home"></i>
                                DashBoard</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-order-tab" data-bs-toggle="pill" data-bs-target="#pills-order" type="button" role="tab" aria-controls="pills-order" aria-selected="false"><i data-feather="shopping-bag"></i>Order</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-wishlist-tab" data-bs-toggle="pill" data-bs-target="#pills-wishlist" type="button" role="tab" aria-controls="pills-wishlist" aria-selected="false"><i data-feather="heart"></i>
                                Wishlist</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-address-tab" data-bs-toggle="pill" data-bs-target="#pills-address" type="button" role="tab" aria-controls="pills-address" aria-selected="false"><i data-feather="map-pin"></i>
                                Address</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><i data-feather="user"></i>
                                Profile</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-security-tab" data-bs-toggle="pill" data-bs-target="#pills-security" type="button" role="tab" aria-controls="pills-security" aria-selected="false"><i data-feather="shield"></i>
                                Privacy</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-xxl-9 col-lg-8">
                <button class="btn left-dashboard-show btn-animation btn-md fw-bold d-block mb-4 d-lg-none">Show
                    Menu</button>
                <div class="dashboard-right-sidebar">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-dashboard" role="tabpanel" aria-labelledby="pills-dashboard-tab">
                            <div class="dashboard-home">
                                <div class="title">
                                    <h2>My Dashboard</h2>
                                    <span class="title-leaf">
                                        <svg class="icon-width bg-gray">
                                            <use xlink:href="assets/svg/leaf.svg#leaf"></use>
                                        </svg>
                                    </span>
                                </div>

                                <div class="dashboard-user-name">
                                    <h6 class="text-content">Hello, <b class="text-title">karishma</b></h6>
                                    <p class="text-content">From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p>
                                </div>

                                <div class="total-box">
                                    <div class="row g-sm-4 g-3">
                                        <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="totle-contain">
                                                <img src="assets/images/order.svg" class="img-1 blur-up lazyload" alt=""  loading="lazy">

                                                <div class="totle-detail">
                                                    <h5>Total Order</h5>
                                                    <h3>120</h3>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="totle-contain">
                                                <img src="assets/images/pending.svg" class="img-1 blur-up lazyload" alt=""  loading="lazy">

                                                <div class="totle-detail">
                                                    <h5>Total Pending Order</h5>
                                                    <h3>5</h3>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="totle-contain">
                                                <img src="assets/images/wishlist.svg" class="img-1 blur-up lazyload" alt=""  loading="lazy">

                                                <div class="totle-detail">
                                                    <h5>Total Wishlist</h5>
                                                    <h3>50</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="dashboard-title">
                                    <h3>Account Information</h3>
                                </div>

                                <div class="row g-4">
                                    <div class="col-xxl-6">
                                        <div class="dashboard-contant-title">
                                            <h4>Contact Information <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editname">Edit</a>
                                            </h4>
                                        </div>
                                        <div class="dashboard-detail">
                                            <h6 class="text-content"> karishma Jha </h6>
                                            <h6 class="text-content"> karishma@gmail.com</h6>
                                            <h6 class="text-content"> +91 5673467843</h6>
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#change-password"> Change Password</a>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="dashboard-contant-title">
                                            <h4>Address Book
                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addnewaadress">Add New Address</a>
                                            </h4>
                                        </div>

                                        <div class="row g-4">
                                            <div class="col-xxl-6">
                                                <div class="dashboard-detail">
                                                    <h6 class="text-content">Default Billing Address</h6>
                                                    <h6 class="text-content">You have not set a default billing
                                                        address.</h6>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editadress">Edit Address</a>
                                                </div>
                                            </div>

                                            <div class="col-xxl-6">
                                                <div class="dashboard-detail">
                                                    <h6 class="text-content">Default Shipping Address</h6>
                                                    <h6 class="text-content">You have not set a default shipping
                                                        address.</h6>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editadress">Edit Address</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade show" id="pills-wishlist" role="tabpanel" aria-labelledby="pills-wishlist-tab">
                            <div class="dashboard-wishlist">
                                <div class="title">
                                    <h2>My Wishlist History</h2>
                                    <span class="title-leaf title-leaf-gray">
                                        <svg class="icon-width bg-gray">
                                            <use xlink:href="assets/svg/leaf.svg#leaf"></use>
                                        </svg>
                                    </span>
                                </div>
                                <div class="row g-sm-4 g-3 row-cols-md-3 row-cols-2 product-list-section">

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
                                                            <a href="cart.php" class="notifi-wishlist">
                                                                <i class="icli">
                                                                    <i data-feather="shopping-cart"></i>
                                                                </i>
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

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Cart">
                                                            <a href="cart.php" class="notifi-wishlist">
                                                                <i class="icli">
                                                                    <i data-feather="shopping-cart"></i>
                                                                </i>
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
                            </div>
                        </div>


                        <div class="tab-pane fade show" id="pills-order" role="tabpanel" aria-labelledby="pills-order-tab">
                            <div class="dashboard-order">
                                <div class="title">
                                    <h2>My Orders History</h2>
                                    <span class="title-leaf title-leaf-gray">
                                        <svg class="icon-width bg-gray">
                                            <use xlink:href="assets/svg/leaf.svg#leaf"></use>
                                        </svg>
                                    </span>
                                </div>

                                <div class="order-contain">
                                    <div class="order-box dashboard-bg-box">
                                        <div class="order-container">
                                            <div class="order-icon">
                                                <i data-feather="box"></i>
                                            </div>

                                            <div class="order-detail">
                                                <h4>Delivered <span>Pending</span></h4>
                                            </div>
                                        </div>

                                        <div class="product-order-detail">
                                            <a href="product-left-thumbnail.php" class="order-image">
                                                <img src="assets/images/fashion/product/1.jpg" class="blur-up lazyload" alt=""  loading="lazy">
                                            </a>

                                            <div class="order-wrap">
                                                <ul class="product-size">
                                                    <li>
                                                        <div class="size-box">
                                                            <h6 class="text-content"> Order Id : </h6>
                                                            <h5><a href="order-success.php"> order_476614956685</a></h5>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="size-box">
                                                            <h6 class="text-content">Date : </h6>
                                                            <h5>14-Feb-2023, 12:02 PM</h5>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="size-box">
                                                            <h6 class="text-content">Amount : </h6>
                                                            <h5>₹300</h5>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="size-box">
                                                            <h6 class="text-content">Payment Method : </h6>
                                                            <h5>Paypal</h5>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="size-box">
                                                            <h6 class="text-content">Order Status : </h6>
                                                            <h5>Cancelled</h5>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="size-box">
                                                            <button class="btn btn-animation justify-content-center" onclick="location.href = 'products.php';" type="submit">Re-order</button>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="order-box dashboard-bg-box">
                                        <div class="order-container">
                                            <div class="order-icon">
                                                <i data-feather="box"></i>
                                            </div>

                                            <div class="order-detail">
                                                <h4>Delivered <span class="success-bg">Success</span></h4>
                                            </div>
                                        </div>

                                        <div class="product-order-detail">
                                            <a href="product-left-thumbnail.php" class="order-image">
                                                <img src="assets/images/fashion/product/2.jpg" alt=""  loading="lazy" class="blur-up lazyload">
                                            </a>
                                            <div class="order-wrap">

                                                <ul class="product-size">
                                                    <li>
                                                        <div class="size-box">
                                                            <h5 class="text-content"> Order Id : </h5>
                                                            <h5><a href="order-success.php"> order_476614956685</a></h5>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="size-box">
                                                            <h5 class="text-content">Date : </h5>
                                                            <h5><a href="">14-Feb-2023, 12:02 PM</a></h5>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="size-box">
                                                            <h5 class="text-content">Amount : </h5>
                                                            <h5>₹300</h5>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="size-box">
                                                            <h5 class="text-content">Payment Method : </h5>
                                                            <h5>Paypal</h5>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="size-box">
                                                            <h5 class="text-content">Order Status : </h5>
                                                            <h5>Cancelled</h5>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="size-box">
                                                            <button class="btn btn-animation justify-content-center" onclick="location.href = 'products.php';" type="submit">Re-order</button>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>






                        <div class="tab-pane fade show" id="pills-address" role="tabpanel" aria-labelledby="pills-address-tab">
                            <div class="dashboard-address">
                                <div class="title title-flex">
                                    <div>
                                        <h2>My Address Book</h2>
                                        <span class="title-leaf">
                                            <svg class="icon-width bg-gray">
                                                <use xlink:href="assets/svg/leaf.svg#leaf"></use>
                                            </svg>
                                        </span>
                                    </div>

                                    <button class="btn theme-bg-color text-white btn-sm fw-bold mt-lg-0 mt-3" data-bs-toggle="modal" data-bs-target="#addNewAddress"><i data-feather="plus" class="me-2"></i> Add New Address</button>
                                </div>

                                <div class="row g-sm-4 g-3">
                                    <div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6 addres-contain">
                                        <div class="address-box">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jack" id="flexRadioDefault2" checked>
                                                </div>

                                                <div class="label">
                                                    <label>Home</label>
                                                </div>

                                                <div class="table-responsive address-table">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="2">Karishma</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Address :</td>
                                                                <td>
                                                                    <p>8424 James Lane South San Francisco, CA 94080
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pin Code :</td>
                                                                <td>302001</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Phone :</td>
                                                                <td>+91 3459674356</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="button-group">
                                                <button class="btn btn-sm add-button w-100" data-bs-toggle="modal" data-bs-target="#editAddressAdd"><i data-feather="edit"></i>
                                                    Edit</button>

                                                <button class="btn btn-sm add-button w-100 close_button" data-bs-toggle="modal" data-bs-target="#removeProfile"><i data-feather="trash-2"></i>
                                                    Remove</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6 addres-contain">
                                        <div class="address-box">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jack" id="flexRadioDefault3">
                                                </div>

                                                <div class="label">
                                                    <label>Office</label>
                                                </div>

                                                <div class="table-responsive address-table">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="2">Karishma</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Address :</td>
                                                                <td>
                                                                    <p>2280 Rose, Jaipur-302003</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pin Code :</td>
                                                                <td>302001</td>
                                                            </tr>

                                                            <tr>
                                                                <td>Phone :</td>
                                                                <td>+91 5042280969</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="button-group">
                                                <button class="btn btn-sm add-button w-100" data-bs-toggle="modal" data-bs-target="#editAddressAdd"><i data-feather="edit"></i> Edit</button>

                                                <button class="btn btn-sm add-button w-100 close_button" data-bs-toggle="modal" data-bs-target="#removeProfile"><i data-feather="trash-2"></i> Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


 

                        <div class="tab-pane fade show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="dashboard-profile">
                                <div class="title">
                                    <h2>My Profile</h2>
                                    <span class="title-leaf">
                                        <svg class="icon-width bg-gray">
                                            <use xlink:href="assets/svg/leaf.svg#leaf"></use>
                                        </svg>
                                    </span>
                                </div>

                                <div class="profile-detail dashboard-bg-box">
                                    <div class="dashboard-title">
                                        <h3>Profile Name</h3>
                                    </div>
                                    <div class="profile-name-detail">
                                        <div class="d-sm-flex align-items-center d-block">
                                            <h3>karishma</h3>
                                            <div class="product-rating profile-rating">
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
                                                        <i data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editProfile">Edit</a>
                                    </div>

                                    <div class="location-profile">
                                        <ul>
                                            <li>
                                                <div class="location-box">
                                                    <i data-feather="map-pin"></i>
                                                    <h6>Jaipur, Rajasthan</h6>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="location-box">
                                                    <i data-feather="mail"></i>
                                                    <h6>karishma@gmail.com</h6>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="location-box">
                                                    <i data-feather="phone"></i>
                                                    <h6>8957483845</h6>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="profile-description">
                                        <p>Residences can be classified by and how they are connected to
                                            neighbouring residences and land. Different types of housing tenure can
                                            be used for the same physical type.</p>
                                    </div>
                                </div>

                                <div class="profile-about dashboard-bg-box">
                                    <div class="row">
                                        <div class="col-xxl-7">
                                            <div class="dashboard-title mb-3">
                                                <h3>Basic Info</h3>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Gender :</td>
                                                            <td>Female</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Birthday :</td>
                                                            <td>21/05/1997</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Phone Number :</td>
                                                            <td>
                                                                <a href="tel:6454546456"> +91 6454546456</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Address :</td>
                                                            <td>Plot No.1, Durgapura, Jaipur-302018, Rajasthan</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="dashboard-title mb-3">
                                                <h3>Login Details</h3>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Email :</td>
                                                            <td>
                                                                <a href="javascript:void(0)">karishma@gmail.com
                                                                    <span data-bs-toggle="modal" data-bs-target="#editlogin">Edit</span></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Password :</td>
                                                            <td>
                                                                <a href="change-password.php">●●●●●●
                                                                    <span data-bs-toggle="modal">Change</span></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade show" id="pills-security" role="tabpanel" aria-labelledby="pills-security-tab">
                            <div class="dashboard-privacy">
                                <div class="dashboard-bg-box">
                                    <div class="dashboard-title mb-4">
                                        <h3>Privacy</h3>
                                    </div>

                                    <div class="privacy-box">
                                        <div class="d-flex align-items-start">
                                            <h6>Allows others to see my profile</h6>
                                            <div class="form-check form-switch switch-radio ms-auto">
                                                <input class="form-check-input" type="checkbox" role="switch" id="redio" aria-checked="false">
                                                <label class="form-check-label" for="redio"></label>
                                            </div>
                                        </div>

                                        <p class="text-content">all peoples will be able to see my profile</p>
                                    </div>

                                    <div class="privacy-box">
                                        <div class="d-flex align-items-start">
                                            <h6>who has save this profile only that people see my profile</h6>
                                            <div class="form-check form-switch switch-radio ms-auto">
                                                <input class="form-check-input" type="checkbox" role="switch" id="redio2" aria-checked="false">
                                                <label class="form-check-label" for="redio2"></label>
                                            </div>
                                        </div>

                                        <p class="text-content">all peoples will not be able to see my profile</p>
                                    </div>

                                    <button class="btn theme-bg-color btn-md fw-bold mt-4 text-white">Save
                                        Changes</button>
                                </div>

                                <div class="dashboard-bg-box mt-4">
                                    <div class="dashboard-title mb-4">
                                        <h3>Account settings</h3>
                                    </div>

                                    <div class="privacy-box">
                                        <div class="d-flex align-items-start">
                                            <h6>Deleting Your Account Will Permanently</h6>
                                            <div class="form-check form-switch switch-radio ms-auto">
                                                <input class="form-check-input" type="checkbox" role="switch" id="redio3" aria-checked="false">
                                                <label class="form-check-label" for="redio3"></label>
                                            </div>
                                        </div>
                                        <p class="text-content">Once your account is deleted, you will be logged out
                                            and will be unable to log in back.</p>
                                    </div>

                                    <div class="privacy-box">
                                        <div class="d-flex align-items-start">
                                            <h6>Deleting Your Account Will Temporary</h6>
                                            <div class="form-check form-switch switch-radio ms-auto">
                                                <input class="form-check-input" type="checkbox" role="switch" id="redio4" aria-checked="false">
                                                <label class="form-check-label" for="redio4"></label>
                                            </div>
                                        </div>

                                        <p class="text-content">Once your account is deleted, you will be logged out and you will be create new account</p>
                                    </div>

                                    <button class="btn theme-bg-color btn-md fw-bold mt-4 text-white">Delete My
                                        Account</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- User Dashboard Section End -->



<?php include('footer.php'); ?>