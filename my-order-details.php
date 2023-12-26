<?php 
include("header.php");
?>

<section class="section section-padding p-t-10 p-b-10 m-b-0">
    <div id="site-main" class="site-main">
        <div id="main-content" class="main-content">
            <div id="primary" class="content-area">
                <div id="title" class="page-title">
                    <div class="section-container">
                        <div class="content-title-heading">
                            <h1 class="text-title-heading">
                                My Order Details
                            </h1>
                        </div>
                        <div class="breadcrumbs">
                            <a href="index.html">Home</a><span class="delimiter"></span>Order Details</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div id="content" class="site-content" role="main">
                <div class="section-padding">
                    <div class="section-container p-l-r">
                        <div class="shop-cart">
                            <div class="row justify-content-center">
                                <div class="col-xl-10 col-lg-10 col-md-12 col-12">
                                    <form class="cart-form" action="" method="post">
                                        <div class="table-responsive">
                                            <table class="cart-items table" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th class="product-thumbnail">Product</th>
                                                        <th class="product-price">Price</th>
                                                        <th class="product-quantity">Quantity</th>
                                                        <th class="product-subtotal">Subtotal</th>
                                                        <!-- <th class="product-remove">&nbsp;</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="cart-item">
                                                        <td class="product-thumbnail">
                                                            <a href="#">
                                                                <img width="600" height="600" src="media/product/3.jpg" class="product-image" alt="">
                                                            </a>
                                                            <div class="product-name">
                                                                <a href="#">Twin Hoops</a>
                                                            </div>
                                                        </td>
                                                        <td class="product-price">
                                                            <span class="price">$150.00</span>
                                                        </td>
                                                        <td class="product-price">
                                                            <span class="price">2</span>
                                                        </td>
                                                        <td class="product-subtotal">
                                                            <span>$300.00</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="cart-item">
                                                        <td class="product-thumbnail">
                                                            <a href="#">
                                                                <img width="600" height="600" src="media/product/1.jpg" class="product-image" alt="">
                                                            </a>
                                                            <div class="product-name">
                                                                <a href="#">Medium Flat Hoops</a>
                                                            </div>
                                                        </td>
                                                        <td class="product-price">
                                                            <span>$180.00</span>
                                                        </td>
                                                        <td class="product-price">
                                                            <span class="price">1</span>
                                                        </td>
                                                        <td class="product-subtotal">
                                                            <span class="price">$180.00</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="shop-cart-empty" style="display: none;">
                            <div class="notices-wrapper">
                                <p class="cart-empty">Your cart is currently empty.</p>
                            </div>
                            <div class="return-to-shop">
                                <a class="button" href="shop.php">
                                    Return to shop
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- #content -->




<?php 
    include("footer.php");
?>