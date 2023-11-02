<?php
if ($_SERVER['SERVER_NAME'] == 'localhost') {
   define('SITE_URL', "http://" . $_SERVER['SERVER_NAME'] . "/ciplnew/");
   define('PRODIMG_URL', "http://" . $_SERVER['SERVER_NAME'] . "/cipl/prod_images/");
   define('BANNERIMG_URL', "http://" . $_SERVER['SERVER_NAME'] . "/cipl/assets/bannerimages/");
} else {

   define('SITE_URL', "https://" . $_SERVER['SERVER_NAME'] . "/");
   define('PRODIMG_URL', "https://" . $_SERVER['SERVER_NAME'] . "/prod_images/");
   define('BANNERIMG_URL', "https://" . $_SERVER['SERVER_NAME'] . "/assets/bannerimages/");
}

define('COMPANYSTATEID', 1);
define('SHIPPINGCOSTPERCENTAGE', '0.00');
//define(SHIPPINGCOSTPERCENTAGE,"2.00");
//define(SHIPPINGCOSTAMOUNT,"0");
define('SHIPPINGCOSTAMOUNT', 0);
// Email Accounts
define('FROM_EMAIL', "no-reply@booksandreports.com");
define('FROM_NAME', "Charisinitiatives");

define('SMTPUSER', 'no-reply@booksandreports.com');
define('SMTPPWD', 'Reports@321');
define('SMTPSERVER', 'md-in-21.webhostbox.net');
