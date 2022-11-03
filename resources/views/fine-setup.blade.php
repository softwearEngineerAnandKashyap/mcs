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
					<h3 class="page-title">Fine Setup</h3>
				
				</div>
				
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">
			<div class="row">			  
				<div class="col-lg-6 col-12">
					  <div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Fine Setup</h4>
						</div>
						<!-- /.box-header -->
						<form class="form" action="{{ url('fineSetupStore') }}" method="POST">
							<div class="box-body">
								@csrf
								<div class="row">
								  <div class="col-md-12">
									<div class="form-group">
									  <label> Fee type</label>
									   <select class="form-control @error('fineYear') is-invalid @enderror" name="fineYear">
										<option>2022-2023</option>
										<option>2023-2024</option>
									  </select>
										@error('fineYear')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								  </div>
								  
								   <div class="col-md-12">
									<div class="form-group">
									  <label>Fine type</label>
									  <select class="form-control @error('fineType') is-invalid @enderror" name="fineType">
										<option>Fixed</option>
										<option>Percentage</option>
									  </select>
									  @error('fineType')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								  </div>
								  
								    <div class="col-md-12">
									<div class="form-group">
									  <label>Fine Value</label>
									  <input type="text" class="form-control @error('fineValue') is-invalid @enderror" placeholder="First Name" name="fineValue" value="{{ old('fineValue') }}">
									  @error('fineValue')
									  <span class="invalid-feedback" role="alert">
										  <strong>{{ $message }}</strong>
									  </span>
									  @enderror
									</div>
								  </div>
								  
								   <div class="col-md-12">
									<div class="form-group">
									  <label> Late Fee Frequency</label>
									  <input type="text" class="form-control @error('lateFeeFreq') is-invalid @enderror" placeholder="First Name" name="lateFeeFreq" value="{{ old('lateFeeFreq') }}">
									  @error('lateFeeFreq')
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
							</div>  
							@if (session()->has('message'))
							<div class="alert alert-info">
								{{ session('message') }}
							</div>
						@endif
						</form>
					  </div>
					  <!-- /.box -->			
				</div>  

				<div class="col-lg-6 col-12">
					  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Fine List</h4>
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
						  <th>Fee Type</th>
						    <th>Fine type</th>
							<th>Fine Value</th>
						    <th>Frequency</th>
						  <th>Action</th>
						</tr>
						@foreach ($list as $key => $value)
						<tr>
						  	<td>	{{ $value['fineYear'] }}</td>
						   	<td>	{{ $value['fineType'] }}</td>
							<td>	{{ $value['fineValue'] }}</td>
						   	<td>	{{ $value['lateFeeFrequency'] }}</td>
							<td>
								<span class="glyphicon glyphicon-pencil m-sm-5" title="Edit"></span> 
								<a href="{{ url('fineSetupDestroy',['fine_setup_id_pk'=>$value['fine_setup_id_pk']]) }}"><span class="glyphicon glyphicon-trash" title="Delete"></span></a>
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
