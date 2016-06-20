<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?php echo base_url()?>">Dashboard</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <i class="icon-edit"></i>
        <a href="">Product</a>
    </li>
</ul>
<div class="box span12">
    <div class="box-header" data-original-title="">
        <h2>
            <i class="halflings-icon user"></i>
            <span class="break"></span>
            Edit Product
        </h2>
        <div class="box-icon">
            <a class="btn-setting" href="#">
                <i class="halflings-icon wrench"></i>
            </a>
            <a class="btn-minimize" href="#">
                <i class="halflings-icon chevron-up"></i>
            </a>
            <a class="btn-close" href="#">
                <i class="halflings-icon remove"></i>
            </a>
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
        <form class="form-horizontal"  action="<?php echo base_url();?>dashboard/update_product" method="post">
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="typeahead">Product Name</label>
                    <div class="controls">
                        <input type="hidden" class="span6 typeahead" id="typeahead" name="product_id" value="<?php echo $product_info_by_id->product_id?>">
                        <input type="text" class="span6 typeahead" id="typeahead" name="product_name" value="<?php echo $product_info_by_id->product_name?>">
                    </div>
                </div>
                <div class="control-group hidden-phone">
                    <label class="control-label" for="typeahead">Product Price</label>
                    <div class="controls">
                        <input type="text" class="span6 typeahead" id="typeahead" name="product_price" value="<?php echo $product_info_by_id->product_price?>">
                    </div>
                </div>
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea1">Product Short Description</label>
                    <div class="controls">
                        <textarea class="cleditor" id="textarea2" name="product_short_description" rows="3"><?php echo $product_info_by_id->product_short_description?></textarea>
                    </div>
                </div>
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea1">Product Long Description</label>
                    <div class="controls">
                        <textarea class="cleditor" id="textarea2" name="product_long_description" rows="3"><?php echo $product_info_by_id->product_long_description?></textarea>
                    </div>
                </div>
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea1">Product Image</label>
                    <div class="controls">
                        <input type="file" name="product_image" value="<?php echo $product_info_by_id->product_image?>">
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Update Product</button>
                    <button type="reset" class="btn">Cancel</button>
                </div>
            </fieldset>
        </form>   
    </div>
</div>