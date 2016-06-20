<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?php echo base_url()?>"">Dashboard</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <i class="icon-edit"></i>
        <a href="#">Category</a>
    </li>
</ul>
<div class="box span12">
    <div class="box-header" data-original-title="">
        <h2>
            <i class="halflings-icon user"></i>
            <span class="break"></span>
            Edit Category
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
        
        <form class="form-horizontal"  action="<?php echo base_url();?>dashboard/update_category" method="post">
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="typeahead">Category Name</label>
                    <div class="controls">
                        <input type="hidden" class="span6 typeahead" id="typeahead" name="category_id" value="<?php echo $category_info_by_id->category_id?>">
                        <input type="text" class="span6 typeahead" id="typeahead" name="category_name" value="<?php echo $category_info_by_id->category_name?>">
                    </div>
                </div>

                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea1">Category Description</label>
                    <div class="controls">
                        <textarea class="cleditor" id="textarea2" name="category_description" rows="3"><?php echo $category_info_by_id->category_description?></textarea>
                    </div>
                </div>
                
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Update Category</button>
                    <button type="reset" class="btn">Cancel</button>
                </div>
            </fieldset>
        </form>   
    </div>
</div>