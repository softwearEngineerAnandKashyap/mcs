<!DOCTYPE html>
<html lang="en">
<head>
	<x-vendors_css/>
    <x-meta />
</head>
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif

{{ __('You are logged in!') }}
<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
    <div class="wrapper">
        {{-- <div id="loader"></div> --}}
        <x-header />
        <x-sidebar />
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-full">
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xl-8 col-12">
                            <div class="box bg-primary-light">
                                <div class="box-body d-flex px-0">
                                    <div class="flex-grow-1 p-30 flex-grow-1 bg-img dask-bg bg-none-md"
                                        style="">
                                        <div class="row">
                                            <div class="col-12 col-xl-7">
                                                <h2>Welcome back, <strong>John!</strong></h2>
                                                <p class="text-dark my-10 font-size-16">
                                                    Your students complated <strong class="text-warning">80%</strong> of
                                                    the tasks.
                                                </p>
                                                <p class="text-dark my-10 font-size-16">
                                                    Progress is <strong class="text-warning">very good!</strong>
                                                </p>
                                            </div>
                                            <div class="col-12 col-xl-5"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="box">
                                        <div class="box-header with-border">
                                            <h4 class="box-title">School Details </h4>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-12 mt-30">
                                            <div class="box pull-up">
                                                <div class="box-body d-flex align-items-center">
                                                    <img src="{{ url('../images/employee.png') }}" alt=""
                                                        class="align-self-end h-80 w-80">
                                                    <div class="d-flex flex-column flex-grow-1">
                                                        <h5 class="box-title font-size-18 mb-2 float-right">Employees
                                                        </h5>
                                                        <strong
                                                            class="text-warning float-right font-size-26">80</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="box pull-up">
                                                <div class="box-body d-flex align-items-center">
                                                    <img src="{{ url('../images/teacher.png')}}" alt=""
                                                        class="align-self-end h-80 w-80">
                                                    <div class="d-flex flex-column flex-grow-1">
                                                        <h5 class="box-title font-size-18 mb-2">Teachers</h5>
                                                        <strong
                                                            class="text-warning float-right font-size-26">30</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="box pull-up">
                                                <div class="box-body d-flex align-items-center">
                                                    <img src="{{ url('../images/student.png')}}" alt=""
                                                        class="align-self-end h-80 w-80">
                                                    <div class="d-flex flex-column flex-grow-1">
                                                        <h5 class="box-title font-size-18 mb-2">Students</h5>
                                                        <strong
                                                            class="text-warning float-right font-size-26">2000</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="box">
                                        <div class="box-header with-border">
                                            <h4 class="box-title">Working Hours</h4>
                                            <ul class="box-controls pull-right d-md-flex d-none">
                                                <li class="dropdown">
                                                    <button class="dropdown-toggle btn btn-warning-light px-10"
                                                        data-toggle="dropdown" href="#">Today</button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item active" href="#">Today</a>
                                                        <a class="dropdown-item" href="#">Yesterday</a>
                                                        <a class="dropdown-item" href="#">Last week</a>
                                                        <a class="dropdown-item" href="#">Last month</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="box-body">
                                            <div id="revenue5" class="min-h-325"></div>
                                            <div class="d-flex justify-content-center">
                                                <p class="d-flex align-items-center font-weight-600 mx-20"><span
                                                        class="badge badge-xl badge-dot badge-warning mr-20"></span>
                                                    Progress</p>
                                                <p class="d-flex align-items-center font-weight-600 mx-20"><span
                                                        class="badge badge-xl badge-dot badge-primary mr-20"></span>
                                                    Done</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="box">
                                        <div class="box-body d-flex p-0">
                                            <div class="flex-grow-1 bg-danger p-30 flex-grow-1 bg-img"
                                                style="background-position: calc(100% + 0.5rem) bottom; background-size: auto 100%; background-image: url(https://eduadmin-template.multipurposethemes.com/bs4/images/svg-icon/color-svg/custom-3.svg)">
                                                <h4 class="font-weight-400">User Activity</h4>
                                                <p class="my-10 font-size-16">
                                                    Grow marketing &amp; sales<br>through product.
                                                </p>
                                                <a href="#" class="btn btn-danger-light">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="box">
                                        <div class="box-body d-flex p-0">
                                            <div class="flex-grow-1 bg-primary p-30 flex-grow-1 bg-img"
                                                style="background-position: calc(100% + 0.5rem) bottom; background-size: auto 100%; background-image: url(https://eduadmin-template.multipurposethemes.com/bs4/images/svg-icon/color-svg/custom-4.svg)">
                                                <h4 class="font-weight-400">Based On</h4>
                                                <div class="mt-5">
                                                    <div class="d-flex mb-10 font-size-16">
                                                        <span class="icon-Arrow-right mt-5 mr-10"><span
                                                                class="path1"></span><span
                                                                class="path2"></span></span>
                                                        <span class="text-white">Activities</span>
                                                    </div>
                                                    <div class="d-flex mb-10 font-size-16">
                                                        <span class="icon-Arrow-right mt-5 mr-10"><span
                                                                class="path1"></span><span
                                                                class="path2"></span></span>
                                                        <span class="text-white">Sales</span>
                                                    </div>
                                                    <div class="d-flex mb-10 font-size-16">
                                                        <span class="icon-Arrow-right mt-5 mr-10"><span
                                                                class="path1"></span><span
                                                                class="path2"></span></span>
                                                        <span class="text-white">Releases</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box bg-transparent no-shadow mb-0">
                                <div class="box-header no-border">
                                    <h4 class="box-title">Media Files</h4>
                                    <div class="box-controls pull-right d-md-flex d-none">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-body py-0">
                                    <div class="table-responsive">
                                        <table class="table no-border mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="bg-danger h-50 w-50 l-h-50 rounded text-center">
                                                            <p class="mb-0 font-size-20 font-weight-600">A1</p>
                                                        </div>
                                                    </td>
                                                    <td class="font-weight-600">Biology Course</td>
                                                    <td class="text-fade">StarterReplacement.pdf</td>
                                                    <td class="font-weight-500"><span
                                                            class="badge badge-sm badge-dot badge-warning mr-10"></span>Only
                                                        view</td>
                                                    <td class="text-fade">78 members</td>
                                                    <td class="font-weight-600">47 MB</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-info h-50 w-50 l-h-50 rounded text-center">
                                                            <p class="mb-0 font-size-20 font-weight-600">B1</p>
                                                        </div>
                                                    </td>
                                                    <td class="font-weight-600">Contemporary Art</td>
                                                    <td class="text-fade">Loremipsum.doc</td>
                                                    <td class="font-weight-500 text-warning"><span
                                                            class="badge badge-sm badge-dot badge-warning mr-10"></span>Edit
                                                        available</td>
                                                    <td class="text-fade">78 members</td>
                                                    <td class="font-weight-600">78 MB</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-primary h-50 w-50 l-h-50 rounded text-center">
                                                            <p class="mb-0 font-size-20 font-weight-600">C1</p>
                                                        </div>
                                                    </td>
                                                    <td class="font-weight-600">Programming Language</td>
                                                    <td class="text-fade">phpcore.mp3</td>
                                                    <td class="font-weight-500"><span
                                                            class="badge badge-sm badge-dot badge-primary mr-10"></span>Only
                                                        view</td>
                                                    <td class="text-fade">48 members</td>
                                                    <td class="font-weight-600">12 MB</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-success h-50 w-50 l-h-50 rounded text-center">
                                                            <p class="mb-0 font-size-20 font-weight-600">A2</p>
                                                        </div>
                                                    </td>
                                                    <td class="font-weight-600">Geometry Course</td>
                                                    <td class="text-fade">dummyabz.pdf</td>
                                                    <td class="font-weight-500"><span
                                                            class="badge badge-sm badge-dot badge-primary mr-10"></span>Only
                                                        view</td>
                                                    <td class="text-fade">24 members</td>
                                                    <td class="font-weight-600">18 MB</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="box no-shadow mb-0">
                                        <div class="box-body px-0 pt-0">
                                            <div id="calendar" class="dask evt-cal min-h-400"></div>
                                        </div>
                                    </div>
                                    <div class="box no-shadow mb-0 px-10">
                                        <div class="box-header no-border">
                                            <h4 class="box-title">Lessons</h4>
                                            <div class="box-controls pull-right d-md-flex d-none">
                                                <a href="#">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-10">
                                        <div class="box bt-5 border-danger rounded">
                                            <div class="box-body">
                                                <div class="flex-grow-1">
                                                    <div
                                                        class="d-flex align-items-center pr-2 justify-content-between">
                                                        <h4 class="font-weight-500">
                                                            Programming
                                                        </h4>
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#"
                                                                class="px-10 pt-5"><i class="ti-more-alt"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ti-import"></i> Import</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ti-export"></i> Export</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ti-printer"></i> Print</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ti-settings"></i> Settings</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="font-size-16">
                                                        Every Day 10am to 11am
                                                    </p>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mt-10">
                                                    <div class="d-flex">
                                                        <a href="#"
                                                            class="mr-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
                                                            <img src="{{ url('../images/avatar/avatar-1.png')}}"
                                                                class="h-50 align-self-end" alt="">
                                                        </a>
                                                        <a href="#"
                                                            class="mr-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
                                                            <img src="{{ url('../images/avatar/avatar-3.png')}}"
                                                                class="h-50 align-self-end" alt="">
                                                        </a>
                                                        <a href="#"
                                                            class="mr-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
                                                            <img src="{{ url('../images/avatar/avatar-4.png')}}"
                                                                class="h-50 align-self-end" alt="">
                                                        </a>
                                                    </div>
                                                    <button type="button"
                                                        class="waves-effect waves-circle btn btn-circle btn-dark"><i
                                                            class="mdi mdi-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box bt-5 border-primary rounded">
                                            <div class="box-body">
                                                <div class="flex-grow-1">
                                                    <div
                                                        class="d-flex align-items-center pr-2 justify-content-between">
                                                        <h4 class="font-weight-500">
                                                            Core Language
                                                        </h4>
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#"
                                                                class="px-10 pt-5"><i class="ti-more-alt"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ti-import"></i> Import</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ti-export"></i> Export</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ti-printer"></i> Print</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ti-settings"></i> Settings</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="font-size-16">
                                                        Every Day 12pm to 01pm
                                                    </p>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mt-10">
                                                    <div class="d-flex">
                                                        <a href="#"
                                                            class="mr-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
                                                            <img src="{{ url('../images/avatar/avatar-2.png')}}"
                                                                class="h-50 align-self-end" alt="">
                                                        </a>
                                                        <a href="#"
                                                            class="mr-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
                                                            <img src="{{ url('../images/avatar/avatar-5.png')}}"
                                                                class="h-50 align-self-end" alt="">
                                                        </a>
                                                        <a href="#"
                                                            class="mr-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
                                                            <img src="{{ url('../images/avatar/avatar-6.png')}}"
                                                                class="h-50 align-self-end" alt="">
                                                        </a>
                                                    </div>
                                                    <button type="button"
                                                        class="waves-effect waves-circle btn btn-circle btn-dark"><i
                                                            class="mdi mdi-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box no-shadow mb-0 px-10">
                                        <div class="box-header no-border">
                                            <h4 class="box-title">Lessons</h4>
                                            <div class="box-controls pull-right d-md-flex d-none">
                                                <a href="#">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-10">
                                        <div class="box mb-15">
                                            <div class="box-body">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div
                                                            class="mr-15 bg-warning h-50 w-50 l-h-60 rounded text-center">
                                                            <span class="icon-Book-open font-size-24"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span></span>
                                                        </div>
                                                        <div class="d-flex flex-column font-weight-500">
                                                            <a href="#"
                                                                class="text-dark hover-primary mb-1 font-size-16">Informatic
                                                                Course</a>
                                                            <span class="text-fade">Johen Doe, 19 April</span>
                                                        </div>
                                                    </div>
                                                    <a href="#">
                                                        <span class="icon-Arrow-right font-size-24"><span
                                                                class="path1"></span><span
                                                                class="path2"></span></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box mb-15">
                                            <div class="box-body">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div
                                                            class="mr-15 bg-primary h-50 w-50 l-h-60 rounded text-center">
                                                            <span class="icon-Mail font-size-24"></span>
                                                        </div>
                                                        <div class="d-flex flex-column font-weight-500">
                                                            <a href="#"
                                                                class="text-dark hover-primary mb-1 font-size-16">Live
                                                                Drawing</a>
                                                            <span class="text-fade">Micak Doe, 12 June</span>
                                                        </div>
                                                    </div>
                                                    <a href="#">
                                                        <span class="icon-Arrow-right font-size-24"><span
                                                                class="path1"></span><span
                                                                class="path2"></span></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box mb-0">
                                            <div class="box-body">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div
                                                            class="mr-15 bg-danger h-50 w-50 l-h-60 rounded text-center">
                                                            <span class="icon-Book-open font-size-24"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span></span>
                                                        </div>
                                                        <div class="d-flex flex-column font-weight-500">
                                                            <a href="#"
                                                                class="text-dark hover-primary mb-1 font-size-16">Contemporary
                                                                Art</a>
                                                            <span class="text-fade">Potar doe, 27 July</span>
                                                        </div>
                                                    </div>
                                                    <a href="#">
                                                        <span class="icon-Arrow-right font-size-24"><span
                                                                class="path1"></span><span
                                                                class="path2"></span></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
</body>

</html>
