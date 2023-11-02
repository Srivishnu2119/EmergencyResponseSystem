<section class="footer-one section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="footer-service section-b-padding" style="padding-bottom: 0 !important; margin-bottom: 0 !important;">
                    <ul class="service-ul">
                        <li class="service-li">
                            <a href="javascript:void(0)"><i class="fa fa-truck"></i></a>
                            <span>Free Delivery</span>
                        </li>
                        <li class="service-li">
                            <a href="javascript:void(0)"><i class="fa fa-refresh"></i></a>
                            <span>7Days Returns</span>
                        </li>
                        <li class="service-li">
                            <a href="javascript:void(0)"><i class="fa fa-headphones"></i></a>
                            <span>Online Support</span>
                        </li>
                    </ul>
                </div>

                <div class="footer-bottom section-t-padding" style="margin-left:0 !important;" >
                    <div class="footer-link" id="footer-accordian" style="padding:0 0px !important; margin-left:0 !important;">
                        <div class="f-link">
                            <h2 class="h-footer">Our Information</h2>
                            <a href="#account" data-bs-toggle="collapse" class="h-footer">
                                <span>Our Information</span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="f-link-ul collapse" id="account" data-bs-parent="#footer-accordian">
                                <li class="footer-li footer-logo">
                                    <a href="index">
                                        <img class="img-fluid" src="image/logo.png" alt="" style="width:60%;">
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <div class="f-link">
                            <h2 class="h-footer">Top Categories</h2>
                            <a href="#t-cate" data-bs-toggle="collapse" class="h-footer">
                                <span>Top Categories</span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="f-link-ul collapse" id="t-cate" data-bs-parent="#footer-accordian">
                                <?php
                                foreach ($webcatdata as $wcat) {
                                ?>
                                    <li class="submenu-li">
                                    <li class="f-link-ul-li"><a href="javascript:void(0);" onClick="funCatProducts(<?php echo $wcat->CATID; ?>)"> <i class="fa fa-angle-right"></i> <?php echo htmlentities($wcat->CATNAME); ?></a></li>
                                    </li>
                                <?php
                                }
                                ?>


                            </ul>
                        </div>
                        <div class="f-link">
                            <h2 class="h-footer">Popular Links</h2>
                            <a href="#services" data-bs-toggle="collapse" class="h-footer">
                                <span>Popular Links</span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="f-link-ul collapse" id="services" data-bs-parent="#footer-accordian">
                                <li class="f-link-ul-li"><a href="about"> <i class="fa fa-angle-right"></i> About Shop</a></li>
                                <li class="f-link-ul-li"><a href="faqs"> <i class="fa fa-angle-right"></i> Faq's</a></li>
                                <li class="f-link-ul-li"><a href="contact"> <i class="fa fa-angle-right"></i> Contact us</a></li>
                                <li class="f-link-ul-li"><a href="blogs"> <i class="fa fa-angle-right"></i> Blogs</a></li>
                                <li class="f-link-ul-li"><a href="videos"> <i class="fa fa-angle-right"></i> Videos</a></li>
                                <li class="f-link-ul-li"><a href="testimonials"> <i class="fa fa-angle-right"></i> Testimonials</a></li>
                            </ul>
                        </div>


                        <div class="f-link">
                            <h2 class="h-footer">Contact Info</h2>
                            <a href="#contact" data-bs-toggle="collapse" class="h-footer">
                                <span>Contact Info</span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="f-link-ul collapse" id="contact" data-bs-parent="#footer-accordian">
                                <li class="footer-info f-link-ul-li">
                                    <h6>Address</h6>
                                    <p>LIG B 449, 2nd Floor,<br>
                                        A S Rao Nagar, Hyderabad - 500062.</p>

                                    <a href="tel:+91 6309935544">Phone: +91 6309935544</a>
                                    <a href="mailto:support@charisinitiatives.com"> Email:
                                        support@charisinitiatives.com</a>

                                </li>
                                <br>
                                <li class="footer-info f-link-ul-li">
                                    <h6>Visit / Call Hours</h6>
                                    <span>Monday - Saturday</span> /
                                    <span>9:30AM TO 4:30PM</span>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>