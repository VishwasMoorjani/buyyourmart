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
                    <h2>Change Password</h2>
                    <nav class="breadcrumb-area">
                        <div class="container">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.php">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Change Password</li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Breadcrumb Section End -->


<section class="log-in-section background-image-2 section-b-space">
    <div class="container-fluid-lg w-100">
        <div class="row">
            <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                <div class="image-contain">
                    <img src="assets/images/inner-page/log-in.png" class="img-fluid" alt=""  loading="lazy">
                </div>
            </div>

            <div class="col-xxl-4 col-xl-5 col-lg-6 col-sm-8 mx-auto">
                <div class="log-in-box">
                    <div class="log-in-title">
                        <h3>Change Password</h3>
                    </div>

                    <div class="input-box">

                        <form>
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <div class="input-group">
                                        <input type="password" name="old-pass" id="oldpass" class="form-control" placeholder="Enter Old Password">
                                        <button type="button" class="input-group-text" onclick="togglePasswordVisibility('oldpass')">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-12">
                                    <div class="input-group">
                                        <input type="password" name="new-pass" id="newpass" class="form-control" placeholder="Enter New Password">
                                        <button type="button" class="input-group-text" onclick="togglePasswordVisibility('newpass')">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-12">
                                    <div class="input-group">
                                        <input type="password" name="confirm-pass" id="confirmpass" class="form-control" placeholder="Enter Confirm Password">
                                        <button type="button" class="input-group-text" onclick="togglePasswordVisibility('confirmpass')">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button onclick="location.href='login.php';" class="btn btn-animation w-100 mt-3" type="button">Save</button>
                                </div>
                            </div>
                        </form>


                        <div class="other-log-in">
                            <h6>or</h6>
                        </div>

                        <div class="log-in-button">
                            <ul>
                                <li>
                                    <a href="https://www.google.com/" class="btn google-button w-100">
                                        <img src="assets/images/inner-page/google.png" class="blur-up lazyload" alt=""  loading="lazy"> Log In with Google
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/" class="btn google-button w-100">
                                        <img src="assets/images/inner-page/facebook.png" class="blur-up lazyload" alt=""  loading="lazy"> Log In with Facebook
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="other-log-in">
                            <h6></h6>
                        </div>

                        <div class="sign-up-box">
                            <h4>Don't have an account?</h4>
                            <a href="sign-up.php">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>





<?php include('footer.php'); ?>