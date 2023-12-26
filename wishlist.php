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
                            Wishlist
                        </h1>
                    </div>
                    <div class="breadcrumbs">
                        <a href="index.php">Home</a><span class="delimiter"></span>Shopping Cart
                    </div>
                </div>
            </div>

            <div id="content" class="site-content" role="main">
                <div class="section-padding">
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
                                </tbody>
                            </table>
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