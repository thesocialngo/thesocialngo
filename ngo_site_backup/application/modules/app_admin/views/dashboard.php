<?php
include 'header.php';
?>
         
		 <div class="warper container-fluid">
        	
            <div class="page-header"><h1>Dashboard <small>Let's get a quick overview...</small></h1></div> 
            <div class="row">
            
            	<div class="col-md-3 col-sm-6">
                	<div class="panel panel-default clearfix dashboard-stats rounded">
                    
                    	<span id="dashboard-stats-sparkline1" class="sparkline transit">
                    <?php
					//	$select_rows = $this->db->query('SELECT * FROM faculty');
					//	$row = $select_rows->num_rows();
					//	echo "<h1>".$row."</h1>";
					//	?>
                        
                        </span>
                    	<i class="fa fa-shopping-cart bg-danger transit stats-icon"></i>
                        <h3 class="transit">Number of </h3>
                        <p class="text-muted transit"></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                	<div class="panel panel-default clearfix dashboard-stats rounded">
                    	<span id="dashboard-stats-sparkline2" class="sparkline transit">
                          <?php
						//$select_rows = $this->db->query('SELECT * FROM student');
						//$row = $select_rows->num_rows();
						//echo "<h1>".$row."</h1>";
						?>
                        </span>
                    	<i class="fa fa-tags bg-info transit stats-icon"></i>
                        <h3 class="transit">Number of </h3>
                        <p class="text-muted transit"></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                	<div class="panel panel-default clearfix dashboard-stats rounded">
                    	<span id="dashboard-stats-sparkline3" class="sparkline transit">
                            <?php
						//$select_rows = $this->db->query('SELECT * FROM class');
						//$row = $select_rows->num_rows();
						//echo "<h1>".$row."</h1>";
						?>
                        </span>
                    	<i class="fa fa-user bg-success transit stats-icon"></i>
                        <h3 class="transit">Number of </h3>
                        <p class="text-muted transit"></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                	<div class="panel panel-default clearfix dashboard-stats rounded">
                    	<span id="dashboard-stats-sparkline4" class="sparkline transit">
                           <?php
						//$select_rows = $this->db->query('SELECT * FROM user');
						//$row = $select_rows->num_rows();
						//echo "<h1>".$row."</h1>";
						?>
                        </span>
                    	<i class="fa fa-warning bg-warning transit stats-icon"></i>
                        <h3 class="transit">Number of </h3>
                        <p class="text-muted transit"></p>
                    </div>
                </div>
            
            </div>
            
           
             <div class="row">
            <h1>Welcome to the Admin System</h1>
             </div>
        </div> 
        <!-- Warper Ends Here (working area) -->
<?php
include 'footer.php';	 
?>