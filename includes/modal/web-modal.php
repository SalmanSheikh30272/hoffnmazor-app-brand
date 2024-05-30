<!-- PopUp Modal Start Here -->
<div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" fdprocessedid="0122n">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 p-0">
                            <div class="modal-body-img1">
                                <img src="assets/images/unlock-story-marketing.png" alt="img" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 p-0">
                            <div class="modal-body-form">
                                <h3>Save Upto 30% <span>Limited Time Offer</span></h3>
                                <form action="https://leads.infinityprojectmanager.com/brand/hoffnmazor/lead" method="GET">
                                    <input type="hidden" name="brand_name" value="hoffnmazor.com">
                                    <input type="hidden" id="lead_area" name="lead_area" value="http://www.hoffnmazor.com">
                                    <div class="popup-form-list">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Your Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Your Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="phone" placeholder="Phone Number" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea id="message" name="message" placeholder="Your Message" required></textarea>
                                        </div>
                                        <div class="form-group form-group-last">
                                            <button class="submit-btn" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- PopUp Modal End Here -->

<style>
/* PopUp Modal Css Start Here */
.modaL_order{}
#staticBackdrop .modal-content{
    background: #F6F6F6;
    border-radius: 0px;
    border: none;
    position: relative;
    z-index: 1;
}
#staticBackdrop .modal-content::before{
    content: '';
    position: absolute;
    bottom: -20%;
    left: -20%;
    background: #E90041;
    width: 250px;
    height: 250px;
    border-radius: 100%;
    z-index: -1;
    margin: 0 auto 0 0;
    opacity: 0.5;
}
#staticBackdrop .modal-content::after{
    content: '';
    position: absolute;
    top: -20%;
    right: -20%;
    background: #E90041;
    width: 250px;
    height: 250px;
    border-radius: 100%;
    z-index: -1;
    margin: 0 0 0 auto;
    opacity: 0.5;
}
#staticBackdrop .modal-content .btn-close{
    position: absolute;
    right: -45px;
    top: 8px;
    background: #E90041;
    width: 25px;
    height: 25px;
    line-height: 16px;
    border: #211930;
    border-radius: 0px 5px 5px 0px;
    outline: none;
    box-shadow: none;
    cursor: pointer;
    z-index: 4;
    opacity: 1;
}
#staticBackdrop .modal-content .btn-close i{
    color: #fff;
    font-weight: 600;
}
#staticBackdrop .modal-dialog{
    max-width: 700px !important;
    margin: 150px auto 0;
}
#staticBackdrop .modal-header{
    padding: 0px;
    border-bottom: none;
}
#staticBackdrop .modal-body{
    padding: 0;
}
#staticBackdrop .modal-body .modal-body-img1{
    width: 100%;
    height: 100%;
    padding: 20px 20px;
}
#staticBackdrop .modal-body .modal-body-img1 img{
    width:100%;
    animation: bounce2 2s ease infinite;
}
#staticBackdrop .modal-body .modal-body-form{
    background: #211930;
    text-align: center;
    padding: 20px 20px;
}
.modal-body-form h3{
    font-size: 30px;
    line-height: 36px;
    color: #E90041;
    margin: 0 0 10px 0 !important;
    animation: zoom-in-zoom-out 2s ease-out infinite;
}
.modal-body-form h3 span{
    display:block;
    color: #fff;
}
.modal-body-form .popup-form-list{}
.modal-body-form .popup-form-list .form-group{
    margin: 0 0 10px 0;
}
.modal-body-form .popup-form-list .form-group.form-group-last{
    margin: 0;
}
.modal-body-form .popup-form-list .form-group input{
    background: #FBFBFB;
    color: #181223;
    font-size: 16px;
    width: 100%;
    border: 2px solid #E9E7E7;
    border-radius: 0;
    padding: 10px 10px;
}
.modal-body-form .popup-form-list .form-group input::placeholder{
    color: #b2b2b2;
    font-size: 16px;
}
.modal-body-form .popup-form-list .form-group textarea{
    background: #FBFBFB;
    color: #181223;
    font-size: 16px;
    width: 100%;
    height: 120px;
    resize: none;
    border: 2px solid #E9E7E7;
    border-radius: 0;
    padding: 10px 10px;
}
.modal-body-form .popup-form-list .form-group textarea::placeholder{
    color: #b2b2b2;
    font-size: 16px;
}
.modal-body-form .popup-form-list .form-group button.submit-btn{
    background: #E90041;
    color: #fff;
    font-size: 18px;
    width: 100%;
    border: 2px solid #E90041;
    border-radius: 0px;
    padding: 10px 10px;
    margin: 0;
    text-transform: capitalize;
    outline: none;
    transition: all .3s ease-in-out;
}
.modal-body-form .popup-form-list .form-group button.submit-btn:hover{
    background: #211930;
}
.modal.show{
    padding-right:0px !important;
}
/* PopUp Modal Css End Here */

@media only screen and (min-width: 768px) and (max-width: 991px) {

/* PopUp Modal Responsive Css Start Here */
#staticBackdrop .modal-content::before{
    left: 0%;
}
#staticBackdrop .modal-content::after{
    right: 0%;
}
#staticBackdrop .modal-content .btn-close{
    right: -4px;
    top: -33px;
    border-radius: 5px 5px 0px 0px;
}
/* PopUp Modal Responsive Css End Here */

}

@media only screen and (min-width: 521px) and (max-width: 767px) {

/* PopUp Modal Responsive Css Start Here */
#staticBackdrop .modal-dialog{
    max-width: 500px !important;
    margin: 100px auto 0;
}
#staticBackdrop .modal-content::before{
    left: 0%;
}
#staticBackdrop .modal-content::after{
    right: 0%;
}
#staticBackdrop .modal-content .btn-close{
    right: -4px;
    top: -33px;
    border-radius: 5px 5px 0px 0px;
}
#staticBackdrop .modal-body .modal-body-img1,
#staticBackdrop .modal-body .modal-body-img2{
    display: none;
}
.modal-body-form h3{
    font-size: 24px;
    line-height: 30px;
}
.modal-body-form .popup-form-list .form-group input{
    font-size: 16px;
}
.modal-body-form .popup-form-list .form-group input::placeholder{
    font-size: 16px;
}
.modal-body-form .popup-form-list .form-group textarea{
    font-size: 16px;
}
.modal-body-form .popup-form-list .form-group textarea::placeholder{
    font-size: 16px;
}
.modal-body-form .popup-form-list .form-group button.submit-btn{
    font-size: 16px;
}
/* PopUp Modal Responsive Css End Here */

}

@media only screen and (min-width: 300px) and (max-width: 520px) {

/* PopUp Modal Responsive Css Start Here */
#staticBackdrop .modal-dialog{
    max-width: 100% !important;
    margin: 100px 20px 0;
}
#staticBackdrop .modal-content::before{
    left: 0%;
}
#staticBackdrop .modal-content::after{
    right: 0%;
}
#staticBackdrop .modal-content .btn-close{
    right: -4px;
    top: -33px;
    border-radius: 5px 5px 0px 0px;
}
#staticBackdrop .modal-body .modal-body-img1,
#staticBackdrop .modal-body .modal-body-img2{
    display: none;
}
.modal-body-form h3{
    font-size: 24px;
    line-height: 30px;
}
.modal-body-form .popup-form-list .form-group input{
    font-size: 16px;
}
.modal-body-form .popup-form-list .form-group input::placeholder{
    font-size: 16px;
}
.modal-body-form .popup-form-list .form-group textarea{
    font-size: 16px;
}
.modal-body-form .popup-form-list .form-group textarea::placeholder{
    font-size: 16px;
}
.modal-body-form .popup-form-list .form-group button.submit-btn{
    font-size: 16px;
}
/* PopUp Modal Responsive Css End Here */
}
</style>