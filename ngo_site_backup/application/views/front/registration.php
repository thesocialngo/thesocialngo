<br />
 <section id="contact-page">
<h1 class="text-left donate_heading" style="margin-left: 25px;">Ragistration</h1><hr />
        <div class="container">
            <div class="center">        
                <h2>Registration Form</h2>
            </div> 
            <div class="row contact-wrap" >
            <div class="col-md-3 col-lg-3 " > </div>
            <div class="col-md-6 col-lg-6 " >
             
                <div class="status alert alert-success" style="display: none"></div>
               <?php echo form_open('register/insert_form', array(
                                		'class'=>'form-validate form-horizontal',
                                		'enctype'=>'multipart/form-data' ,
                                		'id'=>'register_form',
                                		 'method'=>'post'));  ?>
                            		  <div id="message" > <?php if(!empty($error)){ ?>
                            		  <div class='alert alert-warning' style='width: auto; text-align: center;'>
                            		  <a href='#' class='close' data-dismiss='alert'>&times;</a><?php 
                            		  	foreach($error as $err)
                            		  	{
                            		  		echo $err;
                            		  	}?>
                            		  </div> <?php } ?>
                            		  </div> 
                    <div class="col-sm-6 ">
                        <div class="form-group">
                           
                            <input type="text" placeholder="First Name" name="first_name" class="form-control" required>
                        </div>
                       </div>
                       <div class="col-sm-6">
                 <div class="form-group">
                           
                            <input type="text" placeholder="Last Name" name="last_name" class="form-control" required>
                        </div>
             </div>
             
             <div class="col-sm-11">
                          <div class="form-group">
                            <div class="col-sm-4"><input type="radio" name="gender" value="male" required checked="checked"> Male</div>
                            <div class="col-sm-5"><input type="radio" name="gender" value="female"> Female</div>
                        </div>
                        </div>
                        <p>&nbsp;</p>
                         <div class="col-sm-12 ">
                        <div class="form-group">
                           
                            <input type="email" placeholder="Email Address" name="email" required class="form-control" required>
                        </div>
                       </div>
                       
                         <div class="col-sm-12 ">
                        <div class="form-group">
                           
                            <input type="password" placeholder="Password" id="reg_password" name="password" required class="form-control" required>
                        </div>
                       </div>
                         <div class="col-sm-12 ">
                        <div class="form-group input-group">
                           <input type="password" placeholder="Confirm Password" id="reg_con_password" name="con_password" required class="form-control" required>
                        	<span id="pass_result" class="input-group-addon"></span></div>
                        	
                       </div>
                           <div class="col-sm-12">
                        <div class="form-group">
                           
                            <input type="date" placeholder="Date of Birth" name="dob" required class="form-control" required>
                        </div>
                       </div>  
                            
                           <div class="col-sm-12">
                        <div class="form-group">
                           
                            <input  type="text" placeholder="Mobile Number" minlength="10" required name="contact" class="form-control" required>
                        </div>
                       </div>
                        <div class="col-sm-12">
                        <div class="form-group">
                           
                            <select name="country" class="form-control" required>
                            <option value="">---Please Select Your Country---</option>
                            <option>India</option>
                            </select>
                        </div>
                       </div>  
                            
                            
                             <div class="col-sm-12">                   
                        <div class="form-group">
                            <button type="submit" name="submit" id="submit_reg" class="btn btn-primary btn-lg" required="required">Sign In</button>
                        </div>
                        </div>
                            
                             
                         </div>                       
                    </div>
             
                         
                    
                </form> 
                <script type="text/javascript">
                $('#submit_reg').click(function(){
				$('#register_form').validate();
                    });
                </script>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->