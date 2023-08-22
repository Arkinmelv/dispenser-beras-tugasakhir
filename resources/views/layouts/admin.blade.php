<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dispenser Beras - @yield('title')</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/assets') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ url('/assets') }}/vendors/simple-datatables/style.css">
    <link rel="stylesheet" href="{{ url('/assets') }}/vendors/iconly/bold.css">

    <link rel="stylesheet" href="{{ url('/assets') }}/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{ url('/assets') }}/vendors/bootstrap-icons/bootstrap-icons.css">

    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ url('/assets') }}/css/app.css">
    <link rel="stylesheet" href="{{ url('/assets') }}/vendors/chartist/chartist.css">
    
    <link rel="shortcut icon" href="{{ url('/assets') }}/images/logo/logo-kampus.png" type="image/x-icon">
    @yield('style')
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <div>
                            <a href="{{ url('/dashboard') }}"><img src="{{ url('/assets') }}/images/logo/logo-kampus.png" alt="Logo" srcset=""><span style="font-size:16px;margin-left: 8px;">{{ auth::user()->name }}</span></a>
                            
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                       
                        <li class="sidebar-item">
                            <a href="{{ url('/dashboard') }}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item">
                            <a href="{{ url('/data-penyimpanan') }}" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Data Penyimpanan</span>
                            </a>
                        </li> 
                        <li class="sidebar-item  ">
                            <a href="{{ url('/admin-kasir') }}" class='sidebar-link'>
                                <i class="bi bi-basket-fill"></i>
                                <span>Admin Kasir</span>
                            </a>
                        </li> 
                        <li class="sidebar-item  ">
                            <a href="{{ url('/laporan') }}" class='sidebar-link'>
                                <i class="bi bi-hexagon-fill"></i>
                                <span>Laporan</span>
                            </a>
                        </li> 
                        <li class="sidebar-item">
                            <a href="{{ url('/profil') }}" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Profil</span>
                            </a>
                        </li>
                        <a  class="btn btn-danger btn-block btn-md shadow-lg mt-5 submit" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">  
            @yield('content')
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; </p>
                    </div>
                    <div class="float-end">
                       
                    </div>
                </div>
            </footer>
        </div>
    </div>
    @yield('script')
    <script src="//code.jquery.com/jquery.js"></script>
        <!-- DataTables -->
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- App scripts -->
    <script src="{{ url('/assets') }}/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ url('/assets') }}/js/bootstrap.bundle.min.js"></script>

    
    <script src="{{ url('/assets') }}/js/extensions/sweetalert2.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

    <script src="{{ url('/assets') }}/js/main.js"></script>
    @yield('script')
</body>

</html>