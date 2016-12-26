<!-- Modal -->
						<div class="modal fade" id="myModal_market" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						      </div>

<?php  echo validation_errors(); ?>
   <?php echo form_open_multipart('business/add_business', 'class="form-validate form-horizontal",id="register_form"'); ?>
   					      	<div class="form-group" style="padding: 0px 20px;">
								    <input type="file" name="pro_img" value="upload picture" >
								 </div>
								  <div class="form-group" style="padding: 0px 20px;">
								    <textarea class="form-control" rows="3"  name="description" placeholder="Description:"></textarea>
								  </div>
								   <div class="form-group" style="padding: 0px 20px;">
								    <textarea class="form-control" rows="2" value="" name="item" placeholder="Item:"></textarea>
								  </div>
								  <div class="form-group" style="padding: 0px 20px;">
								    <input type="text" class="form-control" value="" name="state"  placeholder="Specify state">
								  </div>
								   <div class="form-group" style="padding: 0px 20px;">
								    <input type="text" class="form-control" value="" name="city"  placeholder="Specify city">
								  </div>
								   <div class="form-group" style="padding: 0px 20px;">
								    <input type="text" class="form-control" value="" name="landmark"  placeholder="Specify any landmark">
								  </div> 	
								   <div class="form-group" style="padding: 0px 20px;">
								    <input type="text" class="form-control" value="" name="name"  placeholder="Contact Name">
								  </div>
								   <div class="form-group" style="padding: 0px 20px;">
								    <input type="text" class="form-control" value="" name="phone"  placeholder="Contact No">
								  </div>
								 
								  <div class="modal-footer">
							        <button type="submit" class="btn btn-info">Send</button>
							      </div> 
						      </form>
						    </div>
						  </div>
						</div>
<!-- model market end -->
<!-- Modal -->
						<div class="modal fade" id="myModal_market_two" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						      </div>
						
							<div class="mainbox"><br>
	<h1 class="text-yellow">Donate to the <b>TheSocialNGO</b></h1><br>
	<p>
		Note: 80-G is in process, we won't be able to provide the tax exemption receipt.<div class="clearfix"></div><br>
		<b class="mainbox_p_b">Various payment option are as given below:</b><div class="clearfix"></div><br>
		<b class="mainbox_p_b">By Cheque/DD/Money Order</b><div class="clearfix"></div><br>
		Send your contribution by Cheque/DD/MO in favour of Prayas SocialNGO Foundation and send it to the Below address.<div class="clearfix"></div><br>
		Please include your email, address and phone number so we can properly thank you for your support.
	</p><br>
	<div class="addressbox_bg">
		<p>
			Prayas SocialNGO Foundation <br>
			104A/168 RAM BAGH, <br>
			KANPUR, UTTAR PRADESH
		</p>
	</div><br>
	<p>
		<b>Wire Transfer</b><div class="clearfix"></div>
		Donors from other countries can donate directly to our bank Account via Wire Transfer, <a href="#">Click Here</a> to contact us
	</p><br>
	<b class="mainbox_h1" style="color:#c8b168;">Thank you for your support.</b><br><br>
</div>
						    </div>
						  </div>
						</div>
<!-- model market end -->
<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						      </div>
 
<?php  echo validation_errors(); ?>
   <?php echo form_open_multipart('donation/add_donation', 'class="form-validate form-horizontal",id="register_form"'); ?>
   			         	<div class="form-group" style="padding: 0px 20px;">
								    <input type="file" name="pro_img" value="upload picture" >
								 </div>
								  <div class="form-group" style="padding: 0px 20px;">
								    <textarea class="form-control" rows="3"   name="description" placeholder="Description:"></textarea>
								  </div>
								   <div class="form-group" style="padding: 0px 20px;">
								    <textarea class="form-control" rows="2" name="item" placeholder="Item:"></textarea>
								  </div>
								  <div class="form-group" style="padding: 0px 20px;">
								    <input type="text" class="form-control" name="name"  placeholder="Name">
								  </div>
								   <div class="form-group" style="padding: 0px 20px;">
								    <input type="text" class="form-control" name="phone"  placeholder="Contact No">
								  </div>
								   <div class="form-group" style="padding: 0px 20px;">
								    <input type="text" class="form-control" value="" name="state"  placeholder="Specify state">
								  </div>
								   <div class="form-group" style="padding: 0px 20px;">
								    <input type="text" class="form-control" value="" name="city"  placeholder="Specify city">
								  </div>
								  <div class="form-group" style="padding: 0px 20px;">
								    <input type="text" class="form-control" name="location"  placeholder="Pickup Location">
								  </div>
								  <div class="modal-footer" style="text-align:center;">
							        <button type="submit" class="btn btn-info">Send</button>
							   
							      </div> 
							  </form>
						    </div>
						  </div>
						</div>
<footer id="footer" class="midnight-blue" style="bottom:0; width:100%;">
        <div class="container-fluid">
            <div class="row" style="margin-right:0;">
                <div class="col-sm-12 text-center">
                    &copy; <?php echo date('Y')?> <a target="_blank" href="" title="">domain.com</a> All Rights Reserved.
                </div>
            </div>
        </div>
        <input type="hidden" value="" id="item_to_be_search">
        <input type="hidden" value="" id="city_to_be_search">
          <input type="hidden" value="" id="url_to_be_search">
       
    </footer><!--/#footer-->
	
<script src="<?php echo base_url()?>js/jquery.js"></script>
<script src="<?php echo base_url()?>js/jquery.isotope.min.js"></script>
<script src="<?php echo base_url()?>js/main.js"></script>
<script src="<?php echo base_url()?>js/wow.min.js"></script>    
<script src="<?php echo base_url()?>js/jquery.prettyPhoto.js"></script>
<script src="<?php echo base_url()?>js/bootstrap.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {    var showChar = 300;    var ellipsestext = "...";    var moretext = "Read more";    var lesstext = "Read less";    $('.more').each(function() {        var content = $(this).html();         if(content.length > showChar) {             var c = content.substr(0, showChar);            var h = content.substr(showChar-1, content.length - showChar);             var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';             $(this).html(html);        }     });     $(".morelink").click(function(){        if($(this).hasClass("less")) {            $(this).removeClass("less");            $(this).html(moretext);        } else {            $(this).addClass("less");            $(this).html(lesstext);        }        $(this).parent().prev().toggle();        $(this).prev().toggle();        return false;    });});
</script>
    
<script type="text/javascript">
$('#reg_con_password').keyup(function(){
var pass=$('#reg_password').val();
var con_pass=$('#reg_con_password').val();
if(pass === con_pass)
{
	$('#pass_result').html('<i class="fa fa-check"></i>');
	}
else
{
	$('#pass_result').html('<i class="fa fa-times"></i>');
	}
});



function click_user_id(loged_user_id , id ){ 
       $.ajax({
         type: "POST",
	     url: "<?php echo base_url(); ?>index.php/Profile/download_by",
		 data: {loged_user: loged_user_id, id:id},
	     success: function (html) {
	     }
	});
}
</script>
<!--Map Jquery -->
<script src="<?php echo base_url()?>js/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="<?php echo base_url()?>js/jquery.gmap.min.js"></script>
<script src="<?php echo base_url()?>js/pace.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>js/jquery.nav.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>js/jquery.meanmenu.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>js/jquery.sticky.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>js/jquery.ui.totop.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>js/custom.js" type="text/javascript"></script>
<script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
	  $('#myInput').focus()
	})
</script>
 
<script type="text/javascript">
$('#myModal_market').on('shown.bs.modal', function () {
	  $('#myInput').focus()
	})
</script>
<script type="text/javascript">
 
	$(document).ready(function() { 
    $("#url_to_be_search").val($("#url").val());
    test();
}); 
    $("#item").change(function(){
    	$("#item_to_be_search").val($("#item").val());
    	test();
      });

    $(".city").click(function(){
   	 $("#cty").children().removeClass('actv');
        $("#city_to_be_search").val($(this).attr('id'));
        $(this).addClass('actv');
        test();

      });
  
  function test()
  {
	 var final_item =  $("#item_to_be_search").val();
	 var final_city =  $("#city_to_be_search").val();
         var final_url =  $("#url_to_be_search").val();
    $.ajax({
	      url:  "<?php echo base_url();?>"+final_url,
	      data: {city:final_city , item:final_item},
	      type: 'post',
	      success: function(data) {
	       $("#search_diplay").html(data)
	      }
	    });
	 
  }

</script>
<!--Map Jquery -->
</body>
</html>
 
  
  