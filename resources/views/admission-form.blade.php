
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

        <!-- Left side column. contains the logo and sidebar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-full">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="d-flex align-items-center">
                        <div class="mr-auto">
                            <h3 class="page-title">Create Admission</h3>

                        </div>

                    </div>
                </div>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">Student Admission</h4>
                                </div>
                                <!-- /.box-header -->
                                <form class="form" action="{{ url('/store') }}" method="POST" enctype="multipart/form-data">
									@csrf
                                    <div class="box-body">

                                        <h4 class="box-title text-info"><i class="ti-user mr-15"></i> Academic Details
                                        </h4>
                                        @if (session()->has('message'))
                                        <div class="alert alert-info">
                                            {{ session('message') }}
                                        </div>
                                    @endif
                                        <hr class="my-15">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Academic Details</label>
                                                    <select class="form-control  @error('academic_details') is-invalid @enderror" name="academic_details">
                                                        <option value="2022-2023">2022-2023</option>
                                                    </select>
													@error('academic_details')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
													@enderror
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Admission No</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-user"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control @error('addmission_no') is-invalid @enderror"
                                                            placeholder="Addmission No." name="addmission_no" autofocus>
															@error('addmission_no')
																<span class="invalid-feedback" role="alert">
																	<strong>{{ $message }}</strong>
																</span>
															@enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Roll No.</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-user"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control @error('roll_no') is-invalid @enderror"
                                                            placeholder="Roll No." name="roll_no" autofocus>
														@error('roll_no')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
														@enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Admission Date</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-user"></i></span>
                                                        </div>
                                                        <input type="date" class="form-control"
                                                            placeholder="Addmission Date" name="addmission_date">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Class</label>
                                                    <select class="form-control" name="class">
                                                        <option value="1st">1 St</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Section</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-user"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Section" name="section">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Category</label>                            
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-user"></i></span>
                                                        </div>
                                                        <select name="categorie" id="categorie" class="form-control">
                                                            <option value="">--Please Select--</option>
                                                            @foreach ($categories_list as $values)
                                                                <option value="{{ $values["categoryName"] }}">{{ $values["categoryName"] }}</option>     
                                                            @endforeach
                                                          </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-15">
                                        <h4 class="box-title text-info"><i class="ti-user mr-15"></i> Student Details
                                        </h4>
                                        <hr class="my-15">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-user"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="First Name" name="Fname">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-user"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Last Name" name="Lname">
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
                                                            <span class="input-group-text"><i
                                                                    class="ti-user"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Blood Group" name="Bgroup">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Date of Birth</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-user"></i></span>
                                                        </div>
                                                        <input type="date" class="form-control"
                                                            placeholder="DOB" name="dob">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Mother Tongue</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-user"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Mother Tang" name="mother_tang">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Religion</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-user"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Religion" name="religion">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Caste</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-user"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Cast" name="cast">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-user"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="City" name="city">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-user"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="State" name="state">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Present Address</label>
                                                    <textarea rows="5" class="form-control" placeholder="Address" name="address"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Permanent Address</label>
                                                    <textarea rows="5" class="form-control" placeholder="Permanment Address" name="permanent_address"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Profile Pic</label>
                                                    <label class="file">
                                                        <input type="file" id="file" name="profile_photo">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="my-15">
                                        <h4 class="box-title text-info"><i class="ti-user mr-15"></i> Login Details
                                        </h4>
                                        <hr class="my-15">

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Phone No</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-mobile"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Phone No" name="phoneNo">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-mobile"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Password" name="password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Confirm Password</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-mobile"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Confirm Password" name="confirm_password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-15">
                                        <h4 class="box-title text-info"><i class="ti-save mr-15"></i> Guardian Details
                                        </h4>
                                        <hr class="my-15">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Father's Name</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-mobile"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="father_name" name="father_name">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Mother's Name</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-mobile"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="mother_name">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Father's Education</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-mobile"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Father Education" name="father_education">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Father's Occupation</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-mobile"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Father Occupation" name="father_occupation">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Father's Income</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-mobile"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Father Income" name="father_incomes">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Father's Mobile No</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-mobile"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Father Mobile No." name="father_phone">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Father's Email Id</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-mobile"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Father Email Id" name="father_emaild">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Mother's Education</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-mobile"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Mother Education" name="mother_edu">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Mother's Occupation</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-mobile"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Mother Occupation" name="mother_occupation">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Mother's Income</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-mobile"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Mother Income" name="mother_inocme">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Mother's Mobile No</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-mobile"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Mother Mobile No." name="mother_phone">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Mother's Email Id</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-mobile"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Mother Email Id" name="mother_email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-mobile"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="City" name="guardian_city">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-mobile"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="State" name="guardian_state">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Permanent Address</label>
                                                    <textarea rows="5" class="form-control" placeholder="Permanent Address" name="guardian_address"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Father's Pic</label>
                                                    <label class="file">
                                                        <input type="file" id="file" name="father_photo">
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Mother's Pic</label>
                                                    <label class="file">
                                                        <input type="file" id="file" name="mother_photo">
                                                    </label>
                                                </div>
                                            </div>

                                        </div>

                                        <hr class="my-15">
                                        <h4 class="box-title text-info"><i class="ti-user mr-15"></i> Transport
                                            Details</h4>
                                        <hr class="my-15">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Route</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-mobile"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Rotue" name="route">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Vehicle No</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-mobile"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Vehicle No." name="vehicle_no">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <hr class="my-15">
                                        <h4 class="box-title text-info"><i class="ti-user mr-15"></i> Previous School
                                            Details</h4>
                                        <hr class="my-15">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>School Name</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-mobile"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="School Name" name="previous_school_name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Remarks</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="ti-mobile"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Remarks Any?" name="remarks">
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
