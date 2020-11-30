<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <link href="{{ asset('assets/css/styleHome.css') }}" rel="stylesheet">
        <title>Home</title>
    </head>
    <body>
       <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">
                <h1 class="logo mr-auto"><a href="{{url('/')}}">KoKeRu</a></h1>
                <a href="{{ url('/login') }}"  class="get-started-btn scrollto">Login</a>
            </div>
        </header>

        <section id="hero" class="d-flex align-items-center">
            <div class="container">
                <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Kontrol Kebersihan Ruangan</h1>
                    <h2>Pengontrolan status kebersihan ruangan gedung</h2>
                    <div class="d-flex">
                    <a href="{{ url('/login') }}" class="btn-login">Login</a>
                    <a href="#" class="btn btn-room"> Rooms </a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="{{ asset('assets/images/cleaning-room.jpg') }}" class="img-fluid animated" alt="">
                </div>
                </div>
            </div>
        </section>
        <div class="d-flex justify-content-center pb-3">
            <h2>Status Ruangan {{date('d/m/Y')}}</h3>
        </div>
        <div class="container shadow rounded">
            <div class="pt-4 row row-cols-1 row-cols-md-3">
                @foreach($ruangan as $ruang)
                    <div class="col mb-4">
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
    </body>
</html>
