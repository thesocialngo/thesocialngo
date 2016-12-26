<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="warper container-fluid">        
<div class="page-header"><h3>ADD/EDIT Item<small></small></h3></div>           
            <div class="row">
            <div class="col-md-12">
                 	<div class="panel panel-default">
                        <div class="panel-heading"></div>
                        <div class="panel-body">
<?php  
$title=NULL;
$name=NULL;
$location=NULL;
$phone=NULL;
$state=NULL;
$city=NULL;
$des=NULL;
$image=NULL;
$id=NULL;
foreach($app as $row){
 $id =  $row->id;
 $title = $row->item;
 $name = $row->name;
 $state = $row->state;
 $city = $row->city;
 $location = $row->location;
 $phone = $row->phone;
 $des = $row->description;
 $image = $row->image;
} 
?>
 <?php  echo validation_errors(); ?>
   <?php echo form_open_multipart('app_admin/apps/add_apps?url='.$id, 'class="form-horizontal"'); ?>
                                  <hr class="dotted">
                            	  <div class="form-group">
                                    <label class="col-sm-2 control-label">Item</label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control form-control-flat" value="<?php if($title){echo $title;} ?>" name="item">
                                    </div>
                                  </div>
                                  <hr class="dotted">
                            	  <div class="form-group">
                                    <label class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control form-control-flat" value="<?php if($name){echo $name;} ?>" name="name">
                                    </div>
                                  </div>                                
                                  <hr class="dotted">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Phone</label>
                                    <div class="col-sm-7">
                                     <input type="text" class="form-control form-control-flat" value="<?php if($phone){echo $phone;} ?>" name="phone">
                                  </div></div>
                                   <hr class="dotted">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">State</label>
                                    <div class="col-sm-7">
                                     <input type="text" class="form-control form-control-flat" value="<?php if($state){echo $state;} ?>" name="state">
                                  </div>
</div>
                                   <hr class="dotted">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">City</label>
                                    <div class="col-sm-7">
                                     <input type="text" class="form-control form-control-flat" value="<?php if($city){echo $city;} ?>" name="city">
                                  </div>
                                  </div>
<hr class="dotted">
                            	  <div class="form-group">
                                    <label class="col-sm-2 control-label">Pickup Location</label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control form-control-flat" value="<?php if($location){echo $location;} ?>" name="location">
                                    </div>
                                    </div>
								   <hr class="dotted">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Description</label>
                                    <div class="col-sm-7">
                                     <textarea class="form-control form-control-flat" name="description"><?php if($des){echo $des;} ?></textarea>
                                  </div>
                                  </div>
                                  <hr class="dotted">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Images</label>
                                    <div class="col-sm-7">
                                   <?php  if($image)
                                    {?>
                                    <img src="<?php echo base_url().'upload/'.$image;?>" width="100" />
                                   <?php } ?>
                                     <input type="file" class="form-control form-control-flat"  name="pro_img">
                                    </div>
                                  </div>
                                     <hr class="dotted">
                                  <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-9">
                                 <button name="submit" type="submit" class="btn btn-purple">Submit</button>
                                  <button type="reset" class="btn btn-info">Reset</button>
                                 </div>
                                 </div>
                           </form>
                        </div>
                    </div>
                 </div>
            </div>
          </div>                       