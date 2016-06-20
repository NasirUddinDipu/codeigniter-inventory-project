<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?php echo base_url()?>">Dashboard</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <i class="icon-edit"></i>
        <a href="">Manufacturer</a>
    </li>
</ul>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Manage Manufacturer</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <h2 style="color:green">
            <?php
            $message = $this->session->userdata('message');
            if ($message) {
                echo $message;
                $this->session->unset_userdata('message');
            }
            ?>
            </h2>
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Manufacturer ID</th>
                        <th>Manufacturer Name</th>
                        <th>Manufacturer Description</th>
                        <th>Manufacturer Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    foreach ($select_all_manufacturer as $v_manufacturer)
                    {
                    ?>
                    <tr>
                        <td><?php echo $v_manufacturer->manufacturer_id;?></td>
                        <td class="center"><?php echo $v_manufacturer->manufacturer_name;?></td>
                        <td class="center"><?php echo $v_manufacturer->manufacturer_description;?></td>
                        <td class="center">
                            <?php
                            if($v_manufacturer->publication_status==1)
                            {
                            ?>
                            <span class="label label-success">Active</span>
                            <?php
                            }
                            else{
                            ?>
                            <span class="label label-important">Inactive</span>
                            <?php }?>
                        </td>
                        <td class="center">
                            <?php
                            if($v_manufacturer->publication_status==1)
                            {
                            ?>
                            <a class="btn btn-danger" href="<?php echo base_url();?>dashboard/unpublished_manufacturer/<?php echo $v_manufacturer->manufacturer_id?>">
                                <i class="halflings-icon white thumbs-down"></i>  
                            </a>
                            <?php }
                            else {
                            ?>
                            <a class="btn btn-success" href="<?php echo base_url();?>dashboard/published_manufacturer/<?php echo $v_manufacturer->manufacturer_id?>">
                                <i class="halflings-icon white thumbs-up"></i>  
                            </a>
                            <?php }?>
                            
                            <a class="btn btn-info" href="<?php echo base_url();?>dashboard/edit_manufacturer/<?php echo $v_manufacturer->manufacturer_id?>">
                                <i class="halflings-icon white edit"></i>  
                            </a>
                            <a class="btn btn-danger" href="<?php echo base_url();?>dashboard/delete_manufacturer/<?php echo $v_manufacturer->manufacturer_id?>">
                                <i class="halflings-icon white trash"></i> 
                            </a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->