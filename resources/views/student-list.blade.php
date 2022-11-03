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
                    <h3 class="page-title">Students</h3>
                    
                </div>
                
            </div>
        </div>	  

        <!-- Main content -->
        <section class="content">
            <div class="row">			  
                <div class="col-lg-12 col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">All Students</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example5" class="table table-bordered table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Class</th>
                                            <th>Section</th>
                                            <th>Admission No</th>
                                            <th>Father's Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($studnetListing as $key => $value)
                                            <tr>
                                            <td><img src="{{ asset('storage/addmission_images/'.$value["profile_photo"])}}" alt="">
                                                    </td>
                                                <td>{{ $value["Fname"] }} {{ $value["Lname"] }}</td>
                                                <td>{{ $value["class"] }}</td>
                                                <td>{{ $value["section"] }}</td>
                                                <td>{{ $value["addmission_no"] }}</td>
                                                <td>{{ $value["father_name"] }}</td>
                                                <td><span class="glyphicon glyphicon-th-large m-sm-5" data-toggle="modal" data-target="#myModal" title="Quick View"></span> 
                                                
                                                <a href="#"><span class="glyphicon glyphicon-eye-open m-sm-5" title="Details"></span></a> 
                                                <a href="#"><span class="glyphicon glyphicon-trash" title="Delete"></span></a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    
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