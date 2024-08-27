<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sistem Informasi Pasien</title>
</head>

<body>
    <h1 class="text-center m-5">Sistem Informasi Pasien</h1>
    @if (session('sukses'))
    <div class="alert alert-success" role="alert">
        {{ session('sukses') }}
    </div>
    @endif
    <a href="/pasien/create" class="btn btn-info m-2"> Tambah Data Pasien</a>
    <table class="table text-center table-dark table-striped">


        <thead>
            <tr>
                <th>No</th>
                <th>Rekam Medis</th>
                <th>Nama Pasien</th>
                <th>Tanggal Masuk</th>
                <th>KTP</th>
                <th>KK</th>
                <th>Foto Lain</th>
                <th>KTP Penanggung Jawab</th>
                <th>Foto Penanggung Jawab</th>
                <th>Edit</th>
                <th>Hapus</th>

            </tr>
        </thead>



        @foreach($patients as $patient)


        <tbody>
            <tr>
                <td>{{$patient->id}}</td>
                <td>{{$patient->rm}}</td>
                <td>{{$patient->nama}}</td>
                <td>{{$patient->tanggal}}</td>
                <td>{{$patient->ktp}}</td>
                <td>{{$patient->kk}}</td>
                <td>{{$patient->fotolain}}</td>
                <td>{{$patient->ktppj}}</td>
                <td>{{$patient->fotopj}}</td>

                <td>
                    <a href="" class="btn btn-warning">Edit</a>
                </td>

                <td>
                    <a href="" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>