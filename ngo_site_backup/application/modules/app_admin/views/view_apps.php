<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <div class="warper container-fluid">
        
<div class="page-header"><h3>All Products<small></small></h3></div>
            
            <div class="row">
            
            	<div class="col-md-12">
                 	<div class="panel panel-default">
                        <div class="panel-heading"></div>
                        <div class="panel-body">
 						 	<table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th width="1">Sr.No.</th>
                                  <th>Name</th>
                                  <th>Phone</th>
                                  <th>City</th>
                                  <th>State</th>
                                  <th>Location</th>
                                  <th>Item</th>
                                  <th>Description</th>
                                  <th>Image</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody> 
                                   <?php
                                   $k = 1;
                                  
							foreach ($app as $row)
							{
								?>
   								<tr>
                                <td><?php echo $k; ?> </td>
    							   	<td> <?php echo $row->name; ?></td>
                                       <td><?php echo $row->phone ?></td>
                                        <td><?php echo $row->city ?></td>
                                         <td><?php echo $row->state ?></td>
                                        <td><?php echo $row->location ?></td>
                                         <td><?php echo $row->item ?></td>
                                          <td><?php echo $row->description ?></td>
                                       <td>
                                     	<img src="<?php echo base_url().'upload/'.$row->image; ?>"  width="100px"/>
                                     	   </td>
                                      	 <td style="min-width: 100px;">
                           <?php echo anchor('app_admin/apps/edit_apps?url='.$row->id, '<i class="fa fa-edit fa-2x"></i>', 'title="Edit"');
                           $var= "onclick=delete_app(".$row->id.")" ;                            ?>
                           <a href="javascript:void(0);" <?php echo $var;?>  ><i class="fa fa-trash fa-2x"></i></a>
   								 
   								 </td>
                                    <?php
									$k++;
								}
                                  ?>              
									</tbody>
                                    </table>
 							 </div>
                   		 </div>
                 	</div>
            	</div>
           </div> 
        