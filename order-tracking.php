<?php
$title = "Fashion";
$description = "";
$keyword = "";
include('header.php'); ?>


<!-- Breadcrumb Section Start -->



<section class="tracking background-image-2">
    <div class="container-fluid-lg w-100">
        <div class="row">

            <div class="col-xxl-4 col-xl-5 col-lg-6 col-sm-8 mx-auto">
                <div class="log-in-box">
                    <div class="tracking-title">
                        <h2>Track Your Order</h2>
                        <p>"Track your order in real-time using our intuitive online system, ensuring you're always informed about its status and delivery progress."</p>
                    </div>
                    <div class="input-box">
                        <form class="row g-4 tracking-form">
                            <div class="col-12">
                                <div class="theme-form-floating">
                                    <input type="text" name="orderid" class="form-control"  placeholder="Enter Your Order ID">
                                    <button class="btn btn-animation justify-content-center" type="submit"><i class="fa-solid fa-circle-arrow-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                <div class="image-contain">
                    <img src="assets/images/tracking-girl.png" class="img-fluid" alt=""  loading="lazy">
                </div>
            </div>


        </div>
    </div>
</section>





<?php include('footer.php'); ?>