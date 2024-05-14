<?php
include 'includes/header.php';
$page = 'home';
?>

<main>

    <!-- Banner Main Section Start Here -->
    <section class="banner-main-sec">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xxl-9 col-xl-9 col-lg-10 col-md-12 col-sm-12 col-12">
                    <div class="banner-main-content">
                        <h1 class="heading-one">BECOME NOTICEABLE WITH THE BEST APP DEVELOPMENT SERVICES</h1>
                        <p>Our team of app developers has helped 500+ clients build a strong brand and enhance customer loyalty.</p>
                        <!-- Banner Brands Logos Include Here -->
                        <?php include 'includes/sections/banner-brands-logos.php'; ?>
                        <!-- Banner Brands Logos Include Here -->
                        <div class="website-main-buttons">
                            <button class="popup-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Get A Quote</button>
                            <button class="chat-btn" onclick="<?php echo $locChatClick; ?>">Live Chat</button>
                        </div>
                    </div>
                    <div class="banner-main-img">
                        <img src="assets/images/banner-main-img.avif" data-src="assets/images/banner-main-img.avif" alt="Banner Mobiles" width="100%" height="100%" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Main Section End Here -->
    
    <!-- Unlock Story Section Start Here -->
    <section class="unlock-story-wrap">
        <div class="container">
            <div class="unlock-story-inner">
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="unlock-story-content">
                            <h2 class="heading-three">
                                <span>Who We Are</span>
                                Hoff & Mazor Is An American App Development Company That Has Helped Many Top Brands Power Up Their Digital
                            </h2>
                            <p>We Are Proud Of The Fact That We Have Assisted Hundreds Of Entrepreneurs, Government Agencies And Fortune 500 Companies Creating And Maintaining Their Digital Solutions. With years of experience in the field, Hoff & Mazor has been a trusted industry leader, serving both the USA and <a href="https://www.hoffnmazor.com/mobile-app-development-company-dubai" target="_blank">UAE</a> regions in providing app development services.</p>
                            <div class="website-main-buttons">
                                <button class="popup-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Get A Quote</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="unlock-story-img">
                            <img src="assets/images/who-we-are-img.avif" data-src="assets/images/who-we-are-img.avif" alt="Who We Are" width="60%" height="100%" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Unlock Story Section End Here -->

    <!-- Counter Satisfy Section Start Here -->
    <section class="counter-satisfy-wrap">
        <!-- Counter Satisfy Section Includer Here -->
        <?php include 'includes/sections/counter-satisfy-sec.php'; ?>
        <!-- Counter Satisfy Section Includer Here -->
    </section>  
    <!-- Counter Satisfy Section End Here -->

    <!-- Service Offer Section Start Here -->
    <section class="service-offer-wrap">
        <div class="container">
            <div class="service-offer-head">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-7 col-sm-12 col-12">
                        <div class="offer-head-content">
                            <h3 class="heading-two">Services We Offer</h3>
                            <p>Our clients love us because of our love for mobiles. We are pioneers in the app development industry. Some of our core expertise in app development includes:</p>
                            <div class="website-main-buttons">
                                <button class="popup-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Get A Quote</button>
                                <button class="chat-btn" onclick="<?php echo $locChatClick; ?>">Live Chat</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                        <div class="offer-head-img">
                            <img src="assets/images/service-offer-img.avif" data-src="assets/images/service-offer-img.avif" alt="Service Offer" width="75%" height="100%" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-offer-inner">
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="service-offer-box">
                            <div class="offer-box-head">
                                <div class="offer-box-img">
                                    <img src="assets/images/service-offer-icons/mobile-app.avif" data-src="assets/images/service-offer-icons/mobile-app.avif" alt="Mobile App" width="50px" height="50px" class="img-fluid">
                                </div>
                                <a href="mobile-app-development"><h4 class="heading-six">Mobile App <br>Development</h4></a>
                            </div>
                            <div class="offer-box-content">
                                <p>Our mobile app development services are aimed at providing an intuitive app specially designed as per clients’ needs. Our team of professional developers has many years of experience in crafting niche-specific apps.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="service-offer-box">
                            <div class="offer-box-head">
                                <div class="offer-box-img">
                                    <img src="assets/images/service-offer-icons/ios-app.avif" data-src="assets/images/service-offer-icons/ios-app.avif" alt="IOS App" width="50px" height="50px" class="img-fluid">
                                </div>
                                <a href="ios-app-development"><h4 class="heading-six">IOS App <br>Development</h4></a>
                            </div>
                            <div class="offer-box-content">
                                <p>The iOS app development services at Hoff & Mazor include attractive UI/UX designs, implementation, QA, and integration of apps for iOS-supporting devices. Our iOS app developers are experienced in creating apps for different niches.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="service-offer-box">
                            <div class="offer-box-head">
                                <div class="offer-box-img">
                                    <img src="assets/images/service-offer-icons/android-app.avif" data-src="assets/images/service-offer-icons/android-app.avif" alt="Android App" width="50px" height="50px" class="img-fluid">
                                </div>
                                <a href="android-app-development"><h4 class="heading-six">Android App <br>Development</h4></a>
                            </div>
                            <div class="offer-box-content">
                                <p>Our Android development services comprise of design, development, and enhancement of mobile apps supported by all Android OS versions. Hoff & Mazor aims to provide a seamless experience to clients targeting native, hybrid, and cross-platform development.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="service-offer-box">
                            <div class="offer-box-head">
                                <div class="offer-box-img">
                                    <img src="assets/images/service-offer-icons/prototype.avif" data-src="assets/images/service-offer-icons/prototype.avif" alt="Prototype" width="50px" height="50px" class="img-fluid">
                                </div>
                                <a href="prototype-mobile-app-development"><h4 class="heading-six">Mobile App <br>Prototype</h4></a>
                            </div>
                            <div class="offer-box-content">
                                <p>Before delivering the final project, we create a mobile app prototype to receive suggestions and ideas to improvise the app. Our team of professionals sit with the client to discuss creative ideas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="service-offer-box">
                            <div class="offer-box-head">
                                <div class="offer-box-img">
                                    <img src="assets/images/service-offer-icons/mvp-app.avif" data-src="assets/images/service-offer-icons/mvp-app.avif" alt="MVP App" width="50px" height="50px" class="img-fluid">
                                </div>
                                <h4 class="heading-six">MVP App <br>Development</h4>
                            </div>
                            <div class="offer-box-content">
                                <p>In our MVP App Development services we deliver you the app with core functionalities so that you can test it out in your target market and improvements, if any, can be made.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="service-offer-box">
                            <div class="offer-box-head">
                                <div class="offer-box-img">
                                    <img src="assets/images/service-offer-icons/game-app.avif" data-src="assets/images/service-offer-icons/game-app.avif" alt="Game App" width="50px" height="50px" class="img-fluid">
                                </div>
                                <a href="game-app-development"><h4 class="heading-six">Games App <br>Development</h4></a>
                            </div>
                            <div class="offer-box-content">
                                <p>Today, the gaming industry is one of the most thriving industries in the technology world. Get your gaming app developed by the best game app development company worldwide. Book your appointment!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="service-offer-box">
                            <div class="offer-box-head">
                                <div class="offer-box-img">
                                    <img src="assets/images/service-offer-icons/nft-app.avif" data-src="assets/images/service-offer-icons/nft-app.avif" alt="NFT App" width="50px" height="50px" class="img-fluid">
                                </div>
                                <a href="nft-development"><h4 class="heading-six">NFT App <br>Development</h4></a>
                            </div>
                            <div class="offer-box-content">
                                <p>The team of developers at Hoff & Mazor are specialized in developing and designing NFT app development as per the market standards. We understand the market dynamics and design NFT apps for clients accordingly.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="service-offer-box">
                            <div class="offer-box-head">
                                <div class="offer-box-img">
                                    <img src="assets/images/service-offer-icons/wearable-app.avif" data-src="assets/images/service-offer-icons/wearable-app.avif" alt="Wearable App" width="50px" height="50px" class="img-fluid">
                                </div>
                                <a href="wearable-app-development"><h4 class="heading-six">Wearable App</h4></a>
                            </div>
                            <div class="offer-box-content">
                                <p>In order to stay ahead of the curve, you can rely on Hoff & Mazor, a full-service wearable application development company, for helpful, cutting-edge apps for wearable devices. Developers (designers and coders) for Apple Watch and Android wearable devices are incredibly inventive, producing a wide variety of useful apps.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="service-offer-box">
                            <div class="offer-box-head">
                                <div class="offer-box-img">
                                    <img src="assets/images/service-offer-icons/machine-learning.avif" data-src="assets/images/service-offer-icons/machine-learning.avif" alt="Machine Learning" width="50px" height="50px" class="img-fluid">
                                </div>
                                <h4 class="heading-six">Machine Learning <br>App Development</h4>
                            </div>
                            <div class="offer-box-content">
                                <p>The designers at Hoff & Mazor leave no stone unturned when it comes to creating apps on the latest technologies such as Machine Learning. We offer comprehensive ML app development services to satisfy our client’s hunger for innovation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Offer Section End Here -->

    <!-- Banner Down Brands Section Start Here -->
    <section class="bandown-brands-wrap">
        <div class="container">
            <div class="bandown-brands-head">
                <h5 class="heading-two">WE PARTNER WITH TOP BRANDS</h5>
                <p>Hoff & Mazor has a partnership with these leading enterprise technology brands to deliver an innovative and seamless experience to our clients.</p>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bandown-brands-inner">
                        <!-- Banner Down Brands Include Here -->
                        <?php include 'includes/sections/banner-down.php'; ?>
                        <!-- Banner Down Brands Include Here -->
                    </div>
                </div>
            </div>
        </div>
    </section>  
    <!-- Banner Down Brands Section End Here -->

    <!-- Main CTA Section Start Here -->
    <section class="cta-main-wrap">
        <div class="container">
            <div class="cta-main-inner">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="cta-main-content" >
                            <h3 class="heading-three">Let’s Discuss Your Project</h3>
                            <p>Get Free Consultation And Let Us Know Your Project Idea To Turn It Into An Amazing</p>
                            <div class="website-main-buttons">
                                <button class="popup-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Get A Quote</button>
                                <button class="chat-btn" onclick="<?php echo $locChatClick; ?>">Live Chat</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="cta-main-img">
                            <img src="assets/images/cta-main-img.avif" data-src="assets/images/cta-main-img.avif" alt="CTA Img" width="55%" height="auto" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main CTA Section End Here -->

    <!-- Portfolio Publish Section Start Here -->
    <section class="portfolio-publish-wrap">
        <div class="container">
            <div class="portfolio-publish-head">
                <h4 class="heading-two">Our Recent Work</h4>
            </div>
        </div>
        <!-- Portfolio Publish Tablist Start Here -->
        <?php include 'includes/sections/portfolio-publish-tablist.php'; ?>
        <!-- Portfolio Publish Tablist End Here -->
    </section>
    <!-- Portfolio Publish Section End Here -->

    <!-- Step Works Section Start Here -->
    <section class="step-works-wrap">
        <div class="container">
            <div class="step-works-head">
                <h3 class="heading-two">Our Application Development Process</h3>
            </div>
            <div class="step-works-inner">
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="step-works-box">
                            <span class="step-count">01</span>
                            <div class="works-box-content">
                                <h4 class="heading-two text-center">Product Strategy</h4>
                                <p>Our application developers work and develop a strategy for developing your idea into a full-fledged mobile application that your customers would love.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="step-works-box">
                            <span class="step-count">02</span>
                            <div class="works-box-content">
                                <h4 class="heading-two text-center">UI/UX Design</h4>
                                <p>Designing an experience assisted by an impeccable interface is the pinnacle of an app’s success, and take large measures to ensure your app looks and feels right.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="step-works-box">
                            <span class="step-count">03</span>
                            <div class="works-box-content">
                                <h4 class="heading-two text-center">Testing</h4>
                                <p>Rigorous testing phases are run to ensure the app is free of lags, bugs, and other developmental issues which could slow progress or hamper a seamless user experience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="step-works-box">
                            <span class="step-count">04</span>
                            <div class="works-box-content">
                                <h4 class="heading-two text-center">Analysis & Planning</h4>
                                <p>We carefully analyze each process, prepare its findings, and developing intuitive strategies to work on the most pressing areas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="step-works-box">
                            <span class="step-count">05</span>
                            <div class="works-box-content">
                                <h4 class="heading-two text-center">App Development</h4>
                                <p>The most awaited process where our coders get down to go the groundwork by our application developers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="step-works-box">
                            <span class="step-count">06</span>
                            <div class="works-box-content">
                                <h4 class="heading-two text-center">Development & Support</h4>
                                <p>After complete development, your app idea is deployed on hosting platforms and post-launch support is initiated.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Step Works Section End Here -->

    <!-- Award Brands Section End Here -->
    <section class="award-brands-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-12 col-12">
                    <div class="award-brands-content">
                        <h5 class="heading-three">Awards & Recognitions</h5>
                    </div>
                </div>
                <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-9 col-sm-12 col-12">
                    <!-- Award Brand Slider Include Here -->
                    <?php include 'includes/sections/award-brand-slider.php'; ?>
                    <!-- Award Brand Slider Include Here -->
                </div>
            </div>
        </div>
    </section>
    <!-- Award Brands Section End Here -->

    <!-- Why Choose Section Start Here -->
    <section class="why-choose-wrap">
        <div class="container">
            <div class="why-choose-head">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-7 col-sm-12 col-12">
                        <div class="choose-head-content">
                            <h3 class="heading-two">
                                <span>Why Choose Us</span>
                                The Preference Of Top Companies
                            </h3>
                            <p>At Hoff & Mazor, We Transform Brands By Generating Ideas, Building Products And Accelerating Growth. We Go The Extra Mile To Adopt Innovation, The Latest Technologies And Seamless Procedures Which Stands Us Out From The Competition.</p>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                        <div class="choose-head-img">
                            <img src="assets/images/why-choose-head-img.avif" data-src="assets/images/why-choose-head-img.avif" alt="Why Choose" width="65%" height="100%" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="why-choose-inner">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="why-choose-box">
                            <div class="choose-box-head">
                                <div class="choose-box-img">
                                <img src="assets/images/why-choose-icons/customer-relation.avif" data-src="assets/images/why-choose-icons/customer-relation.avif" alt="Relationship" width="60px" height="60px" class="img-fluid">
                                </div>
                                <h4 class="heading-three">Customer Relationship</h4>
                            </div>
                            <div class="choose-box-content">
                                <p>Our team of developers are proficient in creating a niche-tailored app for your brand which enhances your relationship with the customers. Get an app designed for your brand today!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="why-choose-box">
                            <div class="choose-box-head">
                                <div class="choose-box-img">
                                <img src="assets/images/why-choose-icons/stronger-brand.avif" data-src="assets/images/why-choose-icons/stronger-brand.avif" alt="Stronger Brand" width="60px" height="60px" class="img-fluid">
                                </div>
                                <h4 class="heading-three">Stronger Brand</h4>
                            </div>
                            <div class="choose-box-content">
                                <p>The mission of our company is to create apps for our clients that can build credibility, familiarity and trust with their customers. Resultantly, our clients enjoy a stronger brand with enhanced brand awareness and increased customer loyalty.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="why-choose-box">
                            <div class="choose-box-head">
                                <div class="choose-box-img">
                                <img src="assets/images/why-choose-icons/insights.avif" data-src="assets/images/why-choose-icons/insights.avif" alt="Insights" width="60px" height="60px" class="img-fluid">
                                </div>
                                <h4 class="heading-three">Customer Insights</h4>
                            </div>
                            <div class="choose-box-content">
                                <p>Customer data is one of the most important marketing tools that brands can use to improve their products and target customers more efficiently. Design an app with us and enjoy the treasure of customer insights.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="why-choose-box">
                            <div class="choose-box-head">
                                <div class="choose-box-img">
                                <img src="assets/images/why-choose-icons/competitive.avif" data-src="assets/images/why-choose-icons/competitive.avif" alt="Competitive" width="60px" height="60px" class="img-fluid">
                                </div>
                                <h4 class="heading-three">Competitive Edge</h4>
                            </div>
                            <div class="choose-box-content">
                                <p>In this age of cut-throat competition, brands find it hard to survive. At Hoff & Mazor, we are experts in transforming the digital presence of our clients to give them a competitive edge in the market. Hire us to remodel your brand.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose Section End Here -->

    <!-- CTA Banner Section Start Here -->
    <section class="cta-banner-wrap">
        <div class="container">
            <div class="cta-banner-inner">
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="cta-banner-content">
                            <h3 class="heading-three">Let’s Discuss Your Project</h3>
                            <p>Get Free Consultation And Let Us Know Your Project Idea To Turn It Into An Amazing Digital Product.</p>
                            <div class="website-main-buttons">
                                <button class="popup-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Get A Quote</button>
                                <button class="chat-btn" onclick="<?php echo $locChatClick; ?>">Live Chat</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="cta-banner-img">
                            <img src="assets/images/cta-banner-img.avif" data-src="assets/images/cta-banner-img.avif" alt="CTA Img" width="55%" height="auto" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Banner Section End Here -->

    <!--FAQS Question Section Start Here -->
    <section class="faqs-sec-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xx-4 col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12">
                    <div class="faqs-sec-img">
                        <h3 class="heading-four">The Penguin Book Writers Has All The Answer You Wants?</h3>
                        <img src="assets/images/penguin-faqs.png" alt="Penguin Img" class="img-fluid">
                    </div>
                </div>
                <div class="col-xx-8 col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12">
                    <div class="faqs-sec-item">
                        <div class="faqs-sec-head">
                            <h4 class="heading-two">Frequently Asked Questions</h4>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item" >
                                <h5 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What is a book writing service?
                                    </button>
                                </h5>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    It is a professional service where experienced writers craft a manuscript based on a client's idea, outline, or story.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" >
                                <h5 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How much does the book writing process cost?
                                    </button>
                                </h5>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    The cost varies depending on the length, complexity of the book, and the writer's expertise, typically    ranging from a few thousand to tens of thousands of dollars.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" >
                                <h5 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Can I hire Penguin book writers to write my book?
                                    </button>
                                </h5>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    Definitely! We are professional online book writers with a wealth of experience in crafting compelling stories. Let’s get started, we’re more than pleased to start a project with you.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" >
                                <h5 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    What is the reason for writing a book?
                                    </button>
                                </h5>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    The reasons vary, including sharing knowledge, telling a story, personal fulfillment, establishing expertise in a field, or for entertainment purposes.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" >
                                <h5 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    How long does it take to finish writing a book?
                                    </button>
                                </h5>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    It depends on the book's length and complexity, but typically it takes anywhere from a few months to complete.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" >
                                <h5 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    How does the book writing service’s process work?
                                    </button>
                                </h5>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    Book writing service process usually involves initial consultations, drafting, revisions, and final editing, tailored to the client's specific requirements and feedback.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FAQS Question Section End Here -->

    <!-- Customer FeedBack Section Start Here -->
    <section class="customer-feedback-wrap">
        <div class="container">
            <div class="customer-feedback-head">
                <h4 class="heading-two">Hear From Our Customers</h4>
            </div>
            <div class="customer-feedback-inner">
                <div class="customer-feedback-slider">
                    <div class="feedback-slider-box">
                        <div class="feedback-slider-thumb">
                            <img src="assets/images/customer-feedback-thumb/thumb-boy001.png" alt="icon" class="img-fluid">
                        </div>
                        <div class="feedback-slider-head">
                            <h5 class="heading-five">Brian Kilmeade</h5>
                            <span>
                                Teddy and Booker
                                <img src="assets/images/flag-usa.jpg" alt="USA Flag" class="img-fluid">
                            </span>
                        </div>
                        <div class="feedback-slider-content">
                            <p>They navigated the complexities of my science fiction world with ease, bringing my vision to life. The book cover alone has drawn in so many readers. Incredible work!</p>
                        </div>
                        <div class="feedback-slider-ratings">
                            <div class="rating-star-icons">
                                <img src="assets/images/rating-star.webp" alt="icon" class="img-fluid">
                                <img src="assets/images/rating-star.webp" alt="icon" class="img-fluid">
                                <img src="assets/images/rating-star.webp" alt="icon" class="img-fluid">
                                <img src="assets/images/rating-star.webp" alt="icon" class="img-fluid">
                                <img src="assets/images/rating-star.webp" alt="icon" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="feedback-slider-box">
                        <div class="feedback-slider-thumb">
                            <img src="assets/images/customer-feedback-thumb/thumb-boy002.png" alt="icon" class="img-fluid">
                        </div>
                        <div class="feedback-slider-head">
                            <h5 class="heading-five">Alice McVeigh</h5>
                            <span>
                                Harriet
                                <img src="assets/images/flag-uk.jpg" alt="UK Flag" class="img-fluid">
                            </span>
                        </div>
                        <div class="feedback-slider-content">
                            <p>Their team understands the business book market so well. Their guidance in structuring my book and making it accessible was invaluable. It's now a must-read in its niche.</p>
                        </div>
                        <div class="feedback-slider-ratings">
                            <div class="rating-star-icons">
                                <img src="assets/images/rating-star.webp" alt="icon" class="img-fluid">
                                <img src="assets/images/rating-star.webp" alt="icon" class="img-fluid">
                                <img src="assets/images/rating-star.webp" alt="icon" class="img-fluid">
                                <img src="assets/images/rating-star.webp" alt="icon" class="img-fluid">
                                <img src="assets/images/rating-star.webp" alt="icon" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="feedback-slider-box">
                        <div class="feedback-slider-thumb">
                            <img src="assets/images/customer-feedback-thumb/thumb-boy003.png" alt="icon" class="img-fluid">
                        </div>
                        <div class="feedback-slider-head">
                            <h5 class="heading-five">David Schulze</h5>
                            <span>
                                The Sins of Jack Branson
                                <img src="assets/images/flag-aus.jpg" alt="Australia Flag" class="img-fluid">
                            </span>
                        </div>
                        <div class="feedback-slider-content">
                            <p>Creating a children's book with this team was a joy. Their illustrators are phenomenal, and the publishing process was handled with care and expertise. My book is a hit with kids!</p>
                        </div>
                        <div class="feedback-slider-ratings">
                            <div class="rating-star-icons">
                                <img src="assets/images/rating-star.webp" alt="icon" class="img-fluid">
                                <img src="assets/images/rating-star.webp" alt="icon" class="img-fluid">
                                <img src="assets/images/rating-star.webp" alt="icon" class="img-fluid">
                                <img src="assets/images/rating-star.webp" alt="icon" class="img-fluid">
                                <img src="assets/images/rating-star.webp" alt="icon" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="feedback-slider-box">
                        <div class="feedback-slider-thumb">
                            <img src="assets/images/customer-feedback-thumb/thumb-boy004.png" alt="icon" class="img-fluid">
                        </div>
                        <div class="feedback-slider-head">
                            <h5 class="heading-five">Henry Winkler</h5>
                            <span>
                                Being Henry
                                <img src="assets/images/flag-uk.jpg" alt="UK Flag" class="img-fluid">
                            </span>
                        </div>
                        <div class="feedback-slider-content">
                            <p>Their handling of my complex historical research was impeccable. They maintained the academic integrity of my work while making it engaging for a broader audience. Truly professional service.</p>
                        </div>
                        <div class="feedback-slider-ratings">
                            <div class="rating-star-icons">
                                <img src="assets/images/rating-star.webp" alt="icon" class="img-fluid">
                                <img src="assets/images/rating-star.webp" alt="icon" class="img-fluid">
                                <img src="assets/images/rating-star.webp" alt="icon" class="img-fluid">
                                <img src="assets/images/rating-star.webp" alt="icon" class="img-fluid">
                                <img src="assets/images/rating-star.webp" alt="icon" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Customer FeedBack Section End Here -->
    
</main>

<?php
include 'includes/footer.php';
$page = 'home';
?>