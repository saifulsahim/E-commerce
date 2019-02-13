
<div id="invoiceReport">
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer Name</th>
                    <th>Product Name</th>
                    <th>Product  Quantity</th>
                    <th>Total Order</th>
                    <th>Order Status</th>
                    <th>Payment Status</th>
                    <th>Actions</th>
<!--                    <th>Product Quantity</th>-->
<!--                    <th>Product Price</th>-->
<!--                    <th>Total Order</th>-->
<!--                    <th>Order Status</th>-->
<!--                    <th>Payment Status</th>-->



                </tr>
                </thead>
                <tbody>

                <?php foreach ($all_invoice as $v_invoice){ ?>
                    <tr>
                        <td><?php echo $v_invoice->order_id?></td>
                        <td><?php echo $v_invoice->customer_name?></td>
                        <td><?php echo $v_invoice->product_name?></td>
                        <td><?php echo $v_invoice->product_sales_quantity?></td>
                        <td><?php echo $v_invoice->order_total?></td>

                        <td><?php echo $v_invoice->order_status?></td>
                        <td><?php echo $v_invoice->payment_status?></td>


                        <td>
                            <a class="btn btn-success" href="<?php echo base_url()?>invoice/view_invoice/<?php echo $v_invoice->order_id?>" title="View Invoice"><i class="halflings-icon white zoom-in"></i>

                                <a class="btn btn-info" href="<?php echo base_url()?>edit-invoice/<?php echo $v_invoice->order_id?>">
                                    <i class="halflings-icon white edit"></i>
                                </a>
                                <a class="btn btn-danger" onclick='return confirm_delete()' href="<?php echo base_url()?>delete-invoice/<?php echo $v_invoice->order_id?>" title="Delete">
                                    <i class="halflings-icon white trash"></i>
                                </a>

                        </td>
<!--                        <td>--><?php //echo $product->product_id ?><!--</td>-->
<!--                        <td class="center">--><?php //echo $product->product_name ?><!--</td>-->
<!---->
<!---->
<!--                        <td>--><?php //echo $product->customer_name?><!--</td>-->
<!---->
<!--                        <td>-->
<!--                            --><?php
//
//                            if($product->product_status == 1){
//                                echo 'Active';
//                            }elseif($product->product_status == 2){
//
//                                echo 'Inactive';
//                            }elseif($product->product_status == 3){
//
//                                echo 'Deleted';
//                            }
//
//                            ?>
<!--                        </td>-->
<!---->
<!--                        <td class="center">-->
<!--                            --><?php //if($product->product_status == 1 || $product->product_status == 3 ){?>
<!--                                <a class="btn btn-success" href="--><?php //echo base_url("change-manufacturer-status/$manufacturer->manufacturer_id/2")?><!--" title="Update Status">-->
<!--                                    <i class="halflings-icon white thumbs-up"></i>-->
<!--                                </a>-->
<!---->
<!--                            --><?php //} elseif($product->product_status == 2){ ?>
<!---->
<!--                                <a class="btn btn-danger" href="--><?php //echo base_url("change-manufacturer-status/$manufacturer->manufacturer_id/1")?><!--" title="Update Status">-->
<!--                                    <i class="halflings-icon white thumbs-down"></i>-->
<!--                                </a>-->
<!---->
<!--                            --><?php //} ?>
<!---->
<!--                            <a class="btn btn-info" href="--><?php //echo base_url("edit-manufacturer/$manufacturer->manufacturer_id")?><!--" title="Edit">-->
<!--                                <i class="halflings-icon white edit"></i>-->
<!--                            </a>-->
<!--                            --><?php //if($product->product_status != 3){?>
<!---->
<!--                                <a class="btn btn-danger" href="--><?php //echo base_url("change-manufacturer-status/$manufacturer->manufacturer_id/3")?><!--" title="Delete">-->
<!--                                    <i class="halflings-icon white trash"></i>-->
<!--                                </a>-->
<!---->
<!--                            --><?php //}?>
<!---->
<!--                        </td>-->

                    </tr>
                <?php }?>

                </tbody>
            </table>
        </div>
    </div><!--/span-->

</div><!--/row-->
</div>

<script>

    function printContent(el) {
        var restorePage = document.body.innerHTML;
        var printContent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printContent;
        window.print();
        document.body.innerHTML = restorePage;
    }





</script>


<script>

    function confirm_delete(){
        return confirm("Are you sure?");
    }

</script>


<!--<div style="text-align: center">-->
<!--    <button onclick="printContent('invoiceReport');"><span class="glyphicon glyphicon-print"></span>Print</button>-->
<!--</div>-->
<!---->
<!---->
<!--<script>-->
<!---->
<!--    function printContent(el) {-->
<!--        var restorePage = document.body.innerHTML;-->
<!--        var printContent = document.getElementById(el).innerHTML;-->
<!--        document.body.innerHTML = printContent;-->
<!--        window.print();-->
<!--        document.body.innerHTML = restorePage;-->
<!--    }-->
<!---->
<!---->
<!--</script>-->
