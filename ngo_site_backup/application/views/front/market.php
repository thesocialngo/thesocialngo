<div class="container-fluid">
	<div class="row" style="margin: 0px;">
		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nopadding" style=" background-image: url(images/social_market.png); height:149px;  background-size: cover; background-repeat: no-repeat;">
		</div>
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="background-color: #f5f5ec; padding-top:10px;">
<div class="container">
				<div class="col-md-10 col-lg-10 col-sm-8 col-xs-12">
					<p>The weakest members of communities are the most vulnerable; every day, 
					water-related diseases claim the lives of 4,100 children under the age of 5. 
					Millions are stricken with preventable diseases because of the lack of clean water.
					The weakest members of communities are the most vulnerable; every day, 
					water-related diseases claim the lives of 4,100 children under the age of 5. 
					Millions are stricken with preventable diseases because of the lack of clean water.</p>
					
				</div>
			<div class="col-md-2 col-lg-2 col-sm-4 col-xs-12">
				<p><b>Togther!!!</b><a href="#"> We can make differnce</a></p>
					<button class="btn btn-success" data-toggle="modal" data-target="#myModal_market">Upload & donate</button>
					
			</div>
			</div>
                        </div>
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="background-color: #fafafa;">
				<div class="col-md-3 col-lg-3 col-sm-3 col-xs-3" style="float:right; padding:15px 0 5px 0;">
					<p style="float:left;">Sort By item</p>
					<input type="hidden" id="url" value="business_distnict/display_market_item">


<?php
$arr_itm =array();
$arr_cty =array();
 foreach($app_data as $data){
 $arr_itm[] =  lcfirst($data['item']);
 $arr_cty[] =  lcfirst($data['city']);
}
asort($arr_cty);
asort($arr_itm);
?>



					<select class="form-control" style="float:left; margin-left:10px; width:165px;" id="item" name="" style="width:240px">
					<?php foreach($arr_itm as $data):?> 
						<option  value="<?php echo $data;?>"><?php echo ucwords($data)?></option> <?php endforeach;?>
					</select>
				</div>
			</div>
			
		</div>
		</div>
		<div class="container">
			
			
			
			
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="margin-top:10px; padding-right: 0px;">
			<div id="cty" class="col-md-2 col-lg-2 col-sm-4 col-xs-4" style="text-align:left; padding:8px 8px 8px 0; margin:0;" >
			<span style="font-weight:600;color:#FFF;background:#151515;padding:4px 50px 4px 4px;margin:0;">Refine the location</span>
			<?php foreach($arr_cty as $data):?>
			
			<div style="border-bottom:#000 solid 1px; width:100%; padding:0px; line-height: 25px; text-align:left; cursor:pointer" id="<?php echo $data;?>" class="city"> <?php echo ucwords($data);?></div><div class="clearfix"></div>
			
			<?php endforeach;?>
			</div>
			<div id="search_diplay" class = "col-sm-10 col-md-10 col-lg-10 col-xs-12" style="padding-right:0; ">
			 
		</div>
	</div>
	</div><br /><br />
 <!--/.container-->