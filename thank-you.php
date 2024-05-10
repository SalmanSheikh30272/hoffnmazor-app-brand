<?php
include 'includes/header.php';
$page = 'home';
?>

<style>
/*Thankyou Page Section Css Start Here*/
section.thankyou-page-wrap{
    background: #181223;
    padding: 150px 0 100px;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    z-index: 1;
}
.thankyou-page-wrap .thankyou-page-content{
    background: #211930;
    padding: 50px 50px;
    border-radius: 20px;
    border: 10px double #E90041;
    text-align: center;
}
.thankyou-page-content h1{
    font-size: 100px;
    line-height: 100px;
    color: transparent;
    margin: 0 auto 30px;
    width: 75%;
    letter-spacing: 30px;
    position: relative;
    -webkit-text-stroke: 0.3vw #E90041;
}
.thankyou-page-content h1::before{
    content: attr(data-text);
    position: absolute;
    top: 0;
    left: 0;
    width: 75%;
    height: 100%;
    color: #fff;
    margin: 0 auto 30px;
    border-right: 2px solid #E90041;
    -webkit-text-stroke: 0vw #E90041;
    overflow: hidden;
    animation: animate 6s linear infinite;
}
@keyframes animate{
    0%,10%,100%{
        width: 0;
    }
    70%,90%{
        width: 100%;
    }
}
.thankyou-page-content a.back-home-btn{
    background: #E90041;
    color: #fff;
    border: 2px solid #E90041;
    font-size: 16px;
    width: 175px;
    height: 45px;
    border-radius: 0;
    padding: 10px 10px;
    margin: 20px auto 0;
    display: flex;
    align-items: center;
    justify-content: center;
    text-transform: capitalize;
    transition: all .3s ease-in-out;
    animation: bounce2 2s ease infinite;
}
.thankyou-page-content a.back-home-btn:hover{
    background: #181223;
    border: 2px solid #181223;
}
/*Thankyou Page Section Css End Here*/

@media only screen and (min-width: 992px) and (max-width: 1199px) {
/*Thankyou Page Section Responsive Css Start Here*/
.thankyou-page-content h1{
    font-size: 85px;
    line-height: 85px;
    letter-spacing: 20px;
    width: 90%;
}
.thankyou-page-content h1::before{
    width: 90%;
}
/*Thankyou Page Section Responsive Css End Here*/
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
/*Thankyou Page Section Responsive Css Start Here*/
.thankyou-page-wrap::before{
    width: 300px;
    height: 300px;
}
.thankyou-page-wrap::after{
    width: 300px;
    height: 300px;
}
.thankyou-page-content h1{
    font-size: 75px;
    line-height: 75px;
    letter-spacing: 20px;
    width: 100%;
}
.thankyou-page-content h1::before{
    width: 100%;
}
.thankyou-page-content a.back-home-btn{
    font-size: 16px;
}
/*Thankyou Page Section Responsive Css End Here*/
}
@media only screen and (min-width: 576px) and (max-width: 767px) {
/*Thankyou Page Section Responsive Css Start Here*/
.thankyou-page-wrap::before{
    width: 300px;
    height: 300px;
}
.thankyou-page-wrap::after{
    width: 300px;
    height: 300px;
}
.thankyou-page-content h1{
    font-size: 50px;
    line-height: 50px;
    letter-spacing: 10px;
    width: 100%;
}
.thankyou-page-content h1::before{
    width: 100%;
}
.thankyou-page-content a.back-home-btn{
    font-size: 16px;
}
/*Thankyou Page Section Responsive Css End Here*/
}
@media only screen and (min-width: 300px) and (max-width: 575px) {
/*Thankyou Page Section Responsive Css Start Here*/
.thankyou-page-wrap::before{
    width: 200px;
    height: 200px;
}
.thankyou-page-wrap::after{
    width: 200px;
    height: 200px;
}
.thankyou-page-content h1{
    font-size: 24px;
    line-height: 30px;
    letter-spacing: 5px;
    width: 100%;
}
.thankyou-page-content h1::before{
    width: 100%;
}
.thankyou-page-content a.back-home-btn{
    font-size: 16px;
}
/*Thankyou Page Section Responsive Css End Here*/
}
</style>

<main>

    <!-- Thankyou Page Section Start Here -->
    <section class="thankyou-page-wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                    <div class="thankyou-page-content">
                        <h1 data-text="Thankyou...">Thankyou...</h1>
                        <a href="/" class="back-home-btn">
                            Back To Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Thankyou Page Section End Here -->

</main>