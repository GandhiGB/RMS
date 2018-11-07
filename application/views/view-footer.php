			

			<!--Modal for quick searching-->

			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
					    <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h4 class="modal-title">Quick Student Search</h4>
					    </div>
					     <div class="quick-search modal-body">
					        <div class="form-group">
							    <div class="input-group">
							     	<span class="input-group-addon success">Search</span>
							     	<input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
							    </div>
							</div>

							<div>
							 	<div class="col-xs-12 ">
                                	<div class="row">
                                    	<div class="col-sm-12">
                                        	<div class="widget-box transparent">
                                            	<div class="widget-header widget-header-flat">
                                                	<h4 class="widget-title lighter">
                                                    	<i class="ace-icon fa fa-star orange"></i>
                                                    	Search Result
                                                	</h4>

	                                                <div class="widget-toolbar">
	                                                    <a href="#" data-action="collapse">
	                                                        <i class="ace-icon fa fa-chevron-up"></i>
	                                                    </a>
	                                                </div>
                                            	</div>

                                            	<div class="widget-body">
                                                	<div class="widget-main no-padding">
                                                    	<table class="table table-bordered table-striped">
                                                        	<thead class="thin-border-bottom">
                                                            	<tr>
	                                                                <th>
	                                                                    <i class="ace-icon fa fa-caret-right blue"></i> Lastname
	                                                                </th>

	                                                                <th>
	                                                                    <i class="ace-icon fa fa-caret-right blue"></i> Firstname
	                                                                </th>
	                                                                <th>
	                                                                    <i class="ace-icon fa fa-caret-right blue"></i> Middlename
	                                                                </th>

	                                                                <th>
	                                                                    <i class="ace-icon fa fa-caret-right blue"></i> Action
	                                                                </th>
                                                            	</tr>
                                                        	</thead>

	                                                        <tbody id="result">
	                                                            
	                                                        </tbody>
                                                    	</table>
                                                	</div><!-- /.widget-main -->
                                            	</div><!-- /.widget-body -->
                                        	</div><!-- /.widget-box -->
                                    	</div><!-- /.col -->
                                	</div><!-- /.row -->
                                <!-- PAGE CONTENT ENDS -->
                            	</div><!-- /.col -->
                       		</div>
						</div>
					</div>
				</div>	      
			</div>

			<!--Modal viewing requirements-->
			<div class="modal" id="myModal2"  tabindex="-1" role="dialog" aria-hidden="true" style="margin-top: 20px;">
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

	                        <tbody id="result2">
	                        
	                        </tbody>
	                	</table>
			        </div>
			      </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			</div>

			
			<!--Modal for adding course-->
			<div class="modal" id="myModal3"  tabindex="-1" role="dialog" aria-hidden="true" style="margin-top: 20px;">
			    <div class="modal-dialog" >
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			          <h4 class="modal-title" id="upload-avatar-title">Adding Course</h4>
			        </div>
			        <div class="modal-body">
			        	<form method="post" id="insert_form">
							<label>Course Short Name</label>
							<input type="text" name="lname" id="cname" class="form-control" />
							<br />
							<label>Course Full Name</label>
							<input type="text" name="fname" id="cfname" class="form-control" />
							<br /> 
							<input type="submit" name="add-course" id="add-course" value="Add" class="btn btn-primary" />

						</form>
			        </div>
			      </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			</div>



			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Copyright &copy; 2018 - SPC Learner Information System Ver. 1.0</span>
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

				$('#myModal').on('shown.bs.modal', function () {
				    $('#search_text').focus();
				})


				$('body, html').on('click','.view-req', function() {

					$.ajax({
			        type: "POST",
			        data:{id:$(this).attr('id')},
			        url: "<?php echo base_url(); ?>" + "crud/view_req",
			        success: function(data) {
			            $('#result2').html(data);
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


