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
                        <th>Customer Name</th>
                        <th>Order Total</th>
                        <th>Confirm Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    
                    
                    <?php
                    foreach ($all_order as $v_order)
                    {
                    ?>
                    
                    <tr>
                        <td><?php echo $v_order->order_id?></td>
                        <td class="center"><?php echo $v_order->customer_name?></td>
                        <td class="center"><?php echo $v_order->order_total?></td>
                        <td class="center">
                            <?php
                            
                            if($v_order->order_confirm==1)
                            {
                            echo '<span class="label label-success">Confirm</span>';    
                            }else{
                                echo '<span class="label label-important">Pending</span>';
                            }
                             
                              ?>
                        </td>
                        
                        <td class="center">
                            <?php
                            if($v_order->order_confirm==1)
                            {
                            ?>
                            <a class="btn btn-danger" href="<?php echo base_url();?>Super_Admin/">
                                <i class="halflings-icon white thumbs-up"></i>  
                            </a>
                            
                            
                            <?php }else{?>
                            
                           <a class="btn btn-success" href="<?php echo base_url();?>Super_Admin/">
                                <i class="halflings-icon white thumbs-down"></i>  
                            </a>
                            
                            <?php }?>
                            
                            
                            <a title="Invoice" class="btn btn-warning" href="<?php echo base_url()?>Super_Admin/view_invoice/<?php echo $v_order->order_id?>">
                                <i class="halflings-icon white file"></i>  
                            </a>
                            
                            <a title="Invoice Print" class="btn btn-success" href="<?php echo base_url()?>Super_Admin/invoice_print/<?php echo $v_order->order_id?>">
                                <i class="halflings-icon white print"></i>  
                            </a>
                            
                            <a title="Invoice Pdf" class="btn btn-success" href="<?php echo base_url()?>Super_Admin/create_pdf/<?php echo $v_order->order_id?>">
                                <i class="halflings-icon white plus"></i>  
                            </a>
                            
                            
                            <a class="btn btn-info" href="<?php echo base_url()?>Super_Admin/edit_category">
                                <i class="halflings-icon white edit"></i>  
                            </a>
                            <a title="Delete Category" class="btn btn-danger" href="<?php echo base_url();?>Super_Admin/delete_category" onclick="return deleteCategory()">
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