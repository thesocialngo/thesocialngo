<?php 
if(empty($donate_items))
{ ?> <div class = "col-sm-9 col-md-9 col-xs-12"  ><h2 style="color:red; text-align:center;"> No Result Found On Searching Location</h2></div> <?php }  
foreach($donate_items as $data):
   ?>
			<div class = "col-sm-4 col-md-4 col-xs-12" style="padding-right:0;">
				<div class = "thumbnail">
					<img src="<?php echo base_url().'upload/'.$data['image']?>" alt="image" style="height: 151px; width:100%">
					<div class = "caption">
						<h2 class="nomargin"><?php echo ucwords($data['item'])?></h2><hr style="margin:4px;" />
						<p class="pro_des"><?php echo ucwords($data['description'])?></p>
						<p>
							<span style="padding-top:8px !important; vertical-align:middle;"><strong>By:</strong> <?php echo ucwords($data['name'])?></span><span>
							<a href="<?php echo base_url('donate/view_details?id='.base64_encode(base64_encode($data['id'])))?>" title="View Details" class = "btn btn-info btn-sm pull-right" role = "button">
								View Details
							</a>
							</span>
						</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div> 
			
		<?php 	  endforeach;  ?>
			