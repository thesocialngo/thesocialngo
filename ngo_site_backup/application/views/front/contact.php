<div id="id_minheight" class="container-fluid">
	<div class="row" style="margin-right:0;">
		<div class="col-md-12">
<h1 class="text-left donate_heading" style="margin-left: 25px;">Contact us</h1><hr />
		<div class="col-md-7">
			<div id="map"></div>
		</div>
		<div class="col-md-4">
		<div class="center"> <br />       
			<h2>Give a Message</h2>
			<div class="clearfix"></div>
			<?php if($this->session->flashdata('sendmessage')):?><br /><br />
			<div class="col-md-4 col-md-offset-4">
			<div class="alert alert-dismissible alert-danger">
  				<p class="font-bold"><?=$this->session->flashdata('sendmessage')?></p>
			</div>
			</div>
			<?php endif;?>
		</div> 
		<div class="row contact-wrap "> 
		<div class="col-md-12">
			<div class="status alert alert-success" style="display: none"></div>
		  
			  <?php echo form_open('contact/sendmessage', array(
									'class'=>'form-validate form-horizontal',
									'id'=>'register_form',
									 'method'=>'post'));
			?>
				<div class="col-sm-12">
					<div class="form-group">
					   
						<input type="text" placeholder="Name" required="required" name="name" class="form-control" required>
					</div>
				   </div>
				   <div class="col-sm-12">
					<div class="form-group">
					   
						<input type="email" placeholder="Email" required="required" name="email" class="form-control" required>
					</div>
				   </div>
				   <div class="col-sm-12">
					<div class="form-group">
					   
						<input type="text" placeholder="Phone" required="required" name="phone" class="form-control" required>
					</div>
				   </div>
				   <div class="col-sm-12 ">
			 <div class="form-group">
					   
						<textarea style="width:100%;padding:6px 12px;border:#d1d1d1 solid 1px;" name="message" rows="5" placeholder="Message"></textarea>
					</div>
		 </div>
		
		 
					  <div class="col-sm-12 ">                   
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary btn-lg">SEND MESSAGE</button>
					</div>
					</div>
					  </form> 
					</div><br />
			</div>
			</div>
		</div><!--/.row--><br>
	</div>
</div><!--/.container-->