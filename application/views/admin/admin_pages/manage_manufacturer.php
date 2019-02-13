

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
                    <th>Manufacturer ID</th>
                    <th>Manufacturer Name</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($all_manufacturer as $manufacturer){ ?>
                    <tr>
                        <td><?php echo $manufacturer->manufacturer_id ?></td>
                        <td class="center"><?php echo $manufacturer->manufacturer_name ?></td>

                        <td>
                            <?php

                            if($manufacturer->manufacturer_status == 1){
                                echo 'Active';
                            }elseif($manufacturer->manufacturer_status == 2){

                                echo 'Inactive';
                            }elseif($manufacturer->manufacturer_status == 3){

                                echo 'Deleted';
                            }

                            ?>
                        </td>

                        <td class="center">
                            <?php if($manufacturer->manufacturer_status == 1 || $manufacturer->manufacturer_status == 3 ){?>
                                <a class="btn btn-success" href="<?php echo base_url("change-manufacturer-status/$manufacturer->manufacturer_id/2")?>" title="Update Status">
                                    <i class="halflings-icon white thumbs-up"></i>
                                </a>

                            <?php } elseif($manufacturer->manufacturer_status == 2){ ?>

                                <a class="btn btn-danger" href="<?php echo base_url("change-manufacturer-status/$manufacturer->manufacturer_id/1")?>" title="Update Status">
                                    <i class="halflings-icon white thumbs-down"></i>
                                </a>

                            <?php } ?>

                            <a class="btn btn-info" href="<?php echo base_url("edit-manufacturer/$manufacturer->manufacturer_id")?>" title="Edit">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <?php if($manufacturer->manufacturer_status != 3){?>

                                <a class="btn btn-danger" onclick='return confirm_delete()' href="<?php echo base_url("change-manufacturer-status/$manufacturer->manufacturer_id/3")?>" title="Delete">
                                    <i class="halflings-icon white trash"></i>
                                </a>

                            <?php }?>

                        </td>

                    </tr>
                <?php }?>

                </tbody>
            </table>
        </div>
    </div><!--/span-->

</div><!--/row-->

<script>

    function confirm_delete(){
        return confirm("Are you sure?");
    }

</script>
