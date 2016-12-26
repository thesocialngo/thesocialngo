<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <div class="warper container-fluid">       
<div class="page-header"><h3>All User<small></small></h3></div>
           <div class="row">         
            	<div class="col-md-12">
                 	<div class="panel panel-default">
                        <div class="panel-heading"></div>
                        <div class="panel-body">
 						 	<table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th width="1">Sr.No.</th>
                                  <th>Frist Name</th>
                                  <th>Last Name</th>
                                  <th>Gender</th>
                                  <th>Email</th>
                                  <th>Dob</th>
                                  <th>Contact</th>
                                  <th>Country</th>
                                  <th>Ragis. Date</th>
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
    							   		<td> <?php echo $row->first_name; ?></td>
    								   <td><?php echo $row->last_name; ?></td>
                                       <td><?php echo $row->gender; ?></td>
                                       <td><?php echo $row->email; ?></td>	
                                       <td><?php echo $row->dob; ?></td>	
                                       <td><?php echo $row->contact; ?></td>	
                                       <td><?php echo $row->country; ?></td>
                                       <td><?php echo $row->registration_date; ?></td>		
                                       <td>  <?php  echo anchor('app_admin/apps/dnld_by_user?url='.$row->id, '<i class="fa fa-download  fa-2x"></i>', 'title="Downloads History"');
                          					echo anchor('app_admin/apps/delete_users?url1='.$row->id, '<i class="fa fa-trash fa-2x"></i>', 'title="Delete"',array('onClick' => "return confirm('Are you sure you want to delete?')"));?>     							
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
        