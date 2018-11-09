<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">		

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<h4></h4>

								<div class="form-group">
								    <div class="input-group">
								    	<span class="input-group-addon">Search</span>
								    	<input type="text" name="search_text" id="search_text" placeholder="Search by Student Details" class="form-control" />
								    </div>
								  </div>

								<div class="table-responsive">
      								<table class="table table-bordered">
        								<thead>
											<tr>
												<th>#</th>
												<th>Lastname</th>
												<th>Firstname</th>
												<th>Middlename</th>
												<th>Course</th>
												<th style="width:125px;">Action</th>


											</tr>
										</thead>
										<tbody id="result">
											
											<?php 

												foreach ($students as $key => $value) {
													echo '<tr>';
														echo '<td>'.($key+1).'</td>';
														echo '<td>'.ucwords($value->lname).'</td>';
														echo '<td>'.ucwords($value->fname).'</td>';
														echo '<td>'.ucwords($value->mname).'</td>';
														echo '<td>'.strtoupper($value->course).'</td>';
														echo '<td>
																	<button class="view-req btn btn-success" .modal-sm" data-toggle="modal" data-target="#modal-view-req" data-toggle="tooltip" title="View requirements submitted" id='.$value->id.'><i class="ace-icon fa fa-eye"></i></button>
																	<button class="view-req btn btn-primary" .modal-sm" data-toggle="modal" data-target="#modal-student-update" data-toggle="tooltip" title="Update student" id='.$value->id.'><i class="ace-icon fa fa-edit"></i></button>

																</td>';
													echo '<tr>';																						
													}
												?>
										
											</tbody>
										</table>
									</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
