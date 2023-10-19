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
                    <h2>Registration</h2>
                    <nav class="breadcrumb-area">
                        <div class="container">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.php">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Registration</li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Breadcrumb Section End -->

<section class="log-in-section section-b-space">
    <div class="container-fluid-lg w-100">
        <div class="row">
            <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                <div class="image-contain">
                    <img src="assets/images/inner-page/sign-up.png" class="img-fluid" alt=""  loading="lazy">
                </div>
            </div>

            <div class="col-xxl-4 col-xl-5 col-lg-6 col-sm-8 mx-auto">
                <div class="log-in-box">
                    <div class="log-in-title">
                        <h3>Welcome To G Digital India</h3>
                        <h4>Create New Account</h4>
                    </div>

                    <div class="input-box">
                        <form class="row g-4">
                            <div class="col-12">
                                <div class="input-group theme-form-floating">
                                    <input type="text" class="form-control" id="fullname" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group theme-form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group theme-form-floating">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
                                    <button type="button" class="input-group-text" onclick="togglePasswordVisibility('password')">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="forgot-box">
                                    <div class="form-check ps-0 m-0 remember-box">
                                        <input class="checkbox_animated check-box" type="checkbox" id="flexCheckDefault">
                                        <label class="form-check-label">I agree with
                                            <a href="term-condition.php"><span>Terms and Condition</span></a></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-animation w-100" type="submit">Sign Up</button>
                            </div>
                        </form>
                    </div>

                    <div class="other-log-in">
                        <h6>or</h6>
                    </div>

                    <div class="log-in-button">
                        <ul>
                            <li>
                                <a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&amp;flowEntry=ServiceLogin" class="btn google-button w-100">
                                    <img src="assets/images/inner-page/google.png" class="blur-up lazyload" alt=""  loading="lazy">
                                    Sign up with Google
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/" class="btn google-button w-100">
                                    <img src="assets/images/inner-page/facebook.png" class="blur-up lazyload" alt=""  loading="lazy"> Sign up with Facebook
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="other-log-in">
                        <h6></h6>
                    </div>

                    <div class="sign-up-box">
                        <h4>Already have an account?</h4>
                        <a href="login.php">Log In</a>
                    </div>
                </div>
            </div>

            <div class="col-xxl-7 col-xl-6 col-lg-6"></div>
        </div>
    </div>
</section>





<?php include('footer.php'); ?>