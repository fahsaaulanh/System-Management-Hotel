<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Insitu Hotel</title>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <!-- Custom fonts for this template -->
    <link href="{{url('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.css">

    <!-- Custom styles for this page -->
    @yield('custom_css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom-color.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom-btn.css') }}" rel="stylesheet">
    <link href="{{url('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />


</head>

<body id="page-top hold-transition sidebar-mini layout-fixed">
    @include('sweetalert::alert')

    <!-- Page Wrapper -->
    <div id="page-top"></div>
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-indigo sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-hotel"></i>
                </div>
                <div class="sidebar-brand-text mx-1">Insitu Hotel</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ (request()->is('home*')) ? 'active' : '' }}">
                <a class="nav-link " href="/home">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            @if(Auth::user()->role == 'HK' )

            <li class="nav-item {{ (request()->is('cleanUp*')) ? 'active' : '' }} ">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                    <i class="fa-solid fa-bell-concierge nav-icon"></i>
                    <span>Room Service</span>
                </a>
                <div id="collapse3" class="collapse {{ (request()->is('pesan-layanan*')) ? 'show' : '' }} " aria-labelledby="heading3" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ (request()->is('cleanUp*')) ? 'active' : '' }}" href="{{url('cleanUp')}}">Clean Room</a>

                    </div>
                </div>
            </li>
            @endif

            <!-- Divider -->
            <hr class="sidebar-divider">
            @if(Auth::user()->role == 'manager' || Auth::user()->role == 'receptionist')
            <!-- Heading -->
            <div class="sidebar-heading">
                Hotel Administration
            </div>

            <!-- Nav Item - Pages Collapse Menu -->

            <!-- Room reservation -->
            <li class="nav-item {{ (request()->is('checkin*')) ? 'active' : '' }} {{ (request()->is('jenis*')) ? 'active' : '' }} {{ (request()->is('checkout*')) ? 'active' : '' }}{{ (request()->is('kategori*')) ? 'active' : '' }}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="nav-icon fas fa-bed"></i>
                    <span>Room Reservation</span>
                </a>
                <div id="collapseTwo" class="collapse {{ (request()->is('checkin*')) ? 'show' : '' }} {{ (request()->is('checkout*')) ? 'show' : '' }} " aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ (request()->is('checkin*')) ? 'active' : '' }}" href="{{url('checkin')}}">CheckIn</a>
                        <a class="collapse-item {{ (request()->is('checkout*')) ? 'active' : '' }}" href="{{url('checkout')}}">CheckOut</a>
                    </div>
                </div>
            </li>

            <!-- Room Service -->
            <li class="nav-item {{ (request()->is('pesan-layanan*')) ? 'active' : '' }} {{ (request()->is('cleanUp*')) ? 'active' : '' }} ">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                    <i class="fa-solid fa-bell-concierge nav-icon"></i>
                    <span>Room Service</span>
                </a>
                <div id="collapse3" class="collapse {{ (request()->is('pesan-layanan*')) ? 'show' : '' }} " aria-labelledby="heading3" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ (request()->is('pesan-layanan*')) ? 'active' : '' }}" href="{{url('pesan-layanan')}}">Order Service</a>
                        <a class="collapse-item {{ (request()->is('cleanUp*')) ? 'active' : '' }}" href="{{url('cleanUp')}}">Clean Room</a>

                    </div>
                </div>
            </li>

            <div class="sidebar-heading">
                Hotel Management
            </div>

            <!-- Guest Managemeent -->
            <li class="nav-item {{ (request()->is('tamu*')) ? 'active' : '' }}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                    <i class="fa fa-user-plus"></i>
                    <span>Guest Management</span>
                </a>
                <div id="collapse4" class="collapse {{ (request()->is('tamu*')) ? 'show' : '' }} " aria-labelledby="heading4" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ (request()->is('tamu*')) ? 'active' : '' }}" href="{{url('tamu')}}">Input Guest</a>
                    </div>
                </div>
            </li>
            @endif

            @if(Auth::user()->role == 'manager' )

            <!-- Room Management -->
            <li class="nav-item {{ (request()->is('type-kamar*')) ? 'active' : '' }} {{ (request()->is('kamar*')) ? 'active' : '' }}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
                    <i class="nav-icon fas fa-door-closed"></i>
                    <span>Room Management</span>
                </a>
                <div id="collapse9" class="collapse {{ (request()->is('type-kamar*')) ? 'show' : '' }} {{ (request()->is('kamar*')) ? 'show' : '' }} " aria-labelledby="heading9" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ (request()->is('type-kamar*')) ? 'active' : '' }}" href="{{url('type-kamar')}}">Room Type</a>
                        <a class="collapse-item {{ (request()->is('kamar*')) ? 'active' : '' }}" href="{{url('kamar')}}">Room List</a>
                    </div>
                </div>
            </li>

            <!-- Service Management -->
            <li class="nav-item {{ (request()->is('jenis-layanan*')) ? 'active' : '' }} {{ (request()->is('layanan*')) ? 'active' : '' }}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                    <i class="fa-solid fa-bell-concierge nav-icon"></i>
                    <span>Service Management</span>
                </a>
                <div id="collapse5" class="collapse {{ (request()->is('jenis-layanan*')) ? 'show' : '' }} {{ (request()->is('layanan*')) ? 'show' : '' }} " aria-labelledby="heading5" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ (request()->is('jenis-layanan*')) ? 'active' : '' }}" href="{{url('jenis-layanan')}}">Service Type</a>
                        <a class="collapse-item {{ (request()->is('layanan*')) ? 'active' : '' }}" href="{{url('layanan')}}">Sevice List</a>
                    </div>
                </div>
            </li>

            <li class="nav-item {{ (request()->is('lap-management*')) ? 'active' : '' }} {{ (request()->is('lap-administrasi*')) ? 'active' : '' }}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
                    <i class="fa fa-file-pdf nav-icon"></i>
                    <span>Report</span>
                </a>
                <div id="collapse6" class="collapse {{ (request()->is('lap-management*')) ? 'show' : '' }} {{ (request()->is('lap-administrasi*')) ? 'show' : '' }} " aria-labelledby="heading5" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ (request()->is('lap-management*')) ? 'active' : '' }}" href="{{url('lap-management')}}">Management Report</a>
                        <a class="collapse-item {{ (request()->is('lap-administrasi*')) ? 'active' : '' }}" href="{{url('lap-administrasi')}}">Administration Report</a>
                    </div>
                </div>
            </li>
            <!-- User management -->
            <li class="nav-item {{ (request()->is('user*')) ? 'active' : '' }}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#coll" aria-expanded="true" aria-controls="coll">
                    <i class="fa fa-user-plus"></i>
                    <span>User Management</span>
                </a>
                <div id="coll" class="collapse {{ (request()->is('user*')) ? 'show' : '' }} " aria-labelledby="heading4" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ (request()->is('user*')) ? 'active' : '' }}" href="{{url('user')}}">Input User</a>
                    </div>
                </div>
            </li>
            @endif


            <!-- Nav Item - Tables -->




            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="group">
                            <div class="mr-2">
                                {{ Carbon\Carbon::now()->format('l, d F Y')}}
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Alerts -->
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->username}}</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('user.create') }}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Change Password
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    @yield('content')




                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Insitu Hotel</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin akan log out ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Klik "Logout" jika anda ingin keluar.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-dark" type="submit">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->

    <script src="{{url('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{url('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{url('assets/js/sb-admin-2.min.js')}}"></script>

    <!-- Page role plugins -->
    <script src="{{url('assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{url('assets/js/demo/datatables-demo.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
    <script type="text/javascript">
        $('.myselect').select2();
    </script>


    @stack('scripts')
</body>

</html>
