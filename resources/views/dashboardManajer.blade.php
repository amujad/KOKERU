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
                <a class="navbar-brand mr-auto logo" href="/manajer" style>KoKeRu</a>
            </div>
            <!-- Navbar-->
            <div class="col-1">
                <ul class="navbar-nav navbar-dark ml-auto ml-md-0">
                    <a href="/editprofil/{{ Auth::user()->id }}" style="color:white">
                        <span>Edit Profil</span>
                    </a>
                </ul>
            </div>
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
                                <a class="nav-link" href="/manajer">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt fa-fw"></i></div>
                                    Dashboard
                                </a>
                                <a class="nav-link" href="/laporan">
                                    <div class="sb-nav-link-icon"><i class="fa fa-file-alt fa-fw" ></i></div>
                                    Laporan
                                </a>
                            <div class="sb-sidenav-menu-heading">Pengelolaan</div>
                                <a class="nav-link" href="/ruangan">
                                    <div class="sb-nav-link-icon"><i class="fas fa-cube fa-fw"></i></div>
                                    Ruangan
                                </a>
                                <a class="nav-link" href="/users">
                                    <div class="sb-nav-link-icon"><i class="fa fa-broom fa-fw" ></i></div>
                                    Cleaning Service
                                </a>
                            <div class="sb-sidenav-menu-heading">Reset Status Ruangan</div>
                             <div class="container row">
                                <button type="button" class="btn btn-danger col" data-toggle="modal" data-target="#reset">
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
            <div class="modal fade" id="reset" role="dialog" aria-label="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Reset Status</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Apakah Anda yakin untuk mereset status ruangan?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a href="/reset "type="button" class="btn btn-danger">Reset</a>
                        </div>
                    </div>
                </div>
            </div>
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard Manajer</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Status Ruangan {{date('d F Y')}}</li>
                        </ol>
                        <div class="container shadow-sm rounded listRuang">
                            <div class="pt-4 row row-cols-1 row-cols-md-3">
                                @foreach($ruangan as $ruang)
                                    <div class="col mb-4" style="color:white">
                                        @if($ruang->status == 'Sudah')
                                        <div class="card bg-success shadow-sm" id="card-room">
                                        @else
                                        <div class="card bg-danger shadow-sm" id="card-room">
                                        @endif    
                                            <div class="card-body"> 
                                                <h3 class="card-title">Ruang {{$ruang->nama}}</h3>
                                                <p>Status: {{$ruang->status}} </p>
                                                <p>Penanggung Jawab: {{$ruang->name}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </main>
        </div>
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
    </body>
</html>
