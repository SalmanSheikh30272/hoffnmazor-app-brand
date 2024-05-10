<?php
include 'includes/header.php';
$page = 'home';
?>

<main>

    <!-- Banner Main Section Start Here -->
    <section class="banner-main-sec banner-about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="banner-main-content" data-aos="fade-right" data-aos-duration="1500">
                    <h1 class="heading-one">About Penguin Book Writers!</h1>
                    <p>We Feel Proud To Say That Our Team Of Creative Writers Is Highly Skilled And Unquestionably The Best In The Industry.</p>
                    <div class="website-main-buttons">
                        <button class="popup-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Let's Talk About Your Project!</button>
                    </div>
                </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="banner-main-img" data-aos="fade-left" data-aos-duration="1500">
                        <img src="assets/images/banner-about-img.png" alt="Banner About Img" class="img-fluid box2">
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
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="unlock-story-img" data-aos="fade-right" data-aos-duration="1000">
                            <img src="assets/images/contact-main-book-marketing.png" alt="Contact Main Book Marketing" class="img-fluid box2">
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="unlock-story-content" data-aos="fade-left" data-aos-duration="1000">
                            <h2 class="heading-three">Know Who We Are</h2>
                            <p>We Are Essentially A Team Of Writers Who Are Driven By Imagination And Backed By Creativity. We Started This Company With One Aim In Mind; To Give Our Clients A Launching Pad To Convert Them Into Successful Writers And Best-Sellers. Now, Almost A Decade Later, We Have Enabled A Broad Range Of Our Clients Who Comprise Celebrities To Business Executives Turn Into Successful Authors.</p>
                            <p>We Feel Proud To Say That Our Team Of Creative Writers Is Highly Skilled And Unquestionably The Best In The Industry. One Of The Distinctive Features Of Our Writers Is Their Professionalism Towards Their Job; We Make Sure To Deliver The Project To Our Clients Within The Given Time.</p>
                            <div class="website-main-buttons">
                                <button class="popup-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Let's Get Started</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Unlock Story Section End Here -->

    <!-- Counter Satisfy Section Start Here -->
     <section class="counter-satisfy-wrap">
        <!-- Counter Satisfy Section Include Here -->
        <?php include 'includes/sections/counter-satisfy-sec.php'; ?>
        <!-- Counter Satisfy Section Include Here -->
    </section>  
    <!-- Counter Satisfy Section End Here -->

    <!-- Portfolio Publish Section Start Here -->
    <section class="portfolio-publish-wrap">
        <div class="container">
            <div class="portfolio-publish-head" data-aos="fade-down" data-aos-duration="1000">
                <h3 class="heading-two">Range Of Genres We Cater</h3>
            </div>
        </div>
        <!-- Portfolio Publish Tablist Start Here -->
        <?php include 'includes/sections/portfolio-publish-tablist.php'; ?>
        <!-- Portfolio Publish Tablist End Here -->
    </section>
    <!-- Portfolio Publish Section End Here -->

    <!-- Main CTA Section Start Here -->
    <section class="cta-main-wrap">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                    <div class="cta-main-content" data-aos="zoom-in-down" data-aos-duration="1500">
                        <h3 class="heading-three">Do You Want To Become A Successful Author?</h3>
                        <p>Hire our team of highly experienced and dedicated book writers today and leverage their expertise to produce your best-selling book!</p>
                        <div class="website-main-buttons">
                            <button class="chat-btn" onclick="<?php echo $locChatClick; ?>">Live Chat!</button>
                            <a href="tel:<?php echo $locNumber; ?>" class="call-btn"><?php echo $locNumber; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main CTA Section End Here -->

    <!-- Customer FeedBack Section Start Here -->
    <section class="customer-feedback-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="customer-feedback-content">
                        <div class="feedback-content-head" data-aos="fade-down-right" data-aos-duration="1500">
                            <h3 class="heading-two">Hear From Our Authors</h3>
                        </div>
                        <div class="customer-feedback-slider">
                            <div class="feedback-slider-box" data-aos="fade-right" data-aos-duration="1000">
                                <div class="feedback-box-head">
                                    <div class="feedback-slider-thumb">
                                        <img src="assets/images/customer-feedback-thumb/thumb-boy001.png" alt="Thumb Boy" class="img-fluid">
                                    </div>
                                    <div class="feedback-slider-text">
                                        <h4 class="heading-five">Brian Kilmeade</h4>
                                        <p>Teddy and Booker</p>
                                        <div class="feedback-slider-ratings">
                                            <div class="ratings-stars-img">
                                                <img src="assets/images/rating-star.webp" alt="Rating Star Image" class="img-fluid">
                                                <img src="assets/images/rating-star.webp" alt="Rating Star Image" class="img-fluid">
                                                <img src="assets/images/rating-star.webp" alt="Rating Star Image" class="img-fluid">
                                                <img src="assets/images/rating-star.webp" alt="Rating Star Image" class="img-fluid">
                                                <img src="assets/images/rating-star.webp" alt="Rating Star Image" class="img-fluid">
                                            </div>
                                            <span>4.6/5.0</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="feedback-slider-para">
                                    <p>They navigated the complexities of my science fiction world with ease, bringing my vision to life. The book cover alone has drawn in so many readers. Incredible work!</p>
                                </div>
                            </div>
                            <div class="feedback-slider-box" data-aos="fade-right" data-aos-duration="1000">
                                <div class="feedback-box-head">
                                    <div class="feedback-slider-thumb">
                                        <img src="assets/images/customer-feedback-thumb/thumb-boy002.png" alt="Thumb Boy" class="img-fluid">
                                    </div>
                                    <div class="feedback-slider-text">
                                        <h4 class="heading-five">Alice McVeigh</h4>
                                        <p>Harriet</p>
                                        <div class="feedback-slider-ratings">
                                            <div class="ratings-stars-img">
                                                <img src="assets/images/rating-star.webp" alt="Rating Star Image" class="img-fluid">
                                                <img src="assets/images/rating-star.webp" alt="Rating Star Image" class="img-fluid">
                                                <img src="assets/images/rating-star.webp" alt="Rating Star Image" class="img-fluid">
                                                <img src="assets/images/rating-star.webp" alt="Rating Star Image" class="img-fluid">
                                                <img src="assets/images/rating-star.webp" alt="Rating Star Image" class="img-fluid">
                                            </div>
                                            <span>4.6/5.0</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="feedback-slider-para">
                                    <p>Their team understands the business book market so well. Their guidance in structuring my book and making it accessible was invaluable. It's now a must-read in its niche.</p>
                                </div>
                            </div>
                            <div class="feedback-slider-box" data-aos="fade-right" data-aos-duration="1000">
                                <div class="feedback-box-head">
                                    <div class="feedback-slider-thumb">
                                        <img src="assets/images/customer-feedback-thumb/thumb-boy003.png" alt="Thumb Boy" class="img-fluid">
                                    </div>
                                    <div class="feedback-slider-text">
                                        <h4 class="heading-five">David Schulze</h4>
                                        <p>The Sins of Jack Branson</p>
                                        <div class="feedback-slider-ratings">
                                            <div class="ratings-stars-img">
                                                <img src="assets/images/rating-star.webp" alt="Rating Star Image" class="img-fluid">
                                                <img src="assets/images/rating-star.webp" alt="Rating Star Image" class="img-fluid">
                                                <img src="assets/images/rating-star.webp" alt="Rating Star Image" class="img-fluid">
                                                <img src="assets/images/rating-star.webp" alt="Rating Star Image" class="img-fluid">
                                                <img src="assets/images/rating-star.webp" alt="Rating Star Image" class="img-fluid">
                                            </div>
                                            <span>4.6/5.0</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="feedback-slider-para">
                                    <p>Creating a children's book with this team was a joy. Their illustrators are phenomenal, and the publishing process was handled with care and expertise. My book is a hit with kids!</p>
                                </div>
                            </div>
                            <div class="feedback-slider-box" data-aos="fade-right" data-aos-duration="1000">
                                <div class="feedback-box-head">
                                    <div class="feedback-slider-thumb">
                                        <img src="assets/images/customer-feedback-thumb/thumb-boy004.png" alt="Thumb Boy" class="img-fluid">
                                    </div>
                                    <div class="feedback-slider-text">
                                        <h4 class="heading-five">Michael Johnson - Henry Winkler</h4>
                                        <p>Being Henry</p>
                                        <div class="feedback-slider-ratings">
                                            <div class="ratings-stars-img">
                                                <img src="assets/images/rating-star.webp" alt="Rating Star Image" class="img-fluid">
                                                <img src="assets/images/rating-star.webp" alt="Rating Star Image" class="img-fluid">
                                                <img src="assets/images/rating-star.webp" alt="Rating Star Image" class="img-fluid">
                                                <img src="assets/images/rating-star.webp" alt="Rating Star Image" class="img-fluid">
                                                <img src="assets/images/rating-star.webp" alt="Rating Star Image" class="img-fluid">
                                            </div>
                                            <span>4.6/5.0</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="feedback-slider-para">
                                    <p>Their handling of my complex historical research was impeccable. They maintained the academic integrity of my work while making it engaging for a broader audience. Truly professional service.</p>
                                </div>
                            </div>
                        </div>
                        <div class="customer-feedback-reviews" data-aos="fade-up-right" data-aos-duration="1500">
                            <ul class="feedback-reviews-img">
                                <li><img src="assets/images/reviews-thumb/thumb-boy-02.png" alt="Thumb Boy Small" class="img-fluid"></li>
                                <li><img src="assets/images/reviews-thumb/thumb-boy-03.png" alt="Thumb Boy Small" class="img-fluid"></li>
                                <li><img src="assets/images/reviews-thumb/thumb-girl-01.png" alt="Thumb Girl Small" class="img-fluid"></li>
                                <li><img src="assets/images/reviews-thumb/thumb-girl-02.png" alt="Thumb Girl Small" class="img-fluid"></li>
                                <li><img src="assets/images/reviews-thumb/thumb-girl-03.png" alt="Thumb Girl Small" class="img-fluid"></li>
                                <li><img src="assets/images/reviews-thumb/thumb-boy-01.png" alt="Thumb Boy Small" class="img-fluid"></li>
                            </ul>
                            <span>400+ Books Published</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="customer-feedbcack-images" data-aos="fade-left" data-aos-duration="1000">
                        <img src="assets/images/customer-feedback-img.png" alt="Customer feedback Img" class="img-fluid box2">
                        <img src="assets/images/customer-feedback-img1.png" alt="Customer feedback Img" class="img-fluid box2">
                        <img src="assets/images/customer-feedback-img2.png" alt="Customer feedback Img" class="img-fluid box2">
                        <img src="assets/images/customer-feedback-img3.png" alt="Customer feedback Img" class="img-fluid box2">
                    </div>                    
                </div>
            </div>
        </div>
    </section>
    <!-- Customer FeedBack Section End Here -->

    <!--FAQS Question Section Start Here -->
    <section class="faqs-sec-wrap">
        <div class="container">
            <div class="faqs-sec-head" data-aos="fade-down" data-aos-duration="1500">
                <h4 class="heading-two">Frequently Asked Questions</h4>
            </div>
            <div class="row align-items-center">
                <div class="col-xx-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="faqs-sec-item">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item"  data-aos="fade-right" data-aos-duration="1500">
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
                            <div class="accordion-item"  data-aos="fade-right" data-aos-duration="1500">
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
                            <div class="accordion-item"  data-aos="fade-right" data-aos-duration="1500">
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
                            <div class="accordion-item"  data-aos="fade-right" data-aos-duration="1500">
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
                            <div class="accordion-item"  data-aos="fade-right" data-aos-duration="1500">
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
                            <div class="accordion-item"  data-aos="fade-right" data-aos-duration="1500">
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

    <!--Contact Main Form Start Here -->
    <section class="contact-main-wrap contact-about-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="contact-main-image" data-aos="fade-right" data-aos-duration="1000">
                        <img src="assets/images/contact-main-book.png" alt="Contact Main Book" class="img-fluid box2">
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="contact-main-inner" ta-aos="fade-left" data-aos-duration="1000">
                        <div class="contact-inner-head">
                            <h4 class="heading-three">Talk To Us!</h4>
                            <p>Submit Your Details And Get Upto 50% Discount On Our Services!</p>
                        </div>
                        <div class="contact-main-form">
                            <!-- Contact Main form Include Here -->
                            <?php include 'includes/sections/contact-main-form.php'; ?>
                            <!-- Contact Main form Include Here -->
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