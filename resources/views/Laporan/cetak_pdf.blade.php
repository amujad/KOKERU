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
        <title>Dashboard CS</title>
            <style>
            table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <h1 align="center">Laporan Harian Kebersihan Ruangan</h1>
        <h2 align="center">Tanggal {{\Carbon\Carbon::parse($dateLaporan)->format('d/m/Y')}}</h2>
        <table align="center" width="80%">
            <tr>
                <th>No</th>
                <th>Ruang</th>
                <th>Nama CS</th>
                <th>Status</th>
            </tr>
            @foreach($laporan as $data)
            <tr >
                <td scope="row">{{$loop->iteration}}</td>
                <td>{{$data->ruang}}</td>
                <td>{{$data->PenanggungJawab}}</td>
                <td>{{$data->status}}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>