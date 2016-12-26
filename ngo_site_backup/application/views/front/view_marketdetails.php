<div id="id_minheight" class="container" style="width:90% !important;">
	<div class="row">
		<div class="col-md-12 col-lg-12 nopadding">
			<?php foreach($app as $data):?>
			<h1 class="text-left donate_heading"><?php echo $data['item']?></h1><hr />
			<div class="col-md-12 col-lg-12 donate nopadding">
				<div class="col-md-6 col-lg-6 nopadding">
					<img src="<?php echo base_url().'upload/'.$data['image']?>" alt="image" style="border-radius:3px;margin:auto;width:100%;" class="img-responsive img-thumbnail" />
				</div>
				<div class="col-md-6 col-lg-6">
				<h1><?php echo $data['item']?></h1><hr />
				<p><?php echo $data['description']?></p>
				<p style="font-size:20px;font-weight:600;">
					<span><i class="fa fa-phone"></i> <?php echo $data['phone']?></span>&nbsp;
					<span><strong><i class="fa fa-user"></i> By:</strong> <?php echo ucwords($data['name'])?></span>
				</p>
				</div>
			</div>
			<?php endforeach;?>
		</div>
	</div><br /><br />
</div><!--/.container-->