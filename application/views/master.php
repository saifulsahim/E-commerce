<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $title; ?> | E-Shopper</title>
    <link href="<?php echo base_url() ?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/responsive.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>asset/css/sweetalert2.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="<?php echo base_url()?>asset/js/html5shiv.js"></script>
    <script src="<?php echo base_url()?>asset/js/respond.min.js"></script>

    <![endif]-->
    <link rel="shortcut icon" href="<?php echo base_url() ?>asset/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed"
          href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-57-precomposed.png">

    <script src="<?php echo base_url() ?>asset/js/jquery.js"></script>

    <script src="<?php echo base_url() ?>asset/js/sweetalert2.min.js"></script>

</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="<?php echo base_url()?>"><img
                                    src="<?php echo base_url('') ?>asset/images/home/logo1.png" alt=""/></a>
                    </div>
<!--                    <div class="btn-group pull-right">-->
<!--                        <div class="btn-group">-->
<!--                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">-->
<!--                                USA-->
<!--                                <span class="caret"></span>-->
<!--                            </button>-->
<!--                            <ul class="dropdown-menu">-->
<!--                                <li><a href="#">Canada</a></li>-->
<!--                                <li><a href="#">UK</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!---->
<!--                        <div class="btn-group">-->
<!--                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">-->
<!--                                DOLLAR-->
<!--                                <span class="caret"></span>-->
<!--                            </button>-->
<!--                            <ul class="dropdown-menu">-->
<!--                                <li><a href="#">Canadian Dollar</a></li>-->
<!--                                <li><a href="#">Pound</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="http://localhost/E-health/"><i class="fa fa-user"></i>
                                    E-health</a></li>
<!--                            <li><a href="--><?php //echo base_url() ?><!--"><i class="fa fa-star"></i> Wishlist</a></li>-->
                            <li><a href="<?php echo base_url(); ?>checkout"><i class="fa fa-crosshairs"></i>
                                    Checkout</a></li>
                            <li><a href="<?php echo base_url() ?>cart/show_cart"><i class="fa fa-shopping-cart"></i>
                                    Cart
                                    (<span id="cart-counter"><?php echo $this->cart->total_items(); ?></span>)</a></li>


                            <?php
                            $customer_id = $this->session->userdata('customer_id');


                            if ($customer_id) {
                                ?>
                                <li><a href="<?php echo base_url() ?>logout"><i class="fa fa-lock"></i> Logout</a></li>
                                <li><a href=""><?php echo $this->session->userdata('customer_name') ?></a></li>

                            <?php } else {
                                ?>

                                <li><a href="<?php echo base_url() ?>checkout"><i class="fa fa-lock"></i> Login</a></li>

                            <?php } ?>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="<?php echo base_url() ?>" class="active">Home</a></li>
<!--                            <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>-->
<!--                                <ul role="menu" class="sub-menu">-->
<!--                                    <li><a href="shop.html">Products</a></li>-->
<!--                                    <li><a href="product-details.html">Product Details</a></li>-->
<!--                                    <li><a href="checkout.html">Checkout</a></li>-->
<!--                                    <li><a href="--><?php //echo base_url('add-to-cart') ?><!--">Cart-->
<!--                                        </a></li>-->
<!--                                    <li><a href="login.html">Login</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
                            <!--                            <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>-->
                            <!--                                <ul role="menu" class="sub-menu">-->
                            <!--                                    <li><a href="blog.html">Blog List</a></li>-->
                            <!--                                    <li><a href="blog-single.html">Blog Single</a></li>-->
                            <!--                                </ul>-->
                            <!--                            </li>-->
                            <!--                            <li><a href="404.html">404</a></li>-->
<!--                            <li><a href="contact-us.html">Contact</a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Search" id="filter">
                    </div>
                </div>
                <!--                <div class="col-sm-3" >-->
                <!--                    <form  action="-->
                <?php //echo base_url()?><!--welcome/search_product"  method="post" >-->
                <!--                        <input type="text" name="search_text" placeholder="Search">-->
                <!--                        <input  type="submit" name="btn" class=" btn-primary" value="Search">-->
                <!--                    </form>-->
                <!--                </div>-->
            </div>
        </div>
    </div><!--/header-bottom-->


    <!--    <div class="col-sm-3">-->
    <!--        <div class="search_box pull-right">-->
    <!--            <input type="text" href="-->
    <?php //echo base_url() ?><!--welcome/search_product" formmethod="post"-->
    <!--                   name="search_text" placeholder="Search"/>-->
    <!--        </div>-->
    <!--    </div>-->


    <!--    <form action="" method="post">-->
    <!--        <h5>-->
    <!--            <input type="text" name="product_search">-->
    <!--            <input type="submit" name="btn" value="Search Product">-->
    <!--        </h5>-->
    <!--    </form>-->


</header><!--/header-->


<?php echo $slider; ?>


<section>
    <div class="container">
        <div class="row">
            <?php
            if ($category != NULL OR $manufacturer != NULL OR $price_range != NULL) {
                ?>
                <div class="col-sm-3">


                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->


                            <?php

                            $all_published_category = $this->admin_model->select_all_published_category();
                            foreach ($all_published_category as $v_category) {

                                ?>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a
                                                    href="javascript:void(0)"
                                                    onclick="category(<?php echo $v_category->category_id ?>)"><?php echo $v_category->category_name; ?></a>
                                        </h4>
                                    </div>
                                </div>

                            <?php } ?>
                        </div><!--/category-products-->

                        <div class="brands_products"><!--brands_products-->
                            <h2>Brands</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">

                                    <?php
                                    $all_published_manufacturer = $this->manufacturer_model->get_all_active_manufacturer();
                                    foreach ($all_published_manufacturer as $v_manufacturer) {


                                        ?>
                                        <li><a href="javascript:void(0)"
                                               onclick="brand(<?php echo $v_manufacturer->manufacturer_id ?>)"> <span
                                                        class="pull-right"></span><?php echo $v_manufacturer->manufacturer_name; ?>
                                            </a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div><!--/brands_products-->

                        <input type="hidden" name="brand_id" id="brand">
                        <input type="hidden" name="category_id" id="category">

                        <div class="price-range"><!--price-range-->
                            <h2>Price Range</h2>
                            <div class="well text-center">
                                <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600"
                                       data-slider-step="5" data-slider-value="[250,450]" id="sl2"><br/>
                                <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div><!--/price-range-->

                        <!--                        <div class="shipping text-center"><!--shipping-->
                        <!--                            <img src="-->
                        <?php //echo base_url() ?><!--asset/images/home/online_shopping.png" alt="" width="100" height="100">-->
                        <!--                        </div><!--/shipping-->

                    </div>
                </div>

            <?php } ?>

            <div class="col-sm-9 padding-right">
                <?php echo $featured_product; ?>


                <!--                <div class="category-tab"><!--category-tab-->

                <?php echo $category; ?>


                <!--                </div><!--/category-tab-->

                <div class="recommended_items"><!--recommended_items-->

                    <?php echo $recommend ?>

                </div><!--/recommended_items-->

            </div>
        </div>
    </div>
</section>

<footer id="footer"><!--Footer-->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="companyinfo">
                        <h2><span>e</span>-shopper</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
                    </div>
                </div>
<!--                <div class="col-sm-7">-->
<!--                    <div class="col-sm-3">-->
<!--                        <div class="video-gallery text-center">-->
<!--                            <a href="#">-->
<!--                                <div class="iframe-img">-->
<!--                                    <img src="--><?php //echo base_url() ?><!--asset/images/home/iframe1.png" alt=""/>-->
<!--                                </div>-->
<!--                                <div class="overlay-icon">-->
<!--                                    <i class="fa fa-play-circle-o"></i>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <p>Circle of Hands</p>-->
<!--                            <h2>24 DEC 2014</h2>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-sm-3">-->
<!--                        <div class="video-gallery text-center">-->
<!--                            <a href="#">-->
<!--                                <div class="iframe-img">-->
<!--                                    <img src="--><?php //echo base_url() ?><!--asset/images/home/iframe2.png" alt=""/>-->
<!--                                </div>-->
<!--                                <div class="overlay-icon">-->
<!--                                    <i class="fa fa-play-circle-o"></i>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <p>Circle of Hands</p>-->
<!--                            <h2>24 DEC 2014</h2>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-sm-3">-->
<!--                        <div class="video-gallery text-center">-->
<!--                            <a href="#">-->
<!--                                <div class="iframe-img">-->
<!--                                    <img src="--><?php //echo base_url() ?><!--asset/images/home/iframe3.png" alt=""/>-->
<!--                                </div>-->
<!--                                <div class="overlay-icon">-->
<!--                                    <i class="fa fa-play-circle-o"></i>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <p>Circle of Hands</p>-->
<!--                            <h2>24 DEC 2014</h2>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-sm-3">-->
<!--                        <div class="video-gallery text-center">-->
<!--                            <a href="#">-->
<!--                                <div class="iframe-img">-->
<!--                                    <img src="--><?php //echo base_url() ?><!--asset/images/home/iframe4.png" alt=""/>-->
<!--                                </div>-->
<!--                                <div class="overlay-icon">-->
<!--                                    <i class="fa fa-play-circle-o"></i>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <p>Circle of Hands</p>-->
<!--                            <h2>24 DEC 2014</h2>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-sm-3">-->
<!--                    <div class="address">-->
<!--                        <img src="--><?php //echo base_url() ?><!--asset/images/home/map.png" alt=""/>-->
<!--                        <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
    </div>

    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Service</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Online Help</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Change Location</a></li>
                            <li><a href="#">FAQ’s</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Quock Shop</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">T-Shirt</a></li>
                            <li><a href="#">Mens</a></li>
                            <li><a href="#">Womens</a></li>
                            <li><a href="#">Gift Cards</a></li>
                            <li><a href="#">Shoes</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Policies</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privecy Policy</a></li>
                            <li><a href="#">Refund Policy</a></li>
                            <li><a href="#">Billing System</a></li>
                            <li><a href="#">Ticket System</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>About Shopper</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Company Information</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Store Location</a></li>
                            <li><a href="#">Affillate Program</a></li>
                            <li><a href="#">Copyright</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-sm-offset-1">
                    <div class="single-widget">
                        <h2>About Shopper</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Your email address"/>
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i>
                            </button>
                            <p>Get the most recent updates from <br/>our site and be updated your self...</p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                <p class="pull-right">Designed by <span><a target="_blank"
                                                           href="http://www.themeum.com">Themeum</a></span></p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->


<!--<script src="--><?php //echo base_url() ?><!--asset/js/jquery.js"></script>-->
<script src="<?php echo base_url() ?>asset/js/ajax_call.js"></script>
<script src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>asset/js/jquery.scrollUp.min.js"></script>
<script src="<?php echo base_url() ?>asset/js/price-range.js"></script>
<script src="<?php echo base_url() ?>asset/js/jquery.prettyPhoto.js"></script>
<script src="<?php echo base_url() ?>asset/js/main.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        var cart_counter = parseInt('<?php echo $this->cart->total_items(); ?>');

        $("body").on('click', '.add-to-cart', function () {

            var $btn = $(this);
            $btn.button('loading');
            // simulating a timeout
            setTimeout(function () {
                $btn.button('reset');
            }, 1000);

            var id = $(this).data('id');
            var name = $(this).data('name');
            var price = $(this).data('price');
            var image = $(this).data('image');


            $.ajax({
                url: 'cart/add_product',
                method: "POST",
                data: {'id': id, 'name': name, 'price': price, 'image': image},
                cache: false,
                success: function (data) {
                    //alert(data);
                    Swal("Product Added into Cart");

//                    console.log(data);

                    $('#cart-counter').text(++cart_counter);

//                    var data = $.parseJSON(msg);
//                    $('.due').html(data);
                },
                error: function () {
                    alert('Error Occur...');
                }
            });


        });

        $("body").on('click', '.cancel', function () {

            var id = $(this).attr('id');
            $("#tr_id" + id).hide();
            var rowid = $(".rowid_" + id).val();
            var url = "<?php echo base_url('cart/delete_product')?>";

            $.ajax({
                url: url,
                method: "POST",
                data: {'id': rowid},
                cache: false,
                success: function (data) {
                    console.log(data);
//                    var data = $.parseJSON(msg);
//                    $('.due').html(data);
                },
                error: function () {
                    alert('Error Occur...');
                }
            });


        });


        $("#filter").click(function () {

            $("#filter").css("width", "200px");

        });

        $("#filter").keyup(function () {

            var val = $("#filter").val();

            $.ajax({
                url: 'Products/search_filter',
                method: "POST",
                data: {'search_val': val},
                cache: false,
                success: function (data) {
                    //console.log(data);
                    $(".features_items").html(data);
//                    var data = $.parseJSON(msg);
//
//   $('.due').html(data);
                }
            });

        });

    });
</script>
</body>
</html>