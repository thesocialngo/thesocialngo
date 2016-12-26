<br />
<section id="contact-page" style="min-height: 540px;">
<div class="container-fluid">
<h1 class="donate_heading" style="margin-left: 25px;">Login</h1><hr />
	<div class="center">        
		<h2>Login Form</h2>
	</div> 
	<div class="row contact-wrap " style="margin-left: 0px; margin-right: 0px;"> 
	<div class="col-md-12 nopadding">
	<div class="col-md-4">
		<img src="<?php echo base_url()?>images/new/breadCrumbs.jpg" alt="image" class="img-responsive" />
	</div>
	<div class="col-md-4">
		<div class="status alert alert-success" style="display: none"></div>
	   <?php echo form_open('verifylogin', array(
								'class'=>'form-validate form-horizontal',
								'enctype'=>'multipart/form-data' ,
								'id'=>'register_form',
								 'method'=>'post'));  ?>
			<?php if(isset($_REQUEST['redirect'])){?>
			<input type="hidden" name="redirect" value="<?php echo base_url(base64_decode($_REQUEST['redirect'])) ?>" />
			<?php }else{?>
			<input type="hidden" name="redirect" value="<?php echo base_url('donation') ?>" />
			<?php }?>
			<div class="col-sm-12">
				<div class="form-group">
				   
					<input type="email" placeholder="Username" name="username" class="form-control" required>
				</div>
			   </div>
			   <div class="col-sm-12 ">
		 <div class="form-group">
				   
					<input type="password" placeholder="Password" name="password" class="form-control" required>
				</div>
	 </div>
	  <div class="col-sm-12 ">                   
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Login</button>
				</div>
				</div>
				  </form> 
				</div>
	<div class="col-md-4">
		<img src="<?php echo base_url()?>images/new/rightsideimage.jpg" alt="image" class="img-responsive" />
	</div>
	</div>
	</div><!--/.row-->
</div><!--/.container-->
</section><!--/#contact-page-->