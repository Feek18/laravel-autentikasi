<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Management Table User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    {{-- Table --}}
    <section class="bg-info">
        <div class="container pt-4">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="fw-bold">Table Products</h1>
                <div>
                    <button class="btn btn-success">
                        <a class="text-decoration-none text-white" href="{{ route('user-table') }}">Manajemen Produk</a>
                    </button>
                </div>
            </div>
            <div class="container-fluid mt-3 py-2" style="width: 100%;">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $list)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $list->nama }}</td>
                            <td>{{ $list->email }}</td>
                            <td>{{ $list->gender }}</td>
                            <td>{{ $list->umur }} tahun</td>
                            <td>{{ $list->tgl_lahir }}</td>
                            <td>{{ $list->alamat }}</td>
                            <td>
                                <form action="{{ route('deleteData', $list->id) }}" method="POST" class="d-inline">
                                    @method('PUT')
                                    @csrf
                                    <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure delete this data?');">
                                       Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
