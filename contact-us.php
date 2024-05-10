<?php
include 'includes/header.php';
$page = 'home';
?>

<main>

    <!-- Contact Banner Section Start Here -->
    <section class="banner-main-sec contact-banner-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="banner-main-content" data-aos="fade-right" data-aos-duration="1500">
                    <h1 class="heading-one">Get To Know More About Our Services!</h1>
                    <p>Our Support Agents Will Assist You And Address All Your Queries!</p>
                    <div class="website-main-buttons">
                        <button class="popup-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Let's Talk About Your Project!</button>
                    </div>
                </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="banner-main-img" data-aos="fade-left" data-aos-duration="1500">
                        <img src="assets/images/contact-banner-img.png" alt="Contact Banner Image" class="img-fluid box2">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Banner Section End Here -->

    <!--Contact Main Form Start Here -->
    <section class="contact-main-wrap contact-page-form">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="contact-main-inner" data-aos="fade-down" data-aos-duration="1000">
                        <div class="contact-inner-head">
                            <h4 class="heading-three">Talk To Us!</h4>
                            <p>Submit Your Details And Get Upto 50% Discount On Our Services!</p>
                        </div>
                        <div class="contact-main-form" data-aos="fade-right" data-aos-duration="1000">
                            <!-- Contact Main form Include Here -->
                            <?php include 'includes/sections/contact-main-form.php'; ?>
                            <!-- Contact Main form Include Here -->
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="contact-main-image" data-aos="fade-left" data-aos-duration="1000">
                        <img src="assets/images/contact-page-form-book.png" alt="Contact Page Form Book" class="img-fluid box2">
                    </div>
                </div>
            </div>
            <div class="contact-page-info">
                <div class="row">
                    <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="contact-info-box" data-aos="zoom-in-up" data-aos-duration="1000">
                            <h5 class="heading-six">
                                <i class="fa-solid fa-phone"></i>
                                Call Us
                            </h5>
                            <a href="tel:<?php echo $locNumber; ?>"><?php echo $locNumber; ?></a>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="contact-info-box" data-aos="zoom-in-up" data-aos-duration="1000">
                            <h5 class="heading-six">
                                <i class="fa-solid fa-at"></i>
                                Mail Us
                            </h5>
                            <a href="mailto:<?php echo $locEmail; ?>"><?php echo $locEmail; ?></a>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="contact-info-box" data-aos="zoom-in-up" data-aos-duration="1000">
                            <h5 class="heading-six">
                                <i class="fa-solid fa-location-pin-lock"></i>
                                Head Office:
                            </h5>
                            <p><?php echo $locHeadAddress; ?></p>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="contact-info-box" data-aos="zoom-in-up" data-aos-duration="1000">
                            <h5 class="heading-six">
                                <i class="fa-solid fa-location-pin-lock"></i>
                                Houston:
                            </h5>
                            <p><?php echo $locHoustonAddress; ?></p>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="contact-info-box" data-aos="zoom-in-up" data-aos-duration="1000">
                            <h5 class="heading-six">
                                <i class="fa-solid fa-location-pin-lock"></i>
                                California:
                            </h5>
                            <p><?php echo $locCaliforniaAddress; ?></p>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="contact-info-box" data-aos="zoom-in-up" data-aos-duration="1000">
                            <h5 class="heading-six">
                                <i class="fa-solid fa-location-pin-lock"></i>
                                United kingdom:
                            </h5>
                            <p><?php echo $locUnitedkingdomAddress; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Main Form End Here -->
    
</main>

<?php
include 'includes/footer.php';
$page = 'home';
?>