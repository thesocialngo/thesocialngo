      
        
        
        
    
    </section>
    <!-- Content Block Ends Here (right box)-->
    <!-- JQuery v1.9.1 -->
	<script src="<?php echo base_url(); ?>admin_css/assets/js/jquery/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin_css/assets/js/plugins/underscore/underscore-min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>admin_css/assets/js/bootstrap/bootstrap.min.js"></script>
    
    <!-- Globalize -->
    <script src="<?php echo base_url(); ?>admin_css/assets/js/globalize/globalize.min.js"></script>
    
    <!-- NanoScroll -->
    <script src="<?php echo base_url(); ?>admin_css/assets/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
    
    <!-- moment -->
    <script src="<?php echo base_url(); ?>admin_css/assets/js/moment/moment.js"></script>
    
    <!-- DateTime Picker -->
    <script src="<?php echo base_url(); ?>admin_css/assets/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>
    
	<!-- Bootstrap Validator -->
    <script src="<?php echo base_url(); ?>admin_css/assets/js/plugins/bootstrap-validator/bootstrapValidator.min.js"></script>
    <script src="<?php echo base_url(); ?>admin_css/assets/js/plugins/bootstrap-validator/bootstrapValidator-conf.js"></script>
    
    <!-- Custom JQuery -->
	<script src="<?php echo base_url(); ?>admin_css/assets/js/app/custom.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin_css/assets/js/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.min.js"></script>
    <script src="<?php echo base_url(); ?>admin_css/assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.js"></script>
	<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
    ga('create', 'UA-56821827-1', 'auto');
    ga('send', 'pageview');
    
    </script>
   
</body>
</html>


<script type="text/javascript">
     $(document).on("click", ".single_model_anxhor", function () {
     $('#ladies_id_model_box').val($(this).data('id'));
     $('#myModal').modal('show');
});
    
</script>
        
<script type="text/javascript">
    var url="<?php echo admin_url();?>";
    function delete_app(id){
       var r=confirm("Do you want to delete this Application?")
        if (r==true)
        { 
          window.location= url+"/apps/delete_apps/?url="+id;
        }
        else
            {
          return false;
        } }
</script>
<script type="text/javascript">
    var url="<?php echo admin_url();?>";
    function delete_buss(id){
       var r=confirm("Do you want to delete this Application?")
        if (r==true)
        { 
          window.location= url+"/business/delete_business/?url="+id;
        }
        else
            {
          return false;
        } }
</script>

<script type="text/javascript">
$('#url').keyup(function(){

    if( this.value.indexOf('http://') !== 0 ){ # Add lots more code here so that this actually works in practice. E.g. if the user deletes only some of the “http://”, if the user types something before the “http://”, etc...
        this.value = 'http://' + this.value;
    }
});
</script>
