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
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Dashboard CS</title>
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
                                <a class="nav-link" href="manajer">
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
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        {{ Auth::user()->name }}
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Laporan Status Kebersihan </h1>
                            <div class="input-group flex-wrap flex-fill mb-3">
                                <select class="form-select flex-fill"
                                onChange="window.location.href='/laporan/' + this.options[this.selectedIndex].value">
                                    <option value="{{$dateLaporan}}">Laporan {{$dateLaporan}}</option>
                                    @foreach($listTanggal as $tanggal)
                                        @if($tanggal->tanggal != $dateLaporan)
                                            <option value="{{$tanggal->tanggal}}">Laporan {{$tanggal->tanggal}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <a href="/laporan/{{$dateLaporan}}/cetak" class="btn btn-primary" style="margin-left:10px">Cetak PDF</a>
                            </div> 
                        <div class="container shadow-sm rounded " style="background:white">
                            <div class="container p-3">
                                <div class="h3 mx-auto mt-4" style="width:390px">Laporan Status Kebersihan</div>
                                <div class="h5 mx-auto" style="width:120px">{{$dateLaporan}}</div>
                                <table class="table table-bordered mt-3">
                                <thead>
                                    <th  scope="col">No</th>
                                    <th  scope="col">Ruang</th>
                                    <th  scope="col">Penanggung Jawab</th>
                                    <th  scope="col">Status</th>
                                </thead>
                                <tbody>
                                    @foreach($laporan as $data)
                                    <tr >
                                        <td scope="row">{{$loop->iteration}}</td>
                                        <td>{{$data->ruang}}</td>
                                        <td>{{$data->PenanggungJawab}}</td>
                                        <td>{{$data->status}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        crossorigin="anonymous"></script>
    <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>     
    </body>
</html>
