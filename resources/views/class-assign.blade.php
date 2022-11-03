<!DOCTYPE html>
<html lang="en">

<head>
	<x-vendors_css />
	<x-meta />
</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">
	{{-- <div id="loader"></div> --}}
	<x-header />
	<x-sidebar />
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Subjects</h3>
				
				</div>
				
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">
			<div class="row">			  
				<div class="col-lg-6 col-12">
					  <div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Add Subjects</h4>
						</div>
						<!-- /.box-header -->
						<form class="form" action="{{ url('storeClassAssign') }}" method="POST">
							<div class="box-body">
								@csrf
								<div class="row">
								  <div class="col-md-12">
									<div class="form-group">
									  <label>Class</label>
									  <select class="form-control @error('assignClass') is-invalid
									  @enderror" name="assignClass">
										<option value="">--Please Select--</option>
										<option value="2022-2023">2022-2023</option>
									  </select>
									  @error('assignClass')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									  @enderror
									</div>
								  </div>
								   <div class="col-md-12">
									<div class="form-group">
									  <label>Section</label>
								 <select class="form-control @error('assignSection') is-invalid
									
								 @enderror" name="assignSection">
										<option value="">--Please Select--</option>
										<option value="2022-2023">2022-2023</option>
									  </select>
									  @error('assignSection')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									  @enderror
									</div>
								  </div>
								   <div class="col-md-12">
									<div class="form-group">
									  <label>Subject</label>
									  <input type="text" class="form-control @error('assignSubject') is-invalid
										
									  @enderror" placeholder="Select Multiple Subjects" name="assignSubject">
									  @error('assignSubject')
									  <span class="invalid-feedback" role="alert">
										  <strong>{{ $message }}</strong>
									  </span>
									@enderror
									</div>
								  </div> 
								</div>
							
								
							</div>
							<!-- /.box-body -->
							<div class="box-footer">
								<button type="button" class="btn btn-rounded btn-warning btn-outline mr-1">
								  <i class="ti-trash"></i> Cancel
								</button>
								<button type="submit" class="btn btn-rounded btn-primary btn-outline">
								  <i class="ti-save-alt"></i> Save
								</button>
								@if (session()->has('message'))
									<div class="alert alert-info">
										{{ session('message') }}
									</div>
								@endif
							</div>  
						</form>
					  </div>
					  <!-- /.box -->			
				</div>  

				<div class="col-lg-6 col-12">
					  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Class Assign List</h4>
				  <div class="box-controls pull-right">
					<div class="lookup lookup-circle lookup-right">
					  <input type="text" name="s">
					</div>
				  </div>
				</div>
				<!-- /.box-header -->
				<div class="box-body no-padding">
					<div class="table-responsive">
					  <table class="table table-hover">
						<tr>
						  <th>Class</th>
						  <th>Section</th>
						   <th>Subject</th>
						  <th>Action</th>
						</tr>
						<tr>
						  <td><a href="javascript:void(0)">Order #123456</a></td>
						   <td><a href="javascript:void(0)">Order #123456</a></td>
						   <td><a href="javascript:void(0)">Order #123456</a></td>
						<td><span class="glyphicon glyphicon-pencil m-sm-5" title="Edit"></span> <span class="glyphicon glyphicon-trash" title="Delete"></span></td>
						</tr>
					
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
					  <!-- /.box -->			
				</div>

			

			

			
				
		    </div>
		
		  <!-- /.row -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
<x-footer />
</div>
<x-chatbox />
<!-- Page Content overlay -->
<!-- Page Content overlay -->
<!-- Vendor JS -->
<script src="{{ url('../js/vendors.min.js') }}"></script>
<script src="{{ url('../js/pages/chat-popup.js') }}"></script>
<script src="{{ url('../assets/icons/feather-icons/feather.min.js') }}"></script>
<script src="{{ url('../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>
<script src="{{ url('../assets/vendor_components/moment/min/moment.min.js') }}"></script>
<script src="{{ url('../assets/vendor_components/fullcalendar/fullcalendar.js') }}"></script>
<!-- EduAdmin App -->
<script src="{{ url('../js/template.js')}}"></script>
<script src="{{ url('../js/pages/dashboard.js')}}"></script>
<script src="{{ url('../js/pages/calendar.js')}}"></script>
</body>
</html>