<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Order Details</h2>
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
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Sales Quantity</th>
                    <th>Product Sub Total</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($order_details as $v_order) { ?>
                <tr>

                    <td class="center"><?php echo $v_order->order_details_id?></td>
                    <td class="center"><?php echo $v_order->product_name?></td>
                    <td class="center"><?php echo $v_order->product_price?></td>
                    <td class="center"><?php echo $v_order->product_sales_quantity?></td>
                    <td class="center"><?php echo $v_order->product_price *$v_order->product_sales_quantity ?></td>

                </tr>

                <?php }?>
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="4">Total With Vat</td>
                        <td><?php echo $order_information->order_total?></td>
                </tr>

                </tfoot>
            </table>
        </div>
    </div><!--/span-->

</div><!--/row-->

<div class="row-fluid sortable">
    <div class="box span6">
        <div class="box-header">
            <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Customer Table</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table">
                <thead>
                <tr>
                    <th>Username</th>
                    <th>Mobile No</th>

                </tr>
                </thead>
                <tbody>
                <tr>

                    <td class="center"><?php echo $customer_info->customer_name?></td>
                    <td class="center"><?php echo $customer_info->mobile_number?></td>

                </tr>

                </tbody>
            </table>
            <div class="pagination pagination-centered">
                <ul>
                    <li><a href="#">Prev</a></li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </div><!--/span-->

    <div class="box span6">
        <div class="box-header">
            <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Shipping Table</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Username</th>
                    <th>Mobile No</th>

                </tr>
                </thead>
                <tbody>
                <tr>

                    <td class="center"><?php echo $shipping_info->shipping_name?></td>
                    <td class="center"><?php echo $shipping_info->mobile_no?></td>

                </tr>

                </tbody>
            </table>
            <div class="pagination pagination-centered">
                <ul>
                    <li><a href="#">Prev</a></li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </div><!--/span-->
</div><!--/row-->


<div class="pagination pagination-centered">
    <ul>
        <li><a href="#">Prev</a></li>
        <li class="active">
            <a href="#">1</a>
        </li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">Next</a></li>
    </ul>
</div>
</div>
</div><!--/span-->
</div><!--/row-->


</div><!--/.fluid-container-->

<!-- end: Content -->
</div><!--/#content.span10-->
</div><!--/fluid-row-->

<div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Settings</h3>
    </div>
    <div class="modal-body">
        <p>Here settings can be configured...</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
    </div>
</div>

<div class="clearfix"></div>

<footer>

    <p>
        <span style="text-align:left;float:left">&copy; 2013 <a
                    href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>

    </p>

</footer>


</body>
</html>
