<br/>
<section id="contact-page">
    <div class="container">
            <div class="center">        
                <h2>Donation</h2>
                <p class="lead"></p>
            </div> 
		 <?php if(!empty($error)){  ?>
         <div class='alert alert-warning' style='width: auto; text-align: center;'>
         <a href='#' class='close' data-dismiss='alert'>&times;</a> <?php  foreach($error as $key => $value)
         { 
         echo $value."</br>";
         } ?></div>
					<?php } ?>
					<?php if(!empty($error2)){  ?>
         <div class='alert alert-warning' style='width: auto; text-align: center;'>
         <a href='#' class='close' data-dismiss='alert'>&times;</a> <?php  foreach($error2 as $key => $value)
         { 
         echo $value."</br>";
         } ?></div>
	<?php } ?>		
    <div style="border: 2px solid rgba(0, 0, 0, 0.14);
    padding: 0px 15px 15px 15px;" class="container">
<!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">My Donation</a></li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="settings">
    <table class=" table table-striped">
    <thead>
	  <tr><th colspan="6"><a href="<?php echo base_url('donation/new_donation')?>" class="btn btn-danger" title="Add Donation">Add Donation</a></th></tr>
      <tr>
        <th>Sr. No.</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Location</th>
		<th>Image</th>
        <th>Item</th>
		<th>Description</th>
		<th>Action</th>
      </tr>
      <?php 
      $sr=1;
      foreach ($app_data as $data_tobe_print)
      {
      	  ?>
       <tr>
         <th><?php echo $sr; ?></th>
         <th><?php echo $data_tobe_print['name']; ?></th>
         <th><?php echo $data_tobe_print['phone']; ?></th>
         <th><?php echo $data_tobe_print['location']; ?></th>
         <th><img src="<?php echo base_url().'upload/'.$data_tobe_print['image'];?>" width="100" /></th>
	 
         <th><?php echo $data_tobe_print['item']; ?></th>
		 <th><?php echo $data_tobe_print['description']; ?></th>
		 <th><a href="<?php echo base_url('donation/edit_donation?url='.$data_tobe_print['id'].'')?>" title="Edit" class="btn btn-primary">Edit</a> &nbsp; <a style="cursor:pointer" onClick="ondelete(this.value='<?php echo base_url('business/delete_donation?url='.$data_tobe_print['id'].'')?>')" title="Delete" class="btn btn-primary">Delete</a></th>
      </tr>
      <?php  $sr++ ;
      	 }  ?>
     </thead>   
	</table>
	</div>
	</div>
  </div>
</div>
</div><!--/.container-->
</section><!--/#contact-page-->