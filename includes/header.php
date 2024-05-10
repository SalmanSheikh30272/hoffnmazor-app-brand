<!doctype html>
<html lang="en">

<head>
    <!-- Meta Title And Discription Dynamic Brands PHP Start -->
    <?php  include 'includes/tags/tags.php';?>
    <!-- Meta Title And Discription Dynamic Brands PHP End -->

    <!-- Variable File Inlcude Start -->
    <?php  include 'includes/sections/variables-file.php';?>
    <!-- Variable File Inlcude End -->
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.webp">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
</head>

<body>
    
    <header class="main-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="void:;">
                    <img src="assets/images/main-logo.avif" data-src="assets/images/main-logo.avif" alt="Website Logo" class="logo" width="100%" height="100%" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="navbar-main-nav">
                        <div class="navbar-main-center">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="void:;">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about-us">About</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="void:;" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Service
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="mobile-app-development">Mobile App Development</a></li>
                                        <li><a class="dropdown-item" href="ios-app-development">IOS App Development</a></li>
                                        <li><a class="dropdown-item" href="android-app-development">Android App Development</a></li>
                                        <li><a class="dropdown-item" href="game-app-development">Game App Development </a></li>
                                        <li><a class="dropdown-item" href="enterprise-mobile-app-development">Enterprise Mobile App Development</a></li>
                                        <li><a class="dropdown-item" href="hybrid-mobile-app-development">Hybrid Mobile App Development</a></li>
                                        <li><a class="dropdown-item" href="prototype-mobile-app-development">Prototype Mobile App Development</a></li>
                                        <li><a class="dropdown-item" href="react-native-app-development">React Native App Development</a></li>
                                        <li><a class="dropdown-item" href="nft-development">NFT Development</a></li>
                                        <li><a class="dropdown-item" href="wearable-app-development">Wearable App Development</a></li>
                                        <li><a class="dropdown-item" href="cross-platform-app-development">Cross-Platform App Development</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="void:;" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Industries
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/industry/healthcare-app-development-services">Healthcare App Development </a></li>
                                        <li><a class="dropdown-item" href="/industry/taxi-app-development-services">Taxi App Development </a></li>
                                        <li><a class="dropdown-item" href="/industry/real-estate-mobile-app-development">Real Estate Mobile App Development</a></li>
                                        <li><a class="dropdown-item" href="/industry/ecommerce-app-development">Ecommerce App Development</a></li>
                                        <li><a class="dropdown-item" href="/industry/restaurant-app-development">Restaurant App Development</a></li>
                                        <li><a class="dropdown-item" href="/industry/manufacturing-app-development-services">Manufacturing App Development</a></li>
                                        <li><a class="dropdown-item" href="/industry/retail-app-development-services">Retail App Development</a></li>
                                        <li><a class="dropdown-item" href="/industry/fitness-app-development-services">Fitness App Development</a></li>
                                        <li><a class="dropdown-item" href="/industry/upi-payment-app-development-services">UPI Payment App Development</a></li>
                                        <li><a class="dropdown-item" href="/industry/pdf-app-development">PDF App Development</a></li>
                                        <li><a class="dropdown-item" href="/industry/ride-sharing-app-services">Ride Sharing App </a></li>
                                        <li><a class="dropdown-item" href="/industry/parking-space-app-services">Parking Space App</a></li>  
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="our-portfolio">Portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.hoffnmazor.com/blog/">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact-us">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="website-main-buttons">
                            <div class="headphone-head">
                                <i class="fas fa-headphones-alt"></i>
                                <span>24/7</span>
                            </div>
                            <button class="chat-btn" onclick="<?php echo $locChatClick; ?>">Live Chat</button>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>