<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
 <div class="warper container-fluid">
<div class="page-header"><h3>All Bookings<small></small></h3></div>
            <div class="row">
            <div class="col-md-12">
           	     <div class="panel panel-default">
                        <div class="panel-heading"></div>
                        <div class="panel-body">
                        <h3> Today's Booking</h3>
                        <table width="100%" id="basic-datatable" class="table table-striped table-bordered dataTable no-footer">
                          <thead>
                        <tr><th> Sr. No.</th> <th>Name </th> <th>Email </th> <th>Phone No. </th>
                         <th>Attendent </th> <th> Date</th> <th> Time  </th> <th> Massage Type  </th> <th> Message  </th>
                         <th style="min-width: 80px;"> Action  </th> 
                         </tr>
                        </thead>
 						<tbody>
                        <?php $sr=1;
                        foreach($result_current_date as $row_sch_today)
                         { ?>

                          <tr>
                         <td> <?php echo $sr; ?> </td>
                         <td> <?php echo $row_sch_today-> name; ?> </td>
                          <td> <?php echo $row_sch_today-> email; ?> </td>
                           <td> <?php echo $row_sch_today-> phone; ?> </td>
                         <td> <?php $value_current=  $row_sch_today-> ladies_id;

							 $this->db->select('*');

							 $this->db->from('assistant_model');

							 $this->db->where('id', $value_current);

							 $query_tt_current = $this->db->get();

							 $data_d_current = $query_tt_current->result();

						  foreach ($data_d_current as $la_row_t_current)

							 						{ 

							echo anchor('blue_admin/ladies/view_one_ladies?url='.$la_row_t_current->id , $la_row_t_current->name ."<br/>");

							 						  
							 						} ?>  </td> 
							 						
							 						
							 						<td> <?php echo $row_sch_today-> date; ?> </td>
                          <td> <?php echo $row_sch_today-> time; ?> </td>
                          <td> <?php echo $row_sch_today-> massage_type; ?> </td>
					      <td> <?php echo $row_sch_today-> message; ?> </td>
					       <td> <?php
					       echo anchor('', '<i class="fa fa-edit fa-2x"> </i>', '');   
					       echo anchor('', '<i class="fa fa-trash fa-2x"> </i>', '');
					       ?> </td>

                         

                         </tr>
                         <?php $sr++;
                          } ?>
                        
                         </tbody>

                        </table>
                        
                        
                         <h3> All Booking</h3>
                         <table width="100%" id="basic-datatable" class="table table-striped table-bordered dataTable no-footer">
                          <thead>
                        <tr><th> Sr. No.</th> <th>Name </th> <th>Email </th> <th>Phone No. </th>
                         <th>Attendent </th> <th> Date</th> <th> Time  </th> <th> Massage Type  </th> <th> Message  </th>
                         <th style="min-width: 80px;"> Action  </th> 
                         </tr>
                        </thead>
 						<tbody>
                        
                        <?php $sr=1;
                        foreach($all_booking as $row_sch)
                         { ?>

                          <tr>
                         <td> <?php echo $sr; ?> </td>
                         <td> <?php echo $row_sch-> name; ?> </td>
                          <td> <?php echo $row_sch-> email; ?> </td>
                           <td> <?php echo $row_sch-> phone; ?> </td>
                         <td> <?php $value=  $row_sch-> ladies_id;

							 $this->db->select('*');

							 $this->db->from('assistant_model');

							 $this->db->where('id', $value);

							 $query_tt = $this->db->get();

							 $data_d = $query_tt->result();

						  foreach ($data_d as $la_row_t)

							 						{ 

							echo anchor('blue_admin/ladies/view_one_ladies?url='.$la_row_t->id , $la_row_t->name ."<br/>");

							 						  
							 						} ?>  </td> 
							 						
							 						
							 						<td> <?php echo $row_sch-> date; ?> </td>
                          <td> <?php echo $row_sch-> time; ?> </td>
                          <td> <?php echo $row_sch-> massage_type; ?> </td>
					      <td> <?php echo $row_sch-> message; ?> </td>
					       <td> <?php
					       echo anchor('', '<i class="fa fa-edit fa-2x"> </i>', '');   
					       echo anchor('', '<i class="fa fa-trash fa-2x"> </i>', '');
					       ?> </td>

                         

                         </tr>
                         <?php $sr++;
                          } ?>
                        
                         </tbody>

                        </table>

                        <!--  Model for Add new schedule -->

  <div id="myModal" class="modal fade large  " role="dialog">

  <div class="modal-dialog modal-lg  ">

  <!-- Modal content-->

  <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">Add New Schedules</h4>

      </div>

      <div class="modal-body">

       <?php 

       $schedule_id=NULL;

       ?>

      

        <?php echo form_open_multipart('blue_admin/schedule/add_schedule?url='.$schedule_id, 'class="form-horizontal"'); ?>

        

        

        <div class="form-group">

         <label class="col-sm-2 control-label">Date From</label>

         <div class="col-sm-3">

         <div id="datetimerangepicker1" class="input-group date">

          <input name="start_date" type="text" data-date-format="YYYY/MM/DD" class="form-control">

         <span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span>

          </span>

     </div>

      </div>

       <label class="col-lg-2 control-label">Date To</label>

                                    <div class="col-sm-3">

                                      <div id="datetimerangepicker2" class="input-group date">

                                            <input  type="text" name="end_date" data-date-format="YYYY/MM/DD" class="form-control">

                                            <span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span>

                                            </span>

                                        </div>

                                    </div>

                                  </div>

                                  

                                  

                                  

                                  

                                  <div class="form-group">

         <label class="col-sm-2 control-label">Time From</label>

         <div class="col-sm-3">

         

         <select name="time_from" class="form-control" style="float: left;  margin-right: 6%; width: 46%;" > 

        <option>12:00</option><option>12:30</option><option>1:00</option><option>1:30

        </option><option>2:00</option><option>2:30</option><option>3:00</option><option>3:30 </option><option>4:00 </option><option>4:30 

        </option><option>5:00 </option><option>5:30 </option><option>6:00 </option><option>6:30 </option><option>7:00 </option><option>7:30 </option>

        <option>8:00 </option><option>8:30 </option><option>9:00 </option><option>9:30 </option><option>10:00 </option><option>10:30 </option><option>

        11:00 </option><option>11:30 </option>

        

        </select>

        

         <select name="time_from_am_pm" class="form-control" style="width:46%;"> 

        <option>AM</option><option>PM</option>

        </select>

      </div>

       <label class="col-lg-2 control-label">Time To</label>

                                    <div class="col-sm-3">

                                      <select name="time_to" class="form-control" style="float: left;  margin-right: 6%; width: 46%;" > 

        <option>12:00</option><option>12:30</option><option>1:00</option><option>1:30

        </option><option>2:00</option><option>2:30</option><option>3:00</option><option>3:30 </option><option>4:00 </option><option>4:30 

        </option><option>5:00 </option><option>5:30 </option><option>6:00 </option><option>6:30 </option><option>7:00 </option><option>7:30 </option>

        <option>8:00 </option><option>8:30 </option><option>9:00 </option><option>9:30 </option><option>10:00 </option><option>10:30 </option><option>

        11:00 </option><option>11:30 </option>

        

        </select>

        

         <select name="time_to_am_pm" class="form-control" style="width:46%;"> 

        <option>AM</option><option>PM</option>

        </select>

                                    </div>

                                  </div>

                                  

                                  

                                  

                                  

               <div class="row">  

               <div class="col-md-12">                  

                    <!-- Ladies For sunday -->  

                    <?php 

                    $this->load->model('Ladies_model','',TRUE);

                   $all_lad = $this->Ladies_model->all_ladies();

                    ?>

                      <div class="form-group has-feedback">

                                    

                                    <div class="col-lg-3 col-md-3">

                                    <label class="control-label">Sun</label>

                                        <select style="height: 250px;" multiple="multiple" name="sun[]" class="form-control" data-bv-field="sun[]">

                                            <option disabled="" value="">Multiple Select Box</option>

                                            <?php  foreach ($all_lad as $la_row)

							{ ?>  <option value="<?php echo $la_row->ladies_id; ?>"><?php echo $la_row->name; ?></option>  <?php } ?>

                                        </select><i style="display: none;" class="form-control-feedback" data-bv-icon-for="editors[]"></i>

                                    <small style="display: none;" class="help-block" data-bv-validator="choice" data-bv-for="editors[]" data-bv-result="NOT_VALIDATED">Please choose %s - %s editors you know</small></div>

                              

                                

                                <!-- Ladies for Sunday  -->

                                

                                

                       <!-- Ladies For sunday -->  

                      

                  

                                   

                                    <div class="col-lg-3 col-md-3">

                                     <label class=" control-label">Mon</label>

                                        <select style="height: 250px;" multiple="multiple" name="mon[]" class="form-control" data-bv-field="sun[]">

                                            <option disabled="" value="">Multiple Select Box</option>

                                             <?php  foreach ($all_lad as $la_row)

							{ ?>  <option value="<?php echo $la_row->ladies_id; ?>"><?php echo $la_row->name; ?></option>  <?php } ?>

                                        </select><i style="display: none;" class="form-control-feedback" data-bv-icon-for="editors[]"></i>

                                    <small style="display: none;" class="help-block" data-bv-validator="choice" data-bv-for="editors[]" data-bv-result="NOT_VALIDATED">Please choose %s - %s editors you know</small>

                                    </div>

                                    

                                    

                                    

                                    <div class="col-lg-3 col-md-3">

                                     <label class=" control-label">Tue</label>

                                        <select style="height: 250px;" multiple="multiple" name="tue[]" class="form-control" data-bv-field="sun[]">

                                            <option disabled="" value="">Multiple Select Box</option>

                                             <?php  foreach ($all_lad as $la_row)

							{ ?>  <option value="<?php echo $la_row->ladies_id; ?>"><?php echo $la_row->name; ?></option>  <?php } ?>

                                        </select><i style="display: none;" class="form-control-feedback" data-bv-icon-for="editors[]"></i>

                                    <small style="display: none;" class="help-block" data-bv-validator="choice" data-bv-for="editors[]" data-bv-result="NOT_VALIDATED">Please choose %s - %s editors you know</small>

                                    </div>

                                    

                                    

                                    <div class="col-lg-3 col-md-3">

                                      <label class=" control-label">Wed</label>

                                        <select style="height: 250px;" multiple="multiple" name="wed[]" class="form-control" data-bv-field="sun[]">

                                            <option disabled="" value="">Multiple Select Box</option>

                                            <?php  foreach ($all_lad as $la_row)

							{ ?>  <option value="<?php echo $la_row->ladies_id; ?>"><?php echo $la_row->name; ?></option>  <?php } ?>

                                        </select><i style="display: none;" class="form-control-feedback" data-bv-icon-for="editors[]"></i>

                                    <small style="display: none;" class="help-block" data-bv-validator="choice" data-bv-for="editors[]" data-bv-result="NOT_VALIDATED">Please choose %s - %s editors you know</small>

                                    </div>

                                    

                                    </div>

                                    <div class="form-group has-feedback">

                                    

                                    <div class="col-lg-3 col-md-3">

                                      <label class=" control-label">Thu</label>

                                        <select style="height: 250px;" multiple="multiple" name="thu[]" class="form-control" data-bv-field="sun[]">

                                            <option disabled="" value="">Multiple Select Box</option>

                                            <?php  foreach ($all_lad as $la_row)

							{ ?>  <option value="<?php echo $la_row->ladies_id; ?>"><?php echo $la_row->name; ?></option>  <?php } ?>

                                        </select><i style="display: none;" class="form-control-feedback" data-bv-icon-for="editors[]"></i>

                                    <small style="display: none;" class="help-block" data-bv-validator="choice" data-bv-for="editors[]" data-bv-result="NOT_VALIDATED">Please choose %s - %s editors you know</small>

                                    </div>

                                    

                                    

                                    

                                    

                                      

                                    <div class="col-lg-3 col-md-3">

                                    <label class=" control-label">Fri</label>

                                        <select style="height: 250px;" multiple="multiple" name="fri[]" class="form-control" data-bv-field="sun[]">

                                            <option disabled="" value="">Multiple Select Box</option>

                                            <?php  foreach ($all_lad as $la_row)

							{ ?>  <option value="<?php echo $la_row->ladies_id; ?>"><?php echo $la_row->name; ?></option>  <?php } ?>

                                        </select><i style="display: none;" class="form-control-feedback" data-bv-icon-for="editors[]"></i>

                                    <small style="display: none;" class="help-block" data-bv-validator="choice" data-bv-for="editors[]" data-bv-result="NOT_VALIDATED">Please choose %s - %s editors you know</small>

                                    </div>

                                    

                                    

                                    

                                      

                                    <div class="col-lg-3 col-md-3">

                                     <label class=" control-label">Sat</label>

                                        <select style="height: 250px;" multiple="multiple" name="sat[]" class="form-control" data-bv-field="sun[]">

                                            <option disabled="" value="">Multiple Select Box</option>

                                            <?php  foreach ($all_lad as $la_row)

							{ ?>  <option value="<?php echo $la_row->ladies_id; ?>"><?php echo $la_row->name; ?></option>  <?php } ?>

                                        </select><i style="display: none;" class="form-control-feedback" data-bv-icon-for="editors[]"></i>

                                    <small style="display: none;" class="help-block" data-bv-validator="choice" data-bv-for="editors[]" data-bv-result="NOT_VALIDATED">Please choose %s - %s editors you know</small>

                                    </div>

                                    

                                    

                                    

                                    

                                     <!-- Ladies for Sunday  -->

                                </div>

                                

                               

                           </div>     

                            <div class="col-sm-offset-5 col-sm-7" style="padding-bottom: 15px;">

                                 <button  name="submit" type="submit" class="btn btn-purple">Submit</button>

                                  <button type="reset" class="btn btn-info">Reset</button>

                                 </div>

       

        

        </form>

       </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

     

      </div>

    </div>

</div>

  </div>

</div>





<!-- --  Model Close -->

                        

                        

                        

                     

                        </div>

                    </div>

                </div>

            

            </div>

            </div>

            

            

                          