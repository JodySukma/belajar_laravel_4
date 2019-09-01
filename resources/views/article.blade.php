<!DOCTYPE html>
<html>
<head>
    <title>Eloquent One to Many Relations</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h3 class="text-center my-4">Eloquent One to Many Relations</h3>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Judul Artikel</th>
                            <th>Tag</th>
                            <th width="15%" class="text-center">Jumlah Tags</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($artikel as $a)
                            <tr>
                                <td>{{ $a->judul }}</td>
                                <td>
                                    @foreach($a->tags as $t)
                                        {{ $t->tag }},
                                    @endforeach
                                </td>
                                <td class="text-center">{{ $a->tags->count() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>