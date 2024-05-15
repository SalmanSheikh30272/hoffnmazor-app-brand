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
                            <img src="assets/images/cta-banner-img.avif" data-src="assets/images/cta-banner-img.avif" alt="CTA Img" width="50%" height="auto" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Banner Section End Here -->

    <!-- Genre industry Section Start Here -->
    <section class="genre-industry-wrap">
        <div class="container">
            <div class="genre-industry-head">
                <h5 class="heading-two">You Name It. We Serve It.</h5>
                <p>We Have A Diversified Range Of Clientele Pertaining To Different Industries. We Work With Every Leading Industry, But These Are Our Specialities:</p>
            </div>
            <!-- Genre Industry Inner Include Here -->
            <?php include 'includes/sections/genre-industry-inner.php'; ?>
            <!-- Genre Industry Inner Include Here -->
        </div>
    </section>
    <!-- Genre industry Section End Here -->

    <!-- FAQS Section Start Here -->
    <section class="faqs-sec-wrap">
        <div class="container-fluid">
            <div class="faqs-sec-head">
                <h4 class="heading-two">Frequently Asked Questions!</h4>
            </div>
            <div class="row align-items-center">
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">
                    <div class="faqs-tab-list">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active d-none" id="pills-img-tab" data-bs-toggle="pill" data-bs-target="#pills-img" type="button" role="tab" aria-controls="pills-img" aria-selected="true"></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-q1-tab" data-bs-toggle="pill" data-bs-target="#pills-q1" type="button" role="tab" aria-controls="pills-q1" aria-selected="false">What Is The Process Involved In App Design And Development?</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-q2-tab" data-bs-toggle="pill" data-bs-target="#pills-q2" type="button" role="tab" aria-controls="pills-q2" aria-selected="false">How Can I Find The Right App Development Company?</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-q3-tab" data-bs-toggle="pill" data-bs-target="#pills-q3" type="button" role="tab" aria-controls="pills-q3" aria-selected="false">How Can I Hire App Developers Online?</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-q4-tab" data-bs-toggle="pill" data-bs-target="#pills-q4" type="button" role="tab" aria-controls="pills-q4" aria-selected="false">What Services Does An App Design And Development Agency Provide?</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-q5-tab" data-bs-toggle="pill" data-bs-target="#pills-q5" type="button" role="tab" aria-controls="pills-q5" aria-selected="false">Where Can I Find Reliable Application Developers?</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
                    <div class="faqs-tab-content">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-img" role="tabpanel" aria-labelledby="pills-img-tab" tabindex="0">
                                <div class="faqs-tab-inner">
                                    <div class="faqs-tab-inner-img">
                                        <img src="assets/images/process-section/android-process.png" alt="img" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-q1" role="tabpanel" aria-labelledby="pills-q1-tab" tabindex="0">
                                <div class="faqs-tab-inner">
                                    <div class="faqs-tab-inner-content">
                                        <h5 class="heading-three">Custom IOS App Development</h5>
                                        <p>The process of app design and development involves several stages, starting from conceptualization to deployment. It typically includes the following steps: research and analysis, defining requirements, wireframing and prototyping, UI/UX design, coding and development, testing and quality assurance, deployment, and ongoing maintenance.</p>
                                        <ul>
                                            <li>
                                                <p><b>Experience and Expertise:</b> Look for a company with a proven track record and experience in app design and development. Check their portfolio and client testimonials to assess their capabilities.</p>
                                            </li>
                                            <li>
                                                <p><b>Team of Developers:</b> Ensure the company has a skilled and diverse team of app developers who can handle various platforms and technologies.</p>
                                            </li>
                                            <li>
                                                <p><b>Client Collaboration:</b> Look for a company that values client collaboration and involves you in the decision-making process.</p>
                                            </li>
                                            <li>
                                                <p><b>Quality Assurance:</b> Check if the company follows robust quality assurance practices to ensure the delivery of high-quality apps.</p>
                                            </li>
                                            <li>
                                                <b>Cost and Timeline:</b>
                                                <p>Cost and Timeline: Consider the company's pricing structure and estimated timeline for the project.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-q2" role="tabpanel" aria-labelledby="pills-q2-tab" tabindex="0">
                                <div class="faqs-tab-inner">
                                    <div class="faqs-tab-inner-img">
                                        <img src="assets/images/process-section/game-process.webp" alt="img" class="img-fluid">
                                    </div>
                                    <div class="faqs-tab-inner-content">
                                        <h3>Game Development Services</h3>
                                        <p>Web Designers LLC helps brands build a seamless product that meets business and market needs effectively through an engaging user experience to further develop loyalty.</p>
                                        <div class="faqs-tab-inner-item">
                                            <div class="faqs-inneritesms-content">
                                                <h4>
                                                    <img src="assets/images/process-section/process-icon1.webp" alt="icon" class="img-fluid">
                                                    Mobile Game Development With Unity
                                                </h4>
                                                <p>Unity is frequently the engine of choice for mobile game firms looking for quick and dependable game production.</p>
                                            </div>
                                        </div>
                                        <div class="faqs-tab-inner-item">
                                            <div class="faqs-inneritesms-content">
                                                <h4>
                                                    <img src="assets/images/process-section/process-icon2.webp" alt="icon" class="img-fluid">
                                                    AR/VR Game Development
                                                </h4>
                                                <p>Augmented reality is a novel way to entice choosy players by providing more engagement to your software.</p>
                                            </div>
                                        </div>
                                        <div class="faqs-tab-inner-item">
                                            <div class="faqs-inneritesms-content">
                                                <h4>
                                                    <img src="assets/images/process-section/process-icon3.webp" alt="icon" class="img-fluid">
                                                    2D And 3D Mobile Game Development
                                                </h4>
                                                <p>Millions of Android and iOS users have driven developers to remake 2D and 3D games.</p>
                                            </div>
                                        </div>
                                        <div class="website-main-buttons">
                                            <button class="chat-btn">Let's Chat With Us</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-q3" role="tabpanel" aria-labelledby="pills-q3-tab" tabindex="0">
                                <div class="faqs-tab-inner">
                                    <div class="faqs-tab-inner-img">
                                        <img src="assets/images/process-section/process-1.png" alt="img" class="img-fluid">
                                    </div>
                                    <div class="faqs-tab-inner-content">
                                        <h3>Services For AR/VR App Development</h3>
                                        <p>Because each of our projects is special and one-of-a-kind, we keep our augmented reality and virtual reality app development process incredibly individualized.</p>
                                        <div class="faqs-tab-inner-item">
                                            <div class="faqs-inneritesms-content">
                                                <h4>
                                                    <img src="assets/images/process-section/process-icon1.webp" alt="icon" class="img-fluid">
                                                    3D Modeling
                                                </h4>
                                                <p>We make the most of 3D modeling to offer your product marketing and branding vision a new perspective.</p>
                                            </div>
                                        </div>
                                        <div class="faqs-tab-inner-item">
                                            <div class="faqs-inneritesms-content">
                                                <h4>
                                                    <img src="assets/images/process-section/process-icon2.webp" alt="icon" class="img-fluid">
                                                    Gesture And Motion
                                                </h4>
                                                <p>This is as near to magic as it gets. Users just move their bodies and hands to engage.</p>
                                            </div>
                                        </div>
                                        <div class="faqs-tab-inner-item">
                                            <div class="faqs-inneritesms-content">
                                                <h4>
                                                    <img src="assets/images/process-section/process-icon3.webp" alt="icon" class="img-fluid">
                                                    AR Apps That Are Location-Based
                                                </h4>
                                                <p>With our augmented reality app development services, develop an augmented reality app that is location-based and uses the device's accelerometer, compass, GPS, and other sensors to provide comprehensive and precise location information.</p>
                                            </div>
                                        </div>
                                        <div class="website-main-buttons">
                                            <button class="chat-btn">Let's Chat With Us</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-q4" role="tabpanel" aria-labelledby="pills-q4-tab" tabindex="0">
                                <div class="faqs-tab-inner">
                                    <div class="faqs-tab-inner-img">
                                        <img src="assets/images/process-section/process-1.png" alt="img" class="img-fluid">
                                    </div>
                                    <div class="faqs-tab-inner-content">
                                        <h3>Services For AR/VR App Development</h3>
                                        <p>Because each of our projects is special and one-of-a-kind, we keep our augmented reality and virtual reality app development process incredibly individualized.</p>
                                        <div class="faqs-tab-inner-item">
                                            <div class="faqs-inneritesms-content">
                                                <h4>
                                                    <img src="assets/images/process-section/process-icon1.webp" alt="icon" class="img-fluid">
                                                    3D Modeling
                                                </h4>
                                                <p>We make the most of 3D modeling to offer your product marketing and branding vision a new perspective.</p>
                                            </div>
                                        </div>
                                        <div class="faqs-tab-inner-item">
                                            <div class="faqs-inneritesms-content">
                                                <h4>
                                                    <img src="assets/images/process-section/process-icon2.webp" alt="icon" class="img-fluid">
                                                    Gesture And Motion
                                                </h4>
                                                <p>This is as near to magic as it gets. Users just move their bodies and hands to engage.</p>
                                            </div>
                                        </div>
                                        <div class="faqs-tab-inner-item">
                                            <div class="faqs-inneritesms-content">
                                                <h4>
                                                    <img src="assets/images/process-section/process-icon3.webp" alt="icon" class="img-fluid">
                                                    AR Apps That Are Location-Based
                                                </h4>
                                                <p>With our augmented reality app development services, develop an augmented reality app that is location-based and uses the device's accelerometer, compass, GPS, and other sensors to provide comprehensive and precise location information.</p>
                                            </div>
                                        </div>
                                        <div class="website-main-buttons">
                                            <button class="chat-btn">Let's Chat With Us</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-q5" role="tabpanel" aria-labelledby="pills-q5-tab" tabindex="0">
                                <div class="faqs-tab-inner">
                                    <div class="faqs-tab-inner-img">
                                        <img src="assets/images/process-section/process-1.png" alt="img" class="img-fluid">
                                    </div>
                                    <div class="faqs-tab-inner-content">
                                        <h3>Services For AR/VR App Development</h3>
                                        <p>Because each of our projects is special and one-of-a-kind, we keep our augmented reality and virtual reality app development process incredibly individualized.</p>
                                        <div class="faqs-tab-inner-item">
                                            <div class="faqs-inneritesms-content">
                                                <h4>
                                                    <img src="assets/images/process-section/process-icon1.webp" alt="icon" class="img-fluid">
                                                    3D Modeling
                                                </h4>
                                                <p>We make the most of 3D modeling to offer your product marketing and branding vision a new perspective.</p>
                                            </div>
                                        </div>
                                        <div class="faqs-tab-inner-item">
                                            <div class="faqs-inneritesms-content">
                                                <h4>
                                                    <img src="assets/images/process-section/process-icon2.webp" alt="icon" class="img-fluid">
                                                    Gesture And Motion
                                                </h4>
                                                <p>This is as near to magic as it gets. Users just move their bodies and hands to engage.</p>
                                            </div>
                                        </div>
                                        <div class="faqs-tab-inner-item">
                                            <div class="faqs-inneritesms-content">
                                                <h4>
                                                    <img src="assets/images/process-section/process-icon3.webp" alt="icon" class="img-fluid">
                                                    AR Apps That Are Location-Based
                                                </h4>
                                                <p>With our augmented reality app development services, develop an augmented reality app that is location-based and uses the device's accelerometer, compass, GPS, and other sensors to provide comprehensive and precise location information.</p>
                                            </div>
                                        </div>
                                        <div class="website-main-buttons">
                                            <button class="chat-btn">Let's Chat With Us</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQS Section End Here -->

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