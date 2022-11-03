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
  
  <!-- Left side column. contains the logo and sidebar -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Add Employee</h3>
				</div>
				
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">
			<div class="row">			  
				<div class="col-lg-12 col-12">
					  <div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Add Employee</h4>
						</div>
						<!-- /.box-header -->
						<form class="form" action="{{ url('storeEmployee') }}" method="POST" enctype="multipart/form-data">
							<div class="box-body">
								@csrf
								<h4 class="box-title text-info"><i class="ti-user mr-15"></i> Academic Details</h4>
								<hr class="my-15">
								@if (session()->has('message'))
									<div class="alert alert-info">
										{{ session('message') }}
									</div>
								@endif
								<div class="row">
								  <div class="col-md-3">
									<div class="form-group">
									  <label>Role</label>
									  <select class="form-control" name="roleType">
										<option value="admin">Admin</option>
										<option value="teacher">Teacher</option>
									  </select>
									</div>
								  </div>
								  <div class="col-md-3">
									<div class="form-group">
									  <label>Designation</label>
									 <select class="form-control" name="designation">
										<option value="">--Please Select--</option>
										@foreach ($designation as $key => $valueDesg)
											<option value="{{ $valueDesg["designationName"]  }}">{{ $valueDesg["designationName"]  }}</option>
										@endforeach

									  </select>
									</div>
								  </div>
								  	<div class="col-md-3">
									<div class="form-group">
									  <label>Department</label>
									   <select class="form-control" name="department">
										<option value="">--Please Select--</option>
											@foreach ($department as $key => $valueDepart)
												<option value="{{ $valueDepart["department_name"]  }}">{{ $valueDepart["department_name"]  }}</option>
											@endforeach
									  </select>
									</div>
								  </div>
								  
								<div class="col-md-3">
									<div class="form-group">
									  <label>Joining Date</label>
									  <div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ti-user"></i></span>
										</div>
										<input type="date" class="form-control" placeholder="JoinigDate" name="JoinigDate">
									</div>
									</div>
								  </div>
								</div>
								<div class="row">
								  <div class="col-md-4">
									<div class="form-group">
									  <label>Qualification</label>
									   <div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ti-user"></i></span>
										</div>
										<input type="text" class="form-control" placeholder="qualification" name="qualification">
									</div>
									</div>
								  </div>
								  <div class="col-md-4">
									<div class="form-group">
									  <label>Experience</label>
									  <div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ti-user"></i></span>
										</div>
										<input type="text" class="form-control" placeholder="Experience" name="experience">
									</div>
									</div>
								  </div>
								<div class="col-md-4">
									<div class="form-group">
									  <label>Experience Details</label>
									  <div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ti-user"></i></span>
										</div>
										<input type="text" class="form-control" placeholder="Experience Details" name="experienceDetails">
									</div>
									</div>
								  </div>
							</div>
							<hr class="my-15">		
					<h4 class="box-title text-info"><i class="ti-user mr-15"></i> Employee Details</h4>
								<hr class="my-15">			
								<div class="row">
								  <div class="col-md-4">
									<div class="form-group">
									  <label>Name</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ti-user"></i></span>
										</div>
										<input type="text" class="form-control" placeholder="Employee Name" name="employeeName">
									</div>
									</div>
								  </div>
								  <div class="col-md-4">
									<div class="form-group">
									  <label>Date of Birth</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ti-user"></i></span>
										</div>
										<input type="text" class="form-control" placeholder="Date of Birth" name="DOB">
									</div>
									</div>
								  </div>
								   <div class="col-md-4">
									<div class="form-group">
									  <label>Gender</label>
									  <select class="form-control" name="gender">
										<option value="male">Male</option>
										<option value="female">Female</option>
									  </select>
									</div>
								  </div>
								  
								   <div class="col-md-3">
									<div class="form-group">
									  <label>Blood Group</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ti-user"></i></span>
										</div>
										<input type="text" class="form-control" placeholder="Bload Group" name="bloodGroup">
									</div>
									</div>
								  </div>
								   <div class="col-md-3">
									<div class="form-group">
									  <label>Religion</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ti-user"></i></span>
										</div>
										<input type="text" class="form-control" placeholder="Religion" name="religion">
									</div>
									</div>
								  </div>
								  
								   <div class="col-md-3">
									<div class="form-group">
									  <label>Mobile No</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ti-user"></i></span>
										</div>
										<input type="text" class="form-control" placeholder="Mobile No." name="mobileNo">
									</div>
									</div>
								  </div>
								  
								   <div class="col-md-3">
									<div class="form-group">
									  <label>Email Id</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ti-user"></i></span>
										</div>
										<input type="text" class="form-control" placeholder="Email ID" name="emailId">
									</div>
									</div>
								  </div>
								
								   <div class="col-md-6">
									<div class="form-group">
									  <label>Present Address</label>
									 <textarea rows="5" class="form-control" placeholder="Present Address" name="presentAddress"></textarea>
									</div>
								  </div>
								   <div class="col-md-6">
									<div class="form-group">
									  <label>Permanent Address</label>
									 <textarea rows="5" class="form-control" placeholder="Permanent Address" name="pAddress"></textarea>
									</div>
								  </div>
								   <div class="col-md-12">
									<div class="form-group">
									  <label>Profile Pic</label>
								 <label class="file">
									<input type="file" id="file" name="profilePic">
								  </label>
									</div>
								  </div>
								</div>
								
							<hr class="my-15">		
					<h4 class="box-title text-info"><i class="ti-user mr-15"></i> Login Details</h4>
								<hr class="my-15">			
								
								<div class="row">
								  <div class="col-md-4">
									<div class="form-group">
									  <label>Phone No</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ti-mobile"></i></span>
										</div>
										<input type="text" class="form-control" placeholder="Login Phone No." name="lPhoneNo">
									</div>
									</div>
								  </div>
								  <div class="col-md-4">
									<div class="form-group">
									  <label>Password</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ti-mobile"></i></span>
										</div>
										<input type="text" class="form-control" placeholder="Password" name="lPassword">
									</div>
									</div>
								  </div>
								    <div class="col-md-4">
									<div class="form-group">
									  <label>Confirm Password</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ti-mobile"></i></span>
										</div>
										<input type="text" class="form-control" placeholder="Confirm Password" name="cPassword">
									</div>
									</div>
								  </div>
								</div>
								<hr class="my-15">
								<h4 class="box-title text-info"><i class="ti-save mr-15"></i> Bank Details</h4>
								<hr class="my-15">
								
								<div class="row">
								<div class="col-md-4">
									<div class="form-group">
									  <label>Bank Name</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ti-mobile"></i></span>
										</div>
										<input type="text" class="form-control" placeholder="Bank Name" name="bankName">
									</div>
									</div>
								  </div>
								  
								  <div class="col-md-4">
									<div class="form-group">
									  <label>Holder Name</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ti-mobile"></i></span>
										</div>
										<input type="text" class="form-control" placeholder="Holder Name" name="holderName">
									</div>
									</div>
								  </div>
								  
								  
								  <div class="col-md-4">
									<div class="form-group">
									  <label>Bank Branch</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ti-mobile"></i></span>
										</div>
										<input type="text" class="form-control" placeholder="Bank Branch" name="branchName">
									</div>
									</div>
								  </div>
								  <div class="col-md-4">
									<div class="form-group">
									  <label>Bank Address</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ti-mobile"></i></span>
										</div>
										<input type="text" class="form-control" placeholder="Bank Address" name="bankAddress">
									</div>
									</div>
								  </div>
								  
								  <div class="col-md-4">
									<div class="form-group">
									  <label>IFSC Code</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ti-mobile"></i></span>
										</div>
										<input type="text" class="form-control" placeholder="IFSC Code" name="ifscCode">
									</div>
									</div>
								  </div>
								  
								  <div class="col-md-4">
									<div class="form-group">
									  <label>Account No</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ti-mobile"></i></span>
										</div>
										<input type="text" class="form-control" placeholder="Account No." name="accountNo">
									</div>
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
						</form>
					  </div>
					  <!-- /.box -->			
				</div>  

				

				

				

				

			
		    </div>
			<div class="row">
							<!--/.col (left) -->
			<!-- right column -->
		
			<!--/.col (right) -->
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
