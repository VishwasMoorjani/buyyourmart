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
                    <h2>Careers</h2>
                    <nav class="breadcrumb-area">
                        <div class="container">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.php">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Careers</li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Breadcrumb Section End -->


<section class="contact-box-section">
    <div class="container-fluid-lg">
        <div class="row g-lg-5 g-3">
            <div class="col-lg-6">
                <div class="left-sidebar-box">
                    <div class="row">

                        <div class="col-xl-12">
                            <div class="contact-title">
                                <h3>We are hiring</h3>
                            </div>

                            <div class="career-details">
                                <div class="row g-4">

                                    <div class="col-xxl-6 col-lg-12 col-sm-6">
                                        <div class="career-detail-box">
                                            <div class="career-detail-title">
                                                <h4>Post</h4>
                                            </div>
                                            <div class="career-detail-contain">
                                                <p>Web Designer</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-sm-6">
                                        <div class="contact-detail-box">
                                            <div class="contact-detail-title">
                                                <h4>Experience</h4>
                                            </div>
                                            <div class="contact-detail-contain">
                                                <p>4 years</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-sm-6">
                                        <div class="contact-detail-box">
                                            <div class="contact-detail-title">
                                                <h4>CTC</h4>
                                            </div>
                                            <div class="contact-detail-contain">
                                                <p>INR 15000</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-sm-6">
                                        <div class="contact-detail-box">
                                            <div class="contact-detail-title">
                                                <h4>Skills</h4>
                                            </div>
                                            <div class="contact-detail-contain">
                                                <p>HTML, CSS, Javascript, Jquery, Photo-shop</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="contact-title">
                    <h3>Send Your Message</h3>
                </div>
                <div class="right-sidebar-box">
                    <form action="thanks.php" method="post">
                        <div class="row">
                            <div class="col-xxl-6 col-lg-12 col-sm-6">
                                <div class="mb-md-4 mb-3 custom-form">
                                    <div class="custom-input">
                                        <input name="name" type="text" class="form-control" id="exampleFormControlInput" placeholder="Enter Full Name">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-6 col-lg-12 col-sm-6">
                                <div class="mb-md-4 mb-3 custom-form">
                                    <div class="custom-input">
                                        <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="Enter Email Address">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-6 col-lg-12 col-sm-6">
                                <div class="mb-md-4 mb-3 custom-form">
                                    <div class="custom-input">
                                        <input name="mobile" type="tel" class="form-control" id="exampleFormControlInput3" placeholder="Enter Your Phone Number" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                        <i class="fa-solid fa-mobile-screen-button"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-md-4 mb-3 custom-form">
                                    <div class="custom-textarea">
                                        <textarea name="message" class="form-control" id="exampleFormControlTextarea" placeholder="Enter Your Message" rows="6"></textarea>
                                        <i class="fa-solid fa-message"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button name="submit" class="btn btn-animation btn-md fw-bold ms-auto">Submit</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</section>



<?php include('footer.php'); ?>