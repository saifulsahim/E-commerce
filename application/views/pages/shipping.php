
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Check out</li>
            </ol>
        </div><!--/breadcrums-->



        <div class="step-one">
            <h2 class="heading">Step3 : Shipping</h2>

        </div>

        <div class="shopper-informations">
            <div class="row">

                <div class="col-sm-8 clearfix">
                    <div class="bill-to">
                        <p>Shipping Address</p>
                        <div class="form-one">
                            <form action="<?php echo base_url();?>save-shipping" method="post" name="shipping_form">
                                <input type="hidden" name="customerId" value="<?php echo $customer_info->customer_id?>">
                                <input type="text" name="shippingName" placeholder="Name" >
                                <input type="email" name="emailAddress" placeholder="Email*" required >
                                <input type="number" name="mobileNo" placeholder="Mobile No">
                                <input type="text" name="address" placeholder="Address.." >
                                <input type="text" name="city" placeholder="City" >
                                <select name="country">
                                    <option>Select Country... </option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Canada">Canada</option>
                                    <option value="United States">United States</option>
                                </select>
                                </br>
                                </br>
                                <input type="zip_code" name="zipCode" placeholder="ZIP Code">
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


