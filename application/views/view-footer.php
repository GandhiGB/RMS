			<!--Modal student updating-->
			<div class="modal" id="modal-student-add"  tabindex="-1" role="dialog" aria-hidden="true" style="margin-top: 20px;">
			    <div class="modal-dialog" >
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			          <h4 class="modal-title" id="upload-avatar-title">Add student</h4>
			        </div>
			        <div class="modal-body">
			          
			        </div>
			      </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			</div>

			<!--Modal viewing requirements-->
			<div class="modal" id="modal-view-req"  tabindex="-1" role="dialog" aria-hidden="true" style="margin-top: 20px;">
			    <div class="modal-dialog" >
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			          <h4 class="modal-title" id="upload-avatar-title">Requirements submitted</h4>
			        </div>
			        <div class="modal-body">
			          <table class="table table-bordered table-striped">
	                    	<thead class="thin-border-bottom">
	                        	<tr>
	                                <th>
	                                    <i class="ace-icon fa fa-caret-right blue"></i> #
	                                </th>
	                                <th>
	                                    <i class="ace-icon fa fa-caret-right blue"></i> Requirement
	                                </th>
	                        	</tr>
	                    	</thead>

	                        <tbody id="result-view-req">
	                        
	                        </tbody>
	                	</table>
			        </div>
			      </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			</div>


			<!--Modal student updating-->
			<div class="modal" id="modal-student-update"  tabindex="-1" role="dialog" aria-hidden="true" style="margin-top: 20px;">
			    <div class="modal-dialog" >
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			          <h4 class="modal-title" id="upload-avatar-title">Update student</h4>
			        </div>
			        <div class="modal-body">
			          
			        </div>
			      </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			</div>

			
			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Copyright &copy; 2018 - SPC Requirements System Ver. 1.0</span>
						</span>

						
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?php echo site_url();?>assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
		<script src="assets/js/jquery-1.11.3.min.js"></script>
		<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo site_url();?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo site_url();?>assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="<?php echo site_url();?>assets/js/jquery-ui.custom.min.js"></script>
		<script src="<?php echo site_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo site_url();?>assets/js/jquery.easypiechart.min.js"></script>
		<script src="<?php echo site_url();?>assets/js/jquery.sparkline.index.min.js"></script>
		<script src="<?php echo site_url();?>assets/js/jquery.flot.min.js"></script>
		<script src="<?php echo site_url();?>assets/js/jquery.flot.pie.min.js"></script>
		<script src="<?php echo site_url();?>assets/js/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->
		<script src="<?php echo site_url();?>assets/js/ace-elements.min.js"></script>
		<script src="<?php echo site_url();?>assets/js/ace.min.js"></script>


		<script>

			$(document).ready(function(){

				function sleep(milliseconds) {
				  var start = new Date().getTime();
				  for (var i = 0; i < 1e7; i++) {
				    if ((new Date().getTime() - start) > milliseconds){
				      break;
				    }
				  }
				}

				function load_data(query = '') {
				
					$.ajax({
				        type: "POST",
				        data:{query:query},
				        url: "<?php echo base_url(); ?>" + "crud/search",
				        success: function(data) {
				            $("#result").html(data);
				        }
				    });
				}
				

				$('#search_text').keypress(function(event) {
	
					var keycode = (event.keyCode ? event.keyCode : event.which);
					if(keycode == '13'){
						var query = $(this).val();
  						load_data(query);
					}

				});


				$('body, html').on('click','.view-req', function() {

					$.ajax({
			        type: "POST",
			        data:{id:$(this).attr('id')},
			        url: "<?php echo base_url(); ?>" + "crud/view_req",
			        success: function(data) {
			            $('#result-view-req').html(data);
			        }

					    
					});

				    
				});

				$('#insert_form').on("submit", function(event){  
					event.preventDefault();  
					if($('#cname').val() == "") {  
						alert("Course name is required");  
					}  
					else if($('#cfname').val() == '') {  
						alert("Course full name is required");  
					}  


					else {  
						$.ajax({  
							url: "<?php echo base_url(); ?>" + "course/add_course", 
							method:"POST",  
							data:{cname: $("input#cname").val(), cfname: $("input#cfname").val()},
							beforeSend:function(){  

								$('#add-course').val("Inserting"); 

							}, 

							success:function(data){ 

								$('#insert_form')[0].reset();

								sleep(2000);

								$('#add-course').val("Add");  

							}  
						});  
					}  
				});

 
			});
	
		</script>
		
	</body>
</html>


