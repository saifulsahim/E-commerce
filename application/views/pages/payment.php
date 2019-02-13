<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Check out</li>
            </ol>
        </div><!--/breadcrums-->

        <?php
        if ($this->cart->contents() == null) {
            echo "You have no product on cart! Please add some product first. Thank You.";
        } else { ?>


            <div class="review-payment">
                <h2>Review & Payment</h2>
            </div>

            <div class="table-responsive cart_info">
                <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                        <tr class="cart_menu">
                            <td class="image">Item</td>
                            <td class="description"></td>
                            <td class="price">Price</td>
                            <td class="quantity">Quantity</td>
                            <td class="total">Total</td>
                            <td></td>
                        </tr>
                        </thead>
                        <tbody>

                        <form action="<?php echo base_url('cart/update_cart') ?>" method="post">

                            <?php $i = 1 ?>

                            <?php foreach ($this->cart->contents() as $items) { ?>
                                <input type="hidden" name="rowid[]" value="<?php echo $items['rowid'] ?>"
                                       class="rowid_<?php echo $i ?>">
                                <!--                --><?php //echo form_hidden($items['rowid'],['class'=> ""]); ?>


                                <tr id="tr_id<?php echo $i ?>">
                                    <!--                    <td class="cart_product">-->
                                    <!--                        <a href=""><img src="-->
                                    <?php //echo base_url() . $items['options']['image'] ?><!--" alt=""></a>-->
                                    <!--                    </td>-->
                                    <td class="cart_description">
                                        <h4><?php echo $items['name']; ?></h4>

                                    </td>
                                    <td class="cart_price">
                                        <p><?php echo $items['price']; ?></p>
                                    </td>
                                    <td class="cart_quantity">
                                        <div class="cart_quantity_button">

                                            <input class="cart_quantity_input" type="text" name="quantity[]"
                                                   value="<?php echo $items['qty'] ?>" autocomplete="off" size="2">

                                        </div>
                                    </td>
                                    <td class="cart_total">
                                        <p class="cart_total_price"><?php echo $this->cart->format_number($items['subtotal']); ?></p>
                                    </td>
                                    <td class="cart_delete">
                                        <a class="cart_quantity_delete" href="javascript:void(0)"><i
                                                    class="fa fa-times cancel" id="<?php echo $i ?>"></i></a>
                                    </td>
                                </tr>

                                <?php $i++;
                            } ?>

                        </tbody>

                    </table>
                </div>

                <br class="col-sm-12 ">
                <div class="total_area">
                    <ul>
                        <li>Cart Sub Total <span>BDT <?php echo $this->cart->total(); ?></span></li>
                        <li>Vat(5%) <span>

                                <?php

                                $vat = ($this->cart->total() * 5) / 100;
                                echo 'BDT ' . $vat;

                                ?>

                            </span>
                        </li>
                        <li>Shipping Cost <span>
                                <?php
                                $shipping_cost = 100;
                                echo 'BDT ' . $shipping_cost;
                                ?>
                            </span></li>
                        <li>Total <span><?php $g_total = $this->cart->total() + $vat + $shipping_cost;
                                echo 'BDT ' . $g_total;

                                ?>
                            </span></li>
                    </ul>

                    <button class="btn btn-default update">Update</button>
                    </form>
                    <!--                    <a class="btn btn-default update" href="">Update</a>-->
                    <!--                    <a class="btn btn-default check_out" href="-->
                    <?php //echo base_url()?><!--checkout">Check Out</a>-->
                </div>
                <br/>
            </div>

        <?php } ?>

    </div>

    <?php
    if ($this->cart->contents() != null) { ?>

        <div class="step-one">
            <h2 class="heading">Step 4: Payment Method</h2>
        </div>

        </br>

        <div class="payment-options">
            <form action="<?php echo base_url(); ?>place-order" method="post">
                <p>
                    <label><input type="radio" name="paymentType" value="cash_on_delivery" checked="checked"> Cash On
                        Delivery</label>
                </p>

                <p>
                    <label><input type="radio" name="paymentType" value="ssl_commerz"> SSL COMMERZ</label>
                </p>
                <!--        <p>-->
                <!--            <label><input type="radio" name="paymentType" value="paypal"> Paypal</label>-->
                <!--        </p>-->
                <p>
                    <b>Comments on your order</b>
                    <textarea name="comments"> </textarea>
                </p>


                <p style="text-align: center">

                    <input class="btn btn-primary" type="submit" name="btn" value="Place Order">
            </form>
        </div>

        </div>

    <?php } ?>

</section> <!--/#cart_items-->


<?php
//
//$contents = $this->cart->contents();
////                echo '<pre>';
////                print_r($this->cart->contents());
////exit();
//foreach ($contents as $v_content) {
//
//
//    ?>
<!--    <tr>-->
<!--        <!--                            <td class="cart_product">-->
<!--        <!--                                <a href=""><img width="100"-->
<!--        <!--                                                src="--><?php ////echo base_url() . $v_content['options']['image'] ?><!--<!--" alt=""></a>-->
<!--        <!--                            </td>-->
<!--        <td class="cart_description">-->
<!--            <h4><a href="">--><?php //echo $v_content['name'] ?><!--</a></h4>-->
<!---->
<!--        </td>-->
<!--        <td class="cart_price">-->
<!--            <p>BDT --><?php //echo $v_content['price'] ?><!--</p>-->
<!--        </td>-->
<!--        <td class="cart_quantity">-->
<!--            <div class="cart_quantity_button">-->
<!---->
<!--                <form action="--><?php //echo base_url() ?><!--cart/update_cart" method="post">-->
<!---->
<!--                    <input class="cart_quantity_input" type="text" name="quantity"-->
<!--                           value="--><?php //echo $v_content['qty'] ?><!--" autocomplete="off" size="2">-->
<!--                    <input type="hidden" name="rowId" value="--><?php //echo $v_content['rowid'] ?><!--">-->
<!--                    <input type="submit" name="btn" value="Update">-->
<!--                </form>-->
<!--            </div>-->
<!--        </td>-->
<!--        <td class="cart_total">-->
<!--            <p class="cart_total_price">BDT --><?php //echo $v_content['subtotal'] ?><!--</p>-->
<!--        </td>-->
<!--        <td class="cart_delete">-->
<!--            <a class="cart_quantity_delete"-->
<!--               href="--><?php //echo base_url(); ?><!--delete-to-cart/--><?php //echo $v_content['rowid'] ?><!--"><i-->
<!--                        class="fa fa-times"></i></a>-->
<!--        </td>-->
<!--    </tr>-->
<!---->
<?php //} ?>
