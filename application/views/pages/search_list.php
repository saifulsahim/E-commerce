<?php
//echo '<pre>';
//print_r($all_search_product);
//exit();

?>




<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Features Items</h2>

    <?php
    foreach ($all_search_product as $v_product)
    {
        ?>

        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="<?php echo base_url().$v_product->product_image?>" alt="" height="140">
                        <h2>BDT <?php echo $v_product->product_price?></h2>
                        <p><?php echo $v_product->product_short_desc?></p>
                        <a href="javascript:void(0)" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                            to cart</a>
                    </div>
                    <div class="product-overlay">
                        <div class="overlay-content">
                            <h2>BDT <?php echo $v_product->product_price?></h2>
                            <p><?php echo $v_product->product_short_desc?></p>
                            <!--                        <a href="--><?php //echo base_url()?><!--product-details/--><?php //echo $v_product->product_id?><!--" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>-->
                            <a href="javascript:void(0)" class="btn btn-default add-to-cart" data-id="<?php echo $v_product->product_id?>" data-name="<?php echo $v_product->product_name?>"

                               data-price="<?php echo $v_product->product_price?> "

                            ><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                    </ul>
                </div>
            </div>
        </div>

    <?php }?>

</div><!--features_items-->
<?php