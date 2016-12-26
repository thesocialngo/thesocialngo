<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <div class="warper container-fluid">
   <?php foreach ($all_career as $row)
							{ ?>
<div class="page-header"><h3><?php echo $row->fn; ?> <?php echo $row->ln; ?><small></small></h3></div>
            
            <div class="row">
            
            	<div class="col-md-12">
                 	<div class="panel panel-default">
                        <div class="panel-heading"></div>
                        <div class="panel-body">
 						 	<table class="table table-bordered">
                              <tbody> 
                                        <tr><th>Name</th><td><?php echo $row->fn.' '.$row->ln; ?>   </td></tr>
                                        <tr><th>Phone</th><td><?php echo $row->phone; ?></td></tr>
                                        <tr><th>Email</th><td><?php echo $row->email; ?></td></tr>
                                        <tr> <th>Address</th><td><?php echo $row->address; ?></td>	</tr>
                                        <tr><th>age</th> <td><?php echo $row->age; ?></td></tr>
                                        <tr><th>gender</th> <td><?php echo $row->gender; ?></td></tr>	
                                        <tr><th>Height</th><td><?php echo $row->height; ?></td></tr>
                                        <tr><th>Weight</th><td><?php echo $row->weight; ?></td></tr>
                                        <tr><th>Chest</th><td><?php echo $row->chest; ?></td></tr>
                                        <tr><th>Image</th><td>
                                        <?php if($row->Full_Height){ ?>
                                        <img src="<?php echo base_url().'upload/career/'.$row->Full_Height; ?>"  width="100px"/>
                                       <?php } ?>
                                       <?php if($row->Face_Close_Up){ ?>
                                        <img src="<?php echo base_url().'upload/career/'.$row->Face_Close_Up; ?>"  width="100px"/>
                                      <?php } ?>
                                      <?php if($row->Shoulder_Up){ ?>
                                        <img src="<?php echo base_url().'upload/career/'.$row->Shoulder_Up; ?>"  width="100px"/>
                                        <?php } ?>
                                        </td></tr>
                                     	<tr><th>Action</th><td>
                                        <?php echo anchor('modelcont/delete_model?url='.$row->id, 'Delete', 'class="btn btn-danger"'); ?>  
                                </td></tr>
                                
                                <?php } ?>
                                    </tbody>
                                    </table>
                                 
                        </div>
                    </div>
                 </div>
            </div>
          
           </div>
                      