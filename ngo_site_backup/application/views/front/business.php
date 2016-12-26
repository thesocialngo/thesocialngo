<section id="contact-page" style="min-height: 540px;">
        <div class="container">
			<br>
            <div class="center" style="padding-bottom:0;">
				<h2><?php 
					if(isset($_REQUEST['url'])){
						if($_REQUEST['url'] != ''){
							echo "Edit";
						} else {
							echo "Add";
						}
					} else {
						echo "Add";
					}
					?> Business</h2>
            </div> <br />
            <div class="row contact-wrap "> 
            <div class="col-md-6 col-md-offset-3">
                <div class="status alert alert-success" style="display: none"></div>
              
<?php  
$title=NULL;
$phone=NULL;
$des=NULL;
$image=NULL;
$id=NULL;
foreach($app as $row){
 $id =  $row['id'];
 $title = $row['item'];
 $phone = $row['phone'];
 $des = $row['description'];
 $image = $row['image'];
} 
?>
 <?php  echo validation_errors(); ?>
   <?php echo form_open_multipart('business/add_business?url='.$id, 'class="form-validate form-horizontal",id="register_form"'); ?>
   					 <div class="col-sm-12">
                        <div class="form-group">
							<label>Business Name</label>
                            <input type="text" value="<?php if($title){echo $title;} ?>" name="heading" class="form-control" placeholder="Business Name">
                        </div>
                    </div>
                    <div class="col-sm-12 ">
                 		<div class="form-group">
                        	<label>Phone</label>
							<input type="text"  value="<?php if($phone){echo $phone;} ?>" name="phone" class="form-control"  placeholder="Phone">
                        </div>
             		</div>
					<div class="col-sm-12 ">
                 		<div class="form-group">
							<label>Business Photo</label><br />
							<?php if($image):?>
                        	<img src="<?php echo base_url().'upload/'.$image;?>" width="100" />
                        	<?php endif;?>
                        	<input type="file" name="pro_img" class="form-control">
                        </div>
             		</div>
					<div class="col-sm-12 ">
                 		<div class="form-group">
							<label>Description</label>
                        	<textarea class="form-control" name="description"><?php if($des){echo $des;} ?></textarea>
                        </div>
             		</div>	
					<div class="col-sm-12 ">                   
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg">SUBMIT</button>
							<button type="reset" name="cancel" onClick="window.history.back();" class="btn btn-primary btn-lg">CANCEL</button>
                        </div>
                    </div>
                 </form> 
               </div>     
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->