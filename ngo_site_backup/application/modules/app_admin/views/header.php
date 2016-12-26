<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>App Admin</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_css/assets/css/bootstrap/bootstrap.css" /> 
    <!-- DateTime Picker  -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>admin_css/assets/css/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.css" />
    <!-- Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>
    <!-- Bootstrap Validator  -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>admin_css/assets/css/plugins/bootstrap-validator/bootstrap-validator.css" />
    <!-- Base Styling  -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>admin_css/assets/css/app/app.v1.css" />
    <script src="<?php echo base_url(); ?>admin_css/js/jquery.js"></script> 
    <script type="text/javascript" src="<?php echo base_url(); ?>admin_css/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_css/js/jquery.form.js"></script>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body> 
    <!-- Preloader -->		
	<aside class="left-panel">
    <div class="user text-center">
          <?php
		   //$image = $this->db->query('SELECT * FROM student WHERE user_id ='.$loged_user_id);
		  // foreach($image->result() as $row): ?>
                  <?php 
                  // endforeach; ?>
             	  <h4 class="user-name"><?php // echo ucwords($username); ?></h4>
                  <div class="user-login">
                  <a class="btn btn-info" role="button" href="<?php echo base_url(); ?>index.php/Authusercont/logout?url=<?php echo base64_encode('admin_panel'); ?>"><i class="fa fa-circle status-icon signout"></i> Sign out</a>
                  </div></div>            
                  <nav class="navigation">            	
                  	<ul class="list-unstyled">                	
             	    	<li class="has-submenu"><a href="#"><i class="fa fa-comment-o"></i> <span class="nav-label">Humanity Bazaar</span></a>
		                	<ul class="list-unstyled"> 
		                	    <li><?php echo anchor(admin_url().'/apps/new_apps', 'Add Item'); ?></li>
		                	    <li><?php echo anchor(admin_url().'/apps/view_apps', 'All Item'); ?></li> 
		                	</ul>
                		</li>                     
                  		<li class="has-submenu"><a href="#"><i class="fa fa-comment-o"></i> <span class="nav-label">Social Marketing</span></a>
		                	<ul class="list-unstyled"> 
		                	    <li><?php echo anchor(admin_url().'/business/new_business', 'Add business'); ?></li>
		                	    <li><?php echo anchor(admin_url().'/business/view_business', 'All business'); ?></li> 
		                	</ul>
                		</li>
                 	</ul>
            	</nav>
    </aside>
    <section class="content">
    <header class="top-head container-fluid">
        <button type="button" class="navbar-toggle pull-left">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <form role="search" class="navbar-left app-search pull-left hidden-xs" style="display:none">
         	 <input type="text" placeholder="Enter keywords..." class="form-control form-control-circle">
        </form> 
        </header>
        <!-- Header Ends -->