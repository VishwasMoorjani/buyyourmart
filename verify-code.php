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
                    <h2>Verify Code</h2>
                    <nav class="breadcrumb-area">
    <div class="container">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="index.php">
                <i class="fa-solid fa-house"></i>
            </a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Verify Code</li>
    </ol>
    </div>
</nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Breadcrumb Section End -->

<section class="log-in-section otp-section section-b-space">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                <div class="image-contain">
                    <img src="assets/images/inner-page/otp.png" class="img-fluid" alt=""  loading="lazy">
                </div>
            </div>

            <div class="col-xxl-4 col-xl-5 col-lg-6 col-sm-8 mx-auto">
                <div class="d-flex align-items-center justify-content-center h-100">
                    <div class="log-in-box">
                        <div class="log-in-title">
                            <h3 class="text-title">Please enter the one time password to verify your account</h3>
                            <h5 class="text-content">A code has been sent to <span>*******sh@gmail.com</span></h5>
                        </div>

                        <div id="otp" class="inputs d-flex flex-row justify-content-center">
                            <input class="text-center form-control rounded" type="text" id="first" maxlength="1" placeholder="0">
                            <input class="text-center form-control rounded" type="text" id="second" maxlength="1" placeholder="0">
                            <input class="text-center form-control rounded" type="text" id="third" maxlength="1" placeholder="0">
                            <input class="text-center form-control rounded" type="text" id="fourth" maxlength="1" placeholder="0">
                            <input class="text-center form-control rounded" type="text" id="fifth" maxlength="1" placeholder="0">
                            <input class="text-center form-control rounded" type="text" id="sixth" maxlength="1" placeholder="0">
                        </div>

                        <div class="send-box pt-4">
                            <h5>Didn't get the code? <a href="javascript:void(0)" class="theme-color fw-bold">Resend It</a></h5>
                        </div>

                        <button onclick="location.href='change-password.php';" class="btn btn-animation w-100 mt-3" type="submit">Verify</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include('footer.php'); ?>