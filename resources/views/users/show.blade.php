<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <title>Dashboard Manajer</title>
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="{{url('assets/css/sb-admin.css')}}" rel="stylesheet"/>
        <link
            href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"
            rel="stylesheet"
            crossorigin="anonymous"/>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
            crossorigin="anonymous"></script>
        <style>
            body{font-family: 'Montserrat', sans-serif;
                text-rendering : optimizeLegibility;
	            -webkit-font-smoothing : antialiased;
	            background-color: #f8f9fc;
                
            }
            .listRuang{
                background-color: #ffff;
            }
            .login .btn {
            border-radius: 40px;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 2px;
            font-size: 20px;
            padding: 12px;
            background-color: #00B72E;
            }
            
        </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark shadow" style="background-color: #48b599">
            <div class="navbar-brand mr-auto logo">
                <a class="navbar-brand mr-auto logo" href="#" style>KoKeRu</a>
            </div>
            <!-- Navbar-->
            <ul class="navbar-nav navbar-dark ml-auto ml-md-0">
                <a href="{{url('logout')}}" style="color:white">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Sign Out</span>
                </a>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light bg-white shadow-sm" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Inti</div>
                                <a class="nav-link" href="#">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt fa-fw"></i></div>
                                    Dashboard
                                </a>
                                <a class="nav-link" href="#">
                                    <div class="sb-nav-link-icon"><i class="fa fa-file-alt fa-fw" ></i></div>
                                    Laporan
                                </a>
                            <div class="sb-sidenav-menu-heading">Pengelolaan</div>
                                <a class="nav-link" href="#">
                                    <div class="sb-nav-link-icon"><i class="fas fa-cube fa-fw"></i></div>
                                    Ruangan
                                </a>
                                <a class="nav-link" href="#">
                                    <div class="sb-nav-link-icon"><i class="fa fa-broom fa-fw" ></i></div>
                                    Cleaning Service
                                </a>
                            <div class="sb-sidenav-menu-heading">Reset Status Ruangan</div>
                            <div class="container row">
                                <button type="button" class="btn btn-danger col" href="charts.html">
                                    <div class="sb-nav-link-icon">
                                        <i class="fas fa-retweet"></i>
                                        <span>Reset</span>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        {{ Auth::user()->name }}
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
            <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Show User {{$users->id}}</h5>
                <p class="card-text">{{$users->username}}</p>
                <p>{{$users->name}}</p>
                <p>{{$users->email}}</p>
                <p>{{$users->level}}</p>
            </div>
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>

    </body>
</html>