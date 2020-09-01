<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Tables</a></li>
</ul>

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
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Publication Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    
                    
                    <?php
                    foreach ($all_category as $v_category)
                    {
                    ?>
                    
                    <tr>
                        <td><?php echo $v_category->category_id?></td>
                        <td class="center"><?php echo $v_category->category_name?></td>
                        <td class="center">
                            <?php
                            
                            if($v_category->publication_status==1)
                            {
                            echo '<span class="label label-success">Published</span>';    
                            }else{
                                echo '<span class="label label-important">Unpublished</span>';
                            }
                             
                              ?>
                        </td>
                        
                        <td class="center">
                            <?php
                            if($v_category->publication_status==1)
                            {
                            ?>
                            <a class="btn btn-danger" href="<?php echo base_url();?>Super_Admin/unpublished_category/<?php echo $v_category->category_id?>">
                                <i class="halflings-icon white thumbs-up"></i>  
                            </a>
                            
                            
                            <?php }else{?>
                            
                           <a class="btn btn-success" href="<?php echo base_url();?>Super_Admin/published_category/<?php echo $v_category->category_id?>">
                                <i class="halflings-icon white thumbs-down"></i>  
                            </a>
                            
                            <?php }?>
                            
                            
                            <a class="btn btn-info" href="<?php echo base_url()?>Super_Admin/edit_category/<?php echo $v_category->category_id?>">
                                <i class="halflings-icon white edit"></i>  
                            </a>
                            <a title="Delete Category" class="btn btn-danger" href="<?php echo base_url();?>Super_Admin/delete_category/<?php echo $v_category->category_id?>" onclick="return deleteCategory()">
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