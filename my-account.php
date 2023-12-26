<?php
include("header.php");
?>

<div id="site-main" class="site-main">
    <div id="main-content" class="main-content">
        <div id="primary" class="content-area">
            <div id="title" class="page-title">
                <div class="section-container">
                    <div class="content-title-heading">
                        <h1 class="text-title-heading">
                            My Account
                        </h1>
                    </div>
                    <div class="breadcrumbs">
                        <a href="index.php">Home</a><span class="delimiter"></span>My Account
                    </div>
                </div>
            </div>

            <div id="content" class="site-content" role="main">
                <div class="section-padding">
                    <div class="section-container">
                        <div class="page-my-account">
                            <div class="my-account-wrap clearfix">
                                <nav class="my-account-navigation">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#dashboard" role="tab">Dashboard</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#account-details" role="tab">Account details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#orders" role="tab">My Orders</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#addresses" role="tab">Wishlist</a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" href="wishlist.php">Wishlist</a>
                                        </li> -->
                                        <li class="nav-item">
                                            <a class="nav-link" href="page-login.php">Logout</a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="my-account-content tab-content">
                                    <div class="tab-pane fade show active" id="dashboard" role="tabpanel">
                                        <div class="my-account-dashboard">
                                            <p>
                                                Hello, <strong>John Doe</strong> (not <strong>John Doe</strong>? <a href="page-login.php">Log out</a>)
                                            </p>
                                            <!-- <br> -->
                                            <!-- <h5>Welcome John Doe.</h5> -->
                                            <p>
                                                From your account dashboard you can view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a>, and <a href="#">edit your password and account details</a>.
                                            </p>
                                            <!-- <p>Explore and manage your account details, track your activities, and take advantage of the features available on your dashboard. From personalized settings to the latest updates, this is your central hub for a seamless experience. Feel free to navigate and make the most of your user dashboard.</p> -->
                                            <!-- <p>Explore and manage your account details, track your activities, and take advantage of the features available on your dashboard. From personalized settings to the latest updates, this is your central hub for a seamless experience. Feel free to navigate and make the most of your user dashboard.</p> -->

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="orders" role="tabpanel">
                                        <div class="my-account-orders">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Image</th>
                                                            <th>Order</th>
                                                            <th>Date</th>
                                                            <!-- <th>Payment Status</th> -->
                                                            <th>Status</th>
                                                            <th>Total</th>
                                                            <!-- <th>Actions</th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="width:121px;">
                                                                <!-- <a href="javascript:void(0)"> -->
                                                                    <img src="media/product/3-2.jpg" class="" alt="">
                                                                <!-- </a> -->
                                                            </td>
                                                            <td>#1357</td>
                                                            <td>March 45, 2020</td>
                                                            <!-- <td>Paid</td> -->
                                                            <td>Completed</td>
                                                            <td>$125.00 for 2 item</td>
                                                            <!-- <td><a href="my-order-details.php" class="btn-small d-block">View</a></td> -->
                                                        </tr>
                                                        <tr>
                                                            <td style="width:121px;">
                                                                <!-- <a href="javascript:void(0)"> -->
                                                                    <img src="media/product/6-2.jpg" class="" alt="">
                                                                <!-- </a> -->
                                                            </td>
                                                            <td>#2468</td>
                                                            <td>June 29, 2020</td>
                                                            <!-- <td>Unpaid</td> -->
                                                            <td>Canceled</td>
                                                            <td>$364.00 for 5 item</td>
                                                            <!-- <td><a href="my-order-details.php" class="btn-small d-block">View</a></td> -->
                                                        </tr>
                                                        <tr>
                                                            <td style="width:121px;">
                                                                <!-- <a href="javascript:void(0)"> -->
                                                                    <img src="media/product/10-2.jpg" class="" alt="">
                                                                </a>
                                                            </td>
                                                            <td>#2366</td>
                                                            <td>August 02, 2020</td>
                                                            <!-- <td>Paid</td> -->
                                                            <td>Completed</td>
                                                            <td>$280.00 for 3 item</td>
                                                            <!-- <td><a href="my-order-details.php" class="btn-small d-block">View</a></td> -->
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="addresses" role="tabpanel">
                                        <div id="content" class="site-content" role="main">
                                            <div class="section-padding" style="padding-left: 0px; padding-right:0px;">
                                                <div class="section-container p-l-r">
                                                    <div class="shop-wishlist">
                                                        <table class="wishlist-items">
                                                            <tbody>
                                                                <tr class="wishlist-item">
                                                                    <td class="wishlist-item-remove"><span></span></td>
                                                                    <td class="wishlist-item-image">
                                                                        <a href="shop-details.php">
                                                                            <img width="600" height="600" src="media/product/3.jpg" alt="">
                                                                        </a>
                                                                    </td>
                                                                    <td class="wishlist-item-info">
                                                                        <div class="wishlist-item-name">
                                                                            <a href="shop-details.php">Twin Hoops</a>
                                                                        </div>
                                                                        <div class="wishlist-item-price">
                                                                            <span>$150.00</span>
                                                                        </div>
                                                                        <!-- <div class="wishlist-item-time">June 6, 2022</div> -->
                                                                    </td>
                                                                    <td class="wishlist-item-actions">
                                                                        <div class="wishlist-item-add">
                                                                            <div>
                                                                                <a href="cart.php">Add to cart</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="wishlist-item">
                                                                    <td class="wishlist-item-remove"><span></span></td>
                                                                    <td class="wishlist-item-image">
                                                                        <a href="shop-details.php">
                                                                            <img width="600" height="600" src="media/product/4.jpg" alt="">
                                                                        </a>
                                                                    </td>
                                                                    <td class="wishlist-item-info">
                                                                        <div class="wishlist-item-name">
                                                                            <a href="shop-details.php">Yilver And Turquoise Earrings</a>
                                                                        </div>
                                                                        <div class="wishlist-item-price">
                                                                            <ins><span>$100.00</span></ins>
                                                                        </div>
                                                                        <!-- <div class="wishlist-item-time">June 6, 2022</div> -->
                                                                    </td>
                                                                    <td class="wishlist-item-actions">
                                                                        <div class="wishlist-item-add">
                                                                            <div>
                                                                                <a href="cart.php">Add to cart</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="wishlist-item">
                                                                    <td class="wishlist-item-remove"><span></span></td>
                                                                    <td class="wishlist-item-image">
                                                                        <a href="shop-details.php">
                                                                            <img width="600" height="600" src="media/product/14.jpg" alt="">
                                                                        </a>
                                                                    </td>
                                                                    <td class="wishlist-item-info">
                                                                        <div class="wishlist-item-name">
                                                                            <a href="shop-details.php">Earrings</a>
                                                                        </div>
                                                                        <div class="wishlist-item-price">
                                                                            <ins><span>$100.00</span></ins>
                                                                        </div>
                                                                        <!-- <div class="wishlist-item-time">June 6, 2022</div> -->
                                                                    </td>
                                                                    <td class="wishlist-item-actions">
                                                                        <div class="wishlist-item-add">
                                                                            <div>
                                                                                <a href="cart.php">Add to cart</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- #content -->
                                    </div>
                                    <div class="tab-pane fade" id="account-details" role="tabpanel">
                                        <div class="my-account-account-details">
                                            <form class="edit-account" action="" method="post">
                                                <p class="form-row">
                                                    <label for="account_first_name">First name <span class="required">*</span></label>
                                                    <input type="text" class="input-text" name="account_first_name">
                                                </p>
                                                <p class="form-row">
                                                    <label>Last name <span class="required">*</span></label>
                                                    <input type="text" class="input-text" name="account_last_name">
                                                </p>
                                                <div class="clear"></div>
                                                <p class="form-row">
                                                    <label>Display name <span class="required">*</span></label>
                                                    <input type="text" class="input-text" name="account_display_name">
                                                    <!-- <span><em>This will be how your name will be displayed in the account section and in reviews</em></span> -->
                                                </p>
                                                <div class="clear"></div>
                                                <p class="form-row">
                                                    <label>Email address <span class="required">*</span></label>
                                                    <input type="email" class="input-text" name="account_email">
                                                </p>
                                                <fieldset>
                                                    <legend>Password change</legend>
                                                    <p class="form-row">
                                                        <label>Current password</label>
                                                        <input type="password" class="input-text" name="password_current" autocomplete="off">
                                                    </p>
                                                    <p class="form-row">
                                                        <label>New password</label>
                                                        <input type="password" class="input-text" name="password_1" autocomplete="off">
                                                    </p>
                                                    <p class="form-row">
                                                        <label>Confirm new password</label>
                                                        <input type="password" class="input-text" name="password_2" autocomplete="off">
                                                    </p>
                                                </fieldset>
                                                <div class="clear"></div>
                                                <p class="form-row">
                                                    <button type="submit" class="button" name="save_account_details" value="Save changes">Save changes</button>
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- #content -->
        </div><!-- #primary -->
    </div><!-- #main-content -->
</div>

<?php
include("footer.php");
?>