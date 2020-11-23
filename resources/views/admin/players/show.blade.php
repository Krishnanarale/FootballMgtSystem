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

                        <!-- Content Row -->
                        <main class="py-4">
                            <div class="container">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary float-left">Form</h6>
                                        <h6 class="m-0 font-weight-bold text-primary float-right">Register Date - {{ date('d-m-Y', strtotime($player->user->created_at)) }}</h6>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" enctype="multipart/form-data" action="#">
                                            @csrf
                                            <label><strong>PLAYER</strong></label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="first_name">First Name:</label>
                                                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name') ?? $player->user->first_name }}">
                                                        @error('first_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="last_name">Last Name:</label>
                                                        <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ old('last_name') ?? $player->user->last_name }}">
                                                        @error('last_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="date_of_birth">Date Of Birth:</label>
                                                        <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror" id="date_of_birth" name="date_of_birth" value="{{ $player->date_of_birth }}">
                                                        @error('date_of_birth')
                                                        <span class=" invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <img class="img-profile rounded-circle" src="{{ ($player->avatar != '' ) ? '/storage/'. $player->avatar : 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/768px-User_icon_2.svg.png' }}" height="100px" width="100px" alt="{{ $player->user->first_name }}">
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="gender">Gender:</label>
                                                        <div class="form-control @error('gender') is-invalid @enderror">
                                                            <label class="radio-inline"><input type="radio" name="gender" value="male" {{ ($player->gender == 'male') ? "checked" : '' }}> Male</label>
                                                            <label class="radio-inline"><input type="radio" name="gender" value="female" {{ ($player->gender == 'female') ? "checked" : '' }}> Female</label>
                                                            @error('gender')
                                                            <span class=" invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="address">Address:</label>
                                                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') ?? $player->address }}">
                                                        @error('address')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="phone">Phone:</label>
                                                        <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') ?? $player->phone}}">
                                                        @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="school_attended">School Attended:</label>
                                                        <input type="text" class="form-control" id="school_attended" name="school_attended" value="{{ old('school_attended') ?? $player->school_attended }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="position_id">Position:</label>
                                                        @foreach($positions as $position)
                                                            <div class="form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="positions[]" value="{{ $position->id }}" {{ (in_array($position->id, $check)) ? "checked" : '' }}>{{ $position->name }}
                                                                </label>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="foot">Prefered Foot:</label>
                                                        <div class="form-control @error('foot') is-invalid @enderror">
                                                            <label class="radio-inline"><input type="radio" name="foot" value="left" {{ ($player->foot == 'left') ? "checked" : '' }}> Left</label>
                                                            <label class="radio-inline"><input type="radio" name="foot" value="right" {{ ($player->foot == 'right') ? "checked" : '' }}> Right</label>
                                                            @error('foot')
                                                            <span class=" invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <label><strong>PARENT / GUARDIAN INFO</strong></label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="guardian_name">Name:</label>
                                                        <input type="text" class="form-control @error('guardian_name') is-invalid @enderror" id="guardian_name" name="guardian_name" value="{{ old('guardian_name') ?? $player->guardian_name }}">
                                                        @error('guardian_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="guardian_phone">Phone:</label>
                                                        <input type="number" class="form-control @error('guardian_phone') is-invalid @enderror" id="guardian_phone" name="guardian_phone" value="{{ old('guardian_phone') ?? $player->guardian_phone}}">
                                                        @error('guardian_phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="guardian_email">Email:</label>
                                                        <input type="email" class="form-control" id="guardian_email" name="guardian_email" value="{{ old('guardian_email') ?? $player->guardian_email}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-3"></div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <strong><label>FOR OFFICE USE:</label></strong>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="received_by_name">Name:</label>
                                                        <input type="text" class="form-control @error('received_by_name') is-invalid @enderror" id="received_by_name" name="received_by_name" value="{{ old('received_by_name') ?? $player->received_by_name}}">
                                                        @error('received_by_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="received_by_date">Date:</label>
                                                        <input type="date" class="form-control @error('received_by_date') is-invalid @enderror" id="received_by_date" name="received_by_date" value="{{ old('received_by_date') ?? $player->received_by_date}}">
                                                        @error('received_by_date')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="received_by_register_number">Register Number:</label>
                                                        <input type="text" class="form-control @error('received_by_register_number') is-invalid @enderror" id="received_by_register_number" name="received_by_register_number" value="{{ old('received_by_register_number') ?? $player->received_by_register_number}}">
                                                        @error('received_by_register_number')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="received_by_squad">Squad:</label>
                                                        <select name="received_by_squad" id="received_by_squad" class="form-control @error('received_by_squad') is-invalid @enderror">
                                                            <option value="">Select</option>
                                                            @if($squads)
                                                            @foreach($squads as $squad)
                                                            <option value="{{ $squad->id }}" {{ ($player->received_by_squad == $squad->id) ? 'selected' : ''}}>{{ $squad->name }}</option>
                                                            @endforeach
                                                            @endif
                                                        </select>
                                                        @error('received_by_squad')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <hr>
                                                <label><strong>TERMS AND CONDITIONS</strong></label>
                                                <ol>
                                                    <li>The club is not responsible for any injuries on the player during international matches.</li>
                                                    <li>By signing the above the parent / guardian confirms that the player has no known physical / mental condition preventing him / her participating in the above sport including physical fitness.</li>
                                                    <li>In the event that the player get injured during official club duty be it a competitive match or a training session, Pataaki will take care of the medicals.</li>
                                                </ol>
                                                <!-- <a href="/admin/players" class="btn btn-warning float-left">Back</a>
                <button type="submit" class="btn btn-primary float-right">Submit</button> -->
                                        </form>
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
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; {{ config('app.name', 'Laravel') }} 2020</span>
                        </div>
                    </div>
                </footer>
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
