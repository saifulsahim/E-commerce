<div id="invoiceReport">
    <table class="table" style="border: hidden">
        <tr>
            <td width="70%" style="padding-top: 8%"><h4 style="font-weight: bold">INVOICE NO # <?php echo $order_information->order_id?>
                   </h4></td>
            <tr>
                <table>
                    <tr>
                    <td>
                    Invoice Date :   <?php echo date('d/m/Y',strtotime($order_information->order_date))?>
                    </td>
                    </tr>

                    <td>
                        Due Date :   <?php echo date('d/m/Y',strtotime($order_information->order_date.' + 7 day'))?>
                    </td>
                </table>
            </tr>
            <td></td>

        </tr>
    </table>
    <hr style="border-top: 1px solid #8c8b8b">
    <table class="table" style="border: hidden">
        <tr>
            <td>
                <table>
                    <tr>
                        <td><h5 style="font-weight: bold">Invoices To</h5></td>
                    </tr>
                    <tr>
                        <td>Name:  <?php echo $customer_info->customer_name?> </td>
                    </tr>
                    <tr>
                        <td>Address: <?php echo $customer_info->address?> </td>
                    </tr>
                    <tr>
                        <td>City: <?php echo $customer_info->city?></td>
                    </tr>
                    <tr>
                        <td>Zip Code: <?php echo $customer_info->zip_code?></td>
                    </tr>

                </table>
            </td>
            <td>
                <table class="table table-bordered tab-content tab-pane">
                    <tr>
                        <td><h5 style="font-weight: bold">Ship To</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Shipping Name: <?php echo $shipping_info->shipping_name?> </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>City : <?php echo $shipping_info->city?>  </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Zip Code : <?php echo $shipping_info->zip_code?> </td>
                        <td></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <hr style="border-top: 1px solid #8c8b8b">
    <table class="table table-bordered">
        <tr>
            <th width="60%">Product Name</th>
            <th>Order ID</th>
            <th>QTY</th>
            <th>Price</th>
            <th>Total</th>
        </tr>
        <?php
        $total = 0;
        foreach ($order_details as $v_order_details){

            ?>
            <tr>
                <td width="60%"><?php echo $v_order_details->product_name; ?></td>
                <td><?php echo $v_order_details->order_id; ?></td>
                <td><?php echo $v_order_details->product_sales_quantity; ?></td>
                <td><?php echo $v_order_details->product_price; ?></td>
                <td><?php echo $v_order_details->product_sales_quantity * $v_order_details->product_price; ?></td>
                <td>
                    <?php
                    $total =$total + $v_order_details->product_sales_quantity * $v_order_details->product_price;
                    ?>
                </td>
            </tr>
       <?php } ?>
        <tr>
            <td></td>
            <td colspan="3" align="center">Sub Total</td>
            <td><?php echo $total?></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="3" align="center">Vat 15%</td>
            <td>
            <?php echo 'BDT ' . $vat = (15 * $total)/100;

            ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="3" align="center">Grand Total</td>
            <td>
            <?php echo
            $g_total =$total +$vat;
                ?>
            </td>
        </tr>
    </table>
</div>
<div style="text-align: center">
    <button onclick="printContent('invoiceReport');"><span class="glyphicon glyphicon-print"></span>Print</button>
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

