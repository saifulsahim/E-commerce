
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Check out</li>
            </ol>
        </div><!--/breadcrums-->



        <div class="step-one">
            <h2 class="heading">Step2 : Billing </h2>

        </div>

        <div class="shopper-informations">
            <div class="row">

                <div class="col-sm-8 clearfix">
                    <div class="bill-to">
                        <p>Bill To</p>
                        <div class="form-one">
                            <form action="<?php echo base_url();?>update-billing" method="post" name="billing_info">
                                <input type="hidden" name="customerId"  value="<?php echo $customer_info->customer_id?>">
                                <input type="text" name="customerName" placeholder="Name" value="<?php echo $customer_info->customer_name?>">
                                <input type="email" name="emailAddress" placeholder="Email*" value="<?php echo $customer_info->email_address?>">
                                <input type="number" name="mobileNumber" placeholder="Mobile No" value="<?php echo $customer_info->mobile_number?>">
                                <input type="text" name="address" placeholder="Address.." value="<?php echo $customer_info->address?>">
                                <input type="text" name="city" placeholder="City" value="<?php echo $customer_info->city?>">
                                <select name="country" value="<?php echo $customer_info->country?>">
                                    <option>Select Country... </option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Canada">Canada</option>
                                    <option value="United States">United States</option>
                                </select>
                            </br>
                                </br>
                                <input type="zip_code" name="zipCode" placeholder="ZIP Code" value="<?php echo $customer_info->zip_code?>">
<!--                                <input type="checkbox" name="shippingStatus"><span>Shipping same as Billing</span>-->
                                <input type="submit" name="btn" class="btn btn-primary" value="Save & Continue">
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


</section> <!--/#cart_items-->

<script>
    document.forms['billing_info'].elements['country'].value=<?php echo $customer_info->country?>//;

</script>


