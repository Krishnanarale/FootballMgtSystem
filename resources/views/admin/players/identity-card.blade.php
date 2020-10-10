<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $player->user->first_name }} {{ $player->user->last_name }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('theam/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('theam/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Datatable css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

    <!-- Custom styles for this page -->
    <link href="{{ asset('theam/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <script src="{{ asset('theam/vendor/jquery/jquery.min.js') }}"></script>
</head>

<body>
    <div id="app">
        <!-- Page Wrapper -->
        <div id="wrapper">

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

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                                    <img class="img-profile rounded-circle" src="{{ 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/768px-User_icon_2.svg.png' }}">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        {{ __('Logout') }}
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </a>
                                </div>
                            </li>
                            @endguest
                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <div class="col-md-4 offset-md-4">
                            <div class="card">
                                <div class="card-header text-center">
                                    <h3 class="text-primary">Identity Card</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="row">
                                            <div class="col-md-12 text-center mb-4"><img src="{{ ($player->avatar != '' ) ? '/storage/'. $player->avatar : 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/768px-User_icon_2.svg.png' }}" height="100px" width="100px" alt="{{ $player->user->first_name }}"></div>
                                            <div class="col-md-3 offset-md-3"><label>Name:</label></div>
                                            <div class="col-md-3">{{ $player->user->first_name }} {{ $player->user->last_name }}</div>
                                            <div class="col-md-3 offset-md-3"><label>Gender:</label></div>
                                            <div class="col-md-3">{{ $player->gender }}</div>
                                            <div class="col-md-3 offset-md-3"><label>Date Of Birth:</label></div>
                                            <div class="col-md-3">{{ $player->date_of_birth }}</div>
                                            <div class="col-md-3 offset-md-3"><label>Mobile:</label></div>
                                            <div class="col-md-3">{{ $player->phone }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        $(document).ready(() => {

                            window.print();
                        })
                    </script>
                    </main>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <!-- <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; {{ config('app.name', 'Laravel') }} 2020</span>
                    </div>
                </div>
            </footer> -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('theam/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('theam/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('theam/js/sb-admin-2.min.js') }}"></script>

    <!-- Datatable js -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>


    <!-- Page level plugins -->
    <script src="{{asset('theam/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('theam/vendor/datatables/jquery.dataTables.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('theam/js/demo/datatables-demo.js')}}"></script>

    <!-- Page level plugins -->
    <!-- <script src="{{ asset('theam/vendor/chart.js/Chart.min.js') }}"></script> -->

    <!-- Page level custom scripts -->
    <!-- <script src="{{ asset('theam/js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('theam/js/demo/chart-pie-demo.js') }}"></script> -->
</body>

</html>