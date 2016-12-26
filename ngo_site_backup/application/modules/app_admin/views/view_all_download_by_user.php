<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <div class="warper container-fluid">
       <?php 
      $sr=1;
      foreach ($app_data as $data_tobe_print )
      { $name=	$data_tobe_print['name'];
        $email= $data_tobe_print['email']; }
       ?>
<div class="page-header"><h3><span style="color: #b71c1c;"><?php echo $name;?></span>'s history <br/><small style="color: #b71c1c;">Email: <?php echo $email;?></small></h3></div>
            
            <div class="row">
            
            	<div class="col-md-12">
                 	<div class="panel panel-default">
                        <div class="panel-heading"></div>
                        <div class="panel-body">
 						 	<table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th width="1">Sr.No.</th>
                                  <th>Title</th>
                                  <th>Apps Links</th>
                                  <th>Downloaded on</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody> 
                                  <?php 
      $sr=1;
      foreach ($app_data as $data_tobe_print )
      {
      	  ?>
       <tr>
         <td><?php echo $sr; ?></th>
        <td><?php  echo $data_tobe_print['app_title']; ?></td>
        <td><?php  echo $data_tobe_print['app_link']; ?></td>
        <td><?php  echo $data_tobe_print['on_date']; ?></td>
         <td> <a href="javascript:void(0);"   ><i class="fa fa-trash fa-2x"></i></a></td>
      </tr>
      <?php  $sr++ ;
      	 }  ?>            
									</tbody>
                                    </table>
 							 </div>
                   		 </div>
                 	</div>
            	</div>
           </div> 
        