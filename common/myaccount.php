 <?php
    include("../config/db_connection.php");
    include("../config/constants.php");
    $page = page_name();
    $_SESSION['Redirection'] = 'MYACCOUNT';
    $orderssql = "SELECT * from  invoice where  UserID=?";
    $order_stmt  = $pdo->prepare($orderssql);
    $order_stmt->bindParam(1, $_SESSION['sess_cipluserid'], PDO::PARAM_STR, 8);
    $order_stmt->execute();
    $orderrows = $order_stmt->rowCount();

    $walletsql = "SELECT * from  couponcodes where  VoucherEmail=?";
    $w_stmt  = $pdo->prepare($walletsql);
    $w_stmt->bindParam(1, $_SESSION['sess_ciplemailid'], PDO::PARAM_STR, 70);
    $w_stmt->execute();
    $wrows = $w_stmt->rowCount();
    if ($wrows == 1) {
        $walletdata = $w_stmt->fetch(PDO::FETCH_OBJ);
        $wamount = $walletdata->VOUCHERAMOUNT;
    } else {
        $wamount = 0;
    }

    ?>
 <div class="order-his-page">
     <ul class="profile-ul">
         <li class="profile-li"><a href="myaccount" <?php if ($page == 'myaccount.php') { ?> class="active" <?php } ?>> MY ACCOUNT</a></li>
         <li class="profile-li"><a href="myorders" <?php if ($page == 'myorders.php') { ?> class="active" <?php } ?>> <span> MY ORDERS</span> <span class="pro-count"><?php echo $orderrows; ?></span></a></li>
         <li class="profile-li"><a href="add_billshipdata"> MY ADDRESS</a></li>
         <li class="profile-li"><a href="#"><span> CHARIS WALLET</span> <span style="color:#fff; background:red; padding:3px 8px; border-radius:40px;"><i class="fa fa-rupee"></i><?php echo $wamount; ?></span></a></li>
         <li class="profile-li"><a href="changepwd" <?php if ($page == 'changepwd.php') { ?> class="active" <?php } ?>> CHANGE PASSWORD</a></li>
         <li class="profile-li"><a href="logout">LOGOUT</a></li>
     </ul>
 </div>