


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
            <?php echo form_open('manufacturer/save_manufacturer','class= form-horizontal'); ?>
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="typeahead">Manufacturer Name</label>
                    <div class="controls">
                        <input type="text" name="manufacturerName" value="" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' required>

                    </div>
<!--                    --><?php //echo form_error('user_name')?>
                </div>


                <div class="control-group">
                    <label class="control-label" for="typeahead">Manufacturer  Short Description</label>
                    <div class="controls">
                        <input type="text" name="manufacturerShortDesc" value="" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' required>

                    </div>

                </div>


                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Manufacturer Long Description</label>
                    <div class="controls">
                        <textarea name="manufacturerLongDesc" class="cleditor" id="textarea2" rows="3"></textarea>
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
            <?php echo form_close()?>
            <!--            </form>-->

        </div>
    </div><!--/span-->


</div><!--/row-->