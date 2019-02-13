<?php


$message = $this->session->message;

if (isset($message)) {

    echo $message;
    $this->session->unset_userdata('message');
}

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
            <?php echo form_open_multipart('products/save_product', 'class= form-horizontal'); ?>
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="typeahead">Product Name</label>
                    <div class="controls">
                        <input type="text" name="productName" value="" class="span6 typeahead" id="typeahead"
                               data-provide="typeahead" data-items="4"
                               data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'
                               required>

                    </div>

                </div>


                <div class="control-group">
                    <label class="control-label" for="typeahead">Product Price</label>
                    <div class="controls">
                        <input type="text" name="productPrice" value="" class="span6 typeahead" id="typeahead"
                               data-provide="typeahead" data-items="4"
                               data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'
                               required>

                    </div>

                </div>


                <div class="control-group">
                    <label class="control-label" for="typeahead">Product Short Description</label>
                    <div class="controls">
                        <input type="text" name="productShortDesc" value="" class="span6 typeahead" id="typeahead"
                               data-provide="typeahead" data-items="4"
                               data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'
                               required>

                    </div>

                </div>


                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Product Long Description</label>
                    <div class="controls">
                        <textarea name="productLongDesc" class="cleditor" id="textarea2" rows="3"></textarea>
                    </div>
                </div>


                <div class="control-group">
                    <label class="control-label" for="typeahead">Product Quantity</label>
                    <div class="controls">
                        <input type="text" name="productQuantity" value="" class="span6 typeahead" id="typeahead"
                               data-provide="typeahead" data-items="4"
                               data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'
                               required>

                    </div>

                </div>


                <div class="control-group">
                    <label class="control-label" for="selectError3">Product Category</label>
                    <div class="controls">
                        <select name="categoryId" id="selectError3">

                            <option>--Select Category---</option>

                            <?php foreach ($category_info as $category) { ?>

                                <option value="<?php echo $category->category_id ?>"><?php echo $category->category_name; ?></option>


                            <?php } ?>

                            ?>

                        </select>
                    </div>
                </div>




                <div class="control-group">
                    <label class="control-label" for="selectError3">Product Manufacturer</label>
                    <div class="controls">
                        <select name="manufacturerId" id="selectError3">

                            <option>--Select Category---</option>

                            <?php foreach ($manufacturer_info as $manufacturer) { ?>

                                <option value="<?php echo $manufacturer->manufacturer_id ?>"><?php echo $manufacturer->manufacturer_name; ?></option>


                            <?php } ?>

                            ?>

                        </select>
                    </div>
                </div>


                <div class="control-group">
                    <label class="control-label" for="fileInput">Product Image</label>
                    <div class="controls">
                        <input type="file" name="productImage" value="" class="input-file uniform_on" id="fileInput">
                    </div>

                </div>

                <div class="control-group">
                <label class="control-label" for="typeahead">Top Product</label>
                <div class="controls">
                    <input type="checkbox" name="topProduct" >
                </div>

        </div>



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