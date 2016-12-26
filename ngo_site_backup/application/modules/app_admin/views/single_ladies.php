<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <div class="warper container-fluid">
    <?php
                                   $k = 1;
							foreach ($single_app as $row)
							{  $la_id = $row->id; ?>      
<div class="page-header"><h3><?php echo $row->name; ?><small></small></h3></div>
            
            <div class="row">
            
            	<div class="col-md-12">
                 	<div class="panel panel-default">
                        <div class="panel-heading"></div>
                        <div class="panel-body">
 						 	<table class="table table-bordered">
                              <tbody> 
                                 
						<tr><th>App logo Image</th><td><img height="200" width="300" src="<?php echo base_url().'upload/'.$row->image;?>"></td></tr>
                                        <tr><th>Image</th><td>
                                        
                                         <?php 
                                    $this->db->select('*');
									$this->db->from('ladies_images');
									$this->db->where('ladies_id', $la_id);
									$query = $this->db->get();
								    $data = $query->result();
									
                                    ?>
                                   
                                 <?php  foreach ($data as $la_row)
							{ ?>  <div style="display: inline-block;">  
							 <p><img src="<?php echo base_url().'upload/'.$la_row->file_name; ?>"  width="100px"/></p> 
						    <p class="text-center"> <button class="btn btn-danger ">Delete</button> </p> </div>
                                  <?php } ?>
                                 
                                  
                                        
                                        
                                        </td></tr>
   							 <tr><th>Ladies Name</th><td><?php echo $row->name; ?></td></tr>
                                      <tr><th>Age</th><td><?php echo $row->age; ?></td></tr>
                                      <tr> <th>Height</th><td><?php echo $row->Height; ?></td>	</tr>
 <tr><th>Color</th> <td><?php echo $row->color; ?></td></tr>
                                        <tr><th>C/W/H</th> <td><?php echo $row->c_w_h; ?></td></tr>	
                                       <tr>	<th>Traits</th><td><?php echo $row->traits; ?></td></tr>
 <tr>	<th>Looks</th><td><?php echo $row->Looks; ?></td></tr>
 <tr>	<th>Horoscope</th><td><?php echo $row->Horoscope; ?></td></tr>
                                     	
                                       <tr><th>Action</th><td>
                             <?php echo anchor('modelcont/edit_model?url='.$row->id, 'Edit', 'class="btn btn-primary"'); ?>
                             <?php echo anchor('modelcont/delete_model?url='.$row->id, 'Delete', 'class="btn btn-danger"'); ?>  
                                </td></tr>
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
                      