<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eduadmin-template.multipurposethemes.com/bs4/main/auth_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Aug 2022 08:16:05 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://eduadmin-template.multipurposethemes.com/bs4/images/favicon.ico">

    <title>EduAdmin - Registration </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">	
	<!DOCTYPE html>
	<html lang="en">
	
	<!-- Mirrored from eduadmin-template.multipurposethemes.com/bs4/main/auth_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Aug 2022 08:16:05 GMT -->
	<head>
	  <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="https://eduadmin-template.multipurposethemes.com/bs4/images/favicon.ico">
	
		<title>EduAdmin - Registration </title>
	  
		<!-- Vendors Style-->
		{{-- <link rel="stylesheet" href="css/vendors_css.css"> --}}
		  
		<!-- Style-->  
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/skin_color.css">	
	
	</head>
	
	<body class="hold-transition theme-primary bg-img" style="background-image: url(../images/auth-bg/bg-2.jpg)">
		
		<div class="container h-p100">
			<div class="row align-items-center justify-content-md-center h-p100">
				
				<div class="col-12">
					<div class="row justify-content-center no-gutters">
						<div class="col-lg-5 col-md-5 col-12">
							<div class="bg-white rounded30 shadow-lg">
								<div class="content-top-agile p-20 pb-0">
									<h2 class="text-primary">Get started with Us</h2>
									<p class="mb-0">Register a new membership</p>							
								</div>
								<div class="p-40">
									<form action="{{ url("/register") }}" method="post">
										@csrf
										<div class="form-group">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
												</div>
												<input type="text" class="form-control pl-15 bg-transparent  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus placeholder="Name">
												@error('name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
											</div>
										</div>
										<div class="form-group">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
												</div>
												<input type="email" class="form-control pl-15 bg-transparent   @error('name') is-invalid @enderror" placeholder="Email" name="email"  value="{{ old('email') }}">
												@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
											</div>
										</div>
										<div class="form-group">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
												</div>
												<input type="password" class="form-control pl-15 bg-transparent  @error('password') is-invalid @enderror" placeholder="Password" name="password"> 
												@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
											</div>
										</div>
										<div class="form-group">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
												</div>
												<input type="password" class="form-control pl-15 bg-transparent" placeholder="Retype Password" name="password">
												
											</div>
										</div>
										  <div class="row">
											<div class="col-12">
											  <div class="checkbox">
												<input type="checkbox" id="basic_checkbox_1" >
												I agree to the <a href="#" class="text-warning"><b>Terms</b></a>
											  </div>
											</div>
											<!-- /.col -->
											<div class="col-12 text-center">
											  <button type="submit" class="btn btn-info margin-top-10">SIGN IN</button>
											</div>
											<!-- /.col -->
										  </div>
									</form>				
									<div class="text-center">
										<p class="mt-15 mb-0">Already have an account?<a href="{{ url('login') }}" class="text-danger ml-5"> Sign In</a></p>
									</div>
								</div>
							</div>								
	
							<div class="text-center">
							  <p class="mt-20 text-white">- Register With -</p>
							  <p class="gap-items-2 mb-20">
								  <a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
								  <a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
								  <a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
								</p>	
							</div>
						</div>
					</div>
				</div>			
			</div>
		</div>
	
	
		<!-- Vendor JS -->
		<script src="js/vendors.min.js"></script>
		<script src="js/pages/chat-popup.js"></script>
		<script src="../assets/icons/feather-icons/feather.min.js"></script>	
		


    