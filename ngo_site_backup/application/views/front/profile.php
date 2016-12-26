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
      <tr>
        <th>Sr. No.</th>
        <th>Heading</th>
        <th>Phone</th>
		<th>Image</th>
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
         <th><?php echo $data_tobe_print['heading']; ?></th>
         <th><?php echo $data_tobe_print['phone']; ?></th>
		 <th><?php echo $data_tobe_print['image']; ?></th>
		 <th><?php echo $data_tobe_print['description']; ?></th>
		 <th><a href="#" title="Edit" class="btn btn-primary">Edit</a> &nbsp; <a href="#" title="Delete" class="btn btn-primary">Delete</a></th>
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