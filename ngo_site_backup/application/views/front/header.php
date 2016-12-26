<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>THE SOCIAL NGO</title>
	<!-- core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/main.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/responsive.css" rel="stylesheet">      
    <link rel="shortcut icon" href="images/ico/"> 
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-57-precomposed.png">
   <style type="text/css">
.morecontent span {
    display: none;
}
.mainbox { width:96%; font-family:"open sans" !important; margin:auto; text-align:left;}
	.mainbox h1 { font-size:20px; color:#c8b168; margin:0; font-weight:400;}
	.mainbox_h1 { font-size:20px; margin:0; font-weight:400;}
	.mainbox h1 b { text-decoration:underline;}
	.mainbox p { margin:0; padding:0; font-size:14px;}
	.mainbox_p_b { font-size:14px;}
	.addressbox_bg { background:#147693;}
	.addressbox_bg p { padding:6px 10px; line-height:26px; color:#FFFFFF !important; text-transform:capitalize; font-weight:bold;}
	.addressbox_bg p b { color:#FFFFFF !important;}
</style>
	<script type="text/javascript">
		function ondelete(url){
			if(confirm("Delete cannot be undone! Are you sure you want to do this?") == true){
				window.location=url;
			}
		}
	</script>
	<style>

.actv{
	background-color:black;
	color: #fff;
	font-size: 18px!important;
	padding: 4px;
}

	#map { height: 458px; padding-bottom:0px; width:100%; float:left;}
	#map.type2 { height:360px; }
	#map img { max-width:inherit; }
	.gmap_marker { color: #34495e; }
</style>
    </head><!--/head-->

<body class="homepage">

    <header id="header">
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<a href="<?php echo base_url()?>"><img style="padding-bottom:7px !important; padding-top:6px !important;" src="<?php echo base_url('images/logo.png')?>" alt="image" /></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right" style="margin-top:12px;">
                    <ul class="nav navbar-nav">
                        <li><?php echo anchor('welcome', 'Home'); ?></li>
						<li><?php echo anchor('donate', 'Humanity Bazaar'); ?></li>
						<li><?php echo anchor('market', 'Social Marketing'); ?></li>
						<li><?php echo anchor('about', 'The Platform'); ?></li>
						<li><?php echo anchor('http://www.psf.com', 'Prayas Scoialngo Foundation', 'target="_blank"'); ?></li>
						<li><?php echo anchor('contact', 'Contact'); ?></li> 
					<li style="padding-bottom:5px;font-weight:bold;font-size:15px;" class="active"><button class="btn btn-primary" data-toggle="modal" data-target="#myModal_market_two" style="margin-top: 0px;">Donate Now</button></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->