<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from eduadmin-template.multipurposethemes.com/bs4/main/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Aug 2022 08:16:04 GMT -->
<head>
  	<x-meta/>
	<x-vendors_css/>
	<!-- Style-->  
	<link rel="stylesheet" href="{{url('public/css/style.css')}}">
	<link rel="stylesheet" href="{{url('public/css/skin_color.css')}}">	
</head>
<body class="hold-transition theme-primary bg-img" style="background-image: url(../images/auth-bg/bg-1.jpg)">
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded30 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Let's Get Started</h2>
								<p class="mb-0">Sign in to continue to WebkitX.</p>							
							</div>
							<div class="p-40">
								<form action="{{ route('login') }}" method="post">
                                    @csrf
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											</div>
											<input type="text" class="form-control pl-15 bg-transparent  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
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
												<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											</div>
											<input type="password" class="form-control pl-15 bg-transparent @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
										</div>
									</div>
									  <div class="row">
										<div class="col-6">
										  <div class="checkbox">
											<input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                {{ __('Remember Me') }}

										  </div>
										</div>
										<!-- /.col -->
										<div class="col-6">
                                            @if (Route::has('password.request'))
                                            <div class="fog-pwd text-right">
                                                <a href="{{ route('password.request') }}" class="hover-warning"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
                                              </div>
                                            </div>
                                        @endif
										 
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button type="submit" class="btn btn-danger mt-10">SIGN IN</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>	
								<div class="text-center">
									<p class="mt-15 mb-0">Don't have an account? <a href="{{ url('register') }}" class="text-warning ml-5">Sign Up</a></p>
								</div>	
							</div>						
						</div>
						<div class="text-center">
						  <p class="mt-20 text-white">- Sign With -</p>
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
	<script src="{{url("public/js/vendors.min.js")}}"></script>
	<script src="{{url("public/js/pages/chat-popup.js")}}"></script>
    <script src="{{url("public/assets/icons/feather-icons/feather.min.js")}}"></script>	
</body>

<!-- Mirrored from eduadmin-template.multipurposethemes.com/bs4/main/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Aug 2022 08:16:05 GMT -->
</html>
