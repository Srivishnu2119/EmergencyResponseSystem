<!-- Top bar Start -->
<section class="top-3" style="background-color: black;">
    <div class="container">
        <div class="row ">
            <div class="col">
                <ul class="top-home">
                    <li class="top-home-li t-content d-lg-block d-md-block d-sm-block d-xs-block d-none" style="float:left;">

                        <div class="top-content d-lg-block d-md-block d-sm-block d-xs-block d-none">
                            <a href="about.php" style="color: #afafaf; padding-top: 3px; font-size: 14px; padding-left: 100px;">About Shop</a> &nbsp; | &nbsp; <a href="contact.php" style="color: #afafaf;
    padding-top: 3px; padding-bottom: 3px; font-size: 14px;padding-left: 5px;">Contact Us</a>
                        </div>

                    </li>
                    <?php
                    if ($_SESSION['sess_cipluserid'] != "") {
                    ?>
                        <li class="top-home-li">
                            <ul class="top-dropdown" style="float:right; padding-right:60px;">

                                <!-- login start -->
                                <li class="top-dropdown-li">
                                    <a href="javascript:void(0)"> <i class="fa fa-user"></i> Hi <b><?php echo $_SESSION['sess_ciplusername']; ?></a>
                                    <i class="fa fa-angle-down"></i>
                                    <ul class="account">
                                        <?php
                                        if ($_SESSION['sess_ciplusertype'] == 1) {
                                        ?>
                                            <li><a href="myaccount"> <i class="fa fa-angle-right"></i> My Account</a></li>
                                            <li><a href="myorders"> <i class="fa fa-angle-right"></i> My Orders</a></li>
                                            <li><a href="changepwd"> <i class="fa fa-angle-right"></i> Change Password</a></li>
                                            <li><a href="logout"> <i class="fa fa-angle-right"></i> Logout</a></li>
                                        <?php
                                        } else {
                                        ?>

                                            <li><a href="logout"> <i class="fa fa-angle-right"></i> Logout</a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <!-- login end -->

                            </ul>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Top bar End -->