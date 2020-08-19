<!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> @yield("title")</title>
    <link href="{{asset('_admin/css/styles.css')}}" rel="stylesheet" /> 
    <link href="{{asset('https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" crossorigin="anonymous" />
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js')}}"></script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js')}}"></script>
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css')}}">
    <link href="{{asset('_admin/css/style.css')}}" rel="stylesheet" />
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="{{url('/admin/')}}">Admin Panel</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            >
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      <i class="fas fa-user fa-fw"></i><span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('admin.logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="{{url('/admin/')}}"
                        ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard</a>
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                    ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Pages Edit
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                        ></a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('admin.page-edit')}}">Page Edit</a>
                                <a class="nav-link" href="{{route('admin.slid')}}">Slid Edit</a>
                                <a class="nav-link" href="{{route('admin.about')}}">About Edit</a>
                                <a class="nav-link" href="{{route('admin.team')}}">Team Edit</a>
                                <a class="nav-link" href="{{route('admin.menu')}}">Menu Edit</a>
                                <a class="nav-link" href="{{route('admin.testimonials')}}">Testimonials Edit</a>
                                <a class="nav-link" href="{{route('admin.footer')}}">Footer Edit</a>
                            </nav>
                        </div>
                                    <a class="nav-link" href="{{route('admin.products')}}"
                                    ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                    Products</a>
                                    <a class="nav-link" href=""
                                    ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                    Table Reservation</a>

                                    <div class="sb-sidenav-menu-heading">Addons</div>
                                    <a class="nav-link" href="{{route('admin.admins')}}"
                                    ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                    Admins</a
                                    >
                                    <a class="nav-link" href="{{route('admin.users')}}"
                                    ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Users</a>
                            </div>
                        </div>
                        <div class="sb-sidenav-footer">
                            <div class="small">Logged in as:</div>
                            Start Bootstrap
                        </div>
                    </nav>
                </div>
     <div id="layoutSidenav_content">
        <div class="container-fluid">
            <h1 class="mt-4">@yield("title-name")</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item active">@yield("name")</li>
          </ol></div>
          @yield("content")
{{--           <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2019</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer> --}}
    </div>
</div>
<script src="{{asset('https://code.jquery.com/jquery-3.4.1.min.js')}}" crossorigin="anonymous"></script>
<script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
<script src="{{asset('_admin/js/scripts.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js')}}" crossorigin="anonymous"></script>
<script src="{{asset('_admin/js/chart-area-demo.js')}}"></script>
<script src="{{asset('_admin/js/chart-bar-demo.js')}}"></script>
<script src="{{asset('https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js')}}" crossorigin="anonymous"></script>
<script src="{{asset('https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js')}}" crossorigin="anonymous"></script>
<script src="{{asset('_admin/js/datatables-demo.js')}}"></script>
<script src="{{asset('_admin/js/script.js')}}"></script>
<script src="{{asset('_admin/js/switch-alert.js')}}"></script>
<script src="{{asset('_admin/js/upload.js')}}"></script>
<script>
    @if(session('status'))
    swal({
        title: "{{session('status')}}",
        icon:  "{{session('statuscode')}}",
        button:"OK",
    });
    @endif
</script>
</body>
</html>







