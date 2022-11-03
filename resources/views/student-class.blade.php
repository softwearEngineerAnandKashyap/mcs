<!DOCTYPE html>
<html lang="en">

<head>
	<x-vendors_css/>
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
					<h3 class="page-title">Class</h3>
				
				</div>
				
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">
			<div class="row">			  
				<div class="col-lg-6 col-12">
					  <div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Create Class</h4>
						</div>
						<!-- /.box-header -->
						<form class="form" action="{{ url('storeClass') }}" method="POST">
							<div class="box-body">
								@csrf
								<div class="row">
								  <div class="col-md-12">
									<div class="form-group">
									  <label>Name</label>
									  <input type="text" class="form-control @error('className') is-invalid @enderror" placeholder="Name" name="className">
									  	@error('className')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
									  	@enderror
									</div>
								  </div>
								   <div class="col-md-12">
									<div class="form-group">
									  <label>Numeric</label>
									  <input type="text" class="form-control" placeholder="Numeric" name="numeric">
									</div>
								  </div>
								   <div class="col-md-12">
									<div class="form-group">
									  <label>Section</label>
									  <input type="text" class="form-control" placeholder="Section" name="section">
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
				  <h4 class="box-title">Class List</h4>
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
						  <th>Name</th>
						  <th>Numeric</th>
						   <th>Section</th>
						  <th>Action</th>
						</tr>
						@foreach ($list as $key => $value)
							<tr>
							<td>{{  $value["class_name"]  }}</td>
							<td>{{  $value["numeric"]  }}</td>
							<td>{{  $value["section"]  }}</td>
							<td>
								<span class="glyphicon glyphicon-pencil m-sm-5" title="Edit"></span>
								<a href="{{ url('deleteClass').'/'.$value["add_class_id_pk"] }}"><span class="glyphicon glyphicon-trash" title="Delete"></span></a>
							</td>
							</tr>
						@endforeach
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
