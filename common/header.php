<div class="header-main-area">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="header-main">
                    <!-- logo start -->
                    <div class="header-element logo">
                        <a href="index.php">
                            <img src="image/hospital.png" alt="logo-image" class="img-fluid" style="width: 70%;">
                        </a>
                    </div>
                    <!-- logo end -->

                    <div class="header-element right-block-box">
                        <ul class="shop-element">

                            <?php
                            if ($_SESSION['sess_cipluserid'] == "") {
                            ?>
                                <li class="side-wrap wishlist-wrap">
                                    <a href="login.php" class="header-wishlist">
                                        <span class="wishlist-icon"><i class="fa fa-user"></i></span>
                                    </a>
                                </li>
                            <?php
                            }
                            ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>