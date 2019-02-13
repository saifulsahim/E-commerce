<?php

$customer = $this->checkout_model->get_customer_by_order($order_info->customer_id);
$order_details = $this->invoice_model->get_order_details_by_order($order_info->order_id);
$payment = $this->invoice_model->get_payment_status_by_order($order_info->payment_id);


?>


<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <!--            <form class="form-horizontal" action="" method="post">-->
            <?php echo form_open('update-invoice', 'class= form-horizontal'); ?>


            <fieldset>

                <div class="control-group">
                    <label class="control-label" for="typeahead">Order ID</label>
                    <div class="controls">

                        <input type="text" name="orderId" value="<?php echo $order_info->order_id; ?>">
                        <input type="hidden" name="oldOrderId" value="<?php echo $order_info->order_id; ?>">
                        <input type="hidden" value="<?php echo $payment->payment_id; ?>" name="oldPaymentId">
                        <input type="hidden" value="<?php echo $order_details->order_details_id; ?>"
                               name="oldOrderDetailsId">
                    </div>

                </div>


                <div class="control-group">
                    <label class="control-label" for="typeahead">Product Name</label>
                    <div class="controls">
                        <input type="text" name="productName" value="<?php echo $order_details->product_name; ?>"
                               class="span6 typeahead" id="typeahead" data-provide="typeahead" data-items="4" required>

                    </div>

                </div>

                <div class="control-group">
                    <label class="control-label" for="typeahead">Customer Name</label>
                    <div class="controls">
                        <input type="text" name="customerName" value="<?php echo $customer->customer_name ?>"
                               class="span6 typeahead" id="typeahead" data-provide="typeahead" data-items="4"
                               data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'
                               required>

                    </div>

                </div>


                <div class="control-group">
                    <label class="control-label" for="typeahead">Product Quantity </label>
                    <div class="controls">
                        <input type="text" name="productQuantity"
                               value="<?php echo $order_details->product_sales_quantity ?>" class="span6 typeahead"
                               id="typeahead" data-provide="typeahead" data-items="4"
                               data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'
                               required>

                    </div>

                </div>

                <div class="control-group">
                    <label class="control-label" for="typeahead">Total Order </label>
                    <div class="controls">
                        <input type="text" name="orderTotal" value="<?php echo $order_info->order_total; ?>"
                               class="span6 typeahead" id="typeahead" data-provide="typeahead" data-items="4"
                               data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'
                               required>

                    </div>

                </div>


                <div class="control-group">
                    <label class="control-label" for="typeahead">Order Status </label>
                    <div class="controls">
                        <input type="text" name="orderStatus" value="<?php echo $order_info->order_status ?>"
                               class="span6 typeahead" id="typeahead" data-provide="typeahead" data-items="4"
                               data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'
                               required>

                    </div>

                </div>

                <div class="control-group">
                    <label class="control-label" for="typeahead">Payment Status </label>
                    <div class="controls">
                        <input type="text" name="paymentStatus" value="<?php echo $payment->payment_status ?>"
                               class="span6 typeahead" id="typeahead" data-provide="typeahead" data-items="4"
                               data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'
                               required>

                    </div>

                </div>


                <!--                <div class="control-group">-->
                <!--                <label class="control-label" for="typeahead">Available Quantity</label>-->
                <!--                <div class="controls">-->
                <!--                    <input type="text" name="productName" value="" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' required>-->
                <!---->
        </div>

    </div>


    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <button type="reset" class="btn">Cancel</button>
    </div>
    </fieldset>
    <?php echo form_close() ?>
    <!--            </form>-->

</div>
</div><!--/span-->


</div><!--/row-->