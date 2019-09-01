<!DOCTYPE html>
<html>
<head>
    <title>Eloquent Many to Many Relations</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="car mt-5">
            <div class="card-body">
                <h3 class="text-center">Relasi Many to Many</h3>
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Nama Pengguna</th>
                        <th>Hadiah</th>
                        <th width="1%">Jumlah</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($anggota as $a)
                        <tr>
                            <td>{{ $a->nama }}</td>
                            <td>
                                <ul>
                                    @foreach($a->hadiah as $h)
                                        <li>{{ $h->nama_hadiah }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td class="text-center">{{ $a->hadiah->count() }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>