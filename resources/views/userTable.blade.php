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
                        <a class="text-decoration-none text-white" href="{{ route('form-data') }}">Manajemen User</a>
                    </button>
                    <button class="btn btn-primary">
                        <a class="text-decoration-none text-white" href="{{ route('form-data') }}">Tambah Data</a>
                    </button>
                    <button class="btn btn-secondary">
                        <a class="text-decoration-none text-white" href="{{ route('product-view') }}">Halaman Produk</a>
                    </button>
                </div>
            </div>
            <div class="container-fluid mt-3 py-2" style="width: 100%;">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Berat</th>
                            <th scope="col">Kondisi</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $lists)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $lists->nama }}</td>
                            <td>Rp. {{ $lists->harga }}</td>
                            <td>{{ $lists->stok }}</td>
                            <td>{{ $lists->berat }} gr</td>
                            <td>
                                @if ($lists->kondisi == 'baru')
                                    <button class="btn btn-success">{{ $lists->kondisi }}</button>
                                @else 
                                    <button class="btn btn-dark">{{ $lists->kondisi }}</button>
                                @endif
                            </td>
                            <td>{{ $lists->deskripsi }}</td>
                            <td>
                                <button class="btn btn-warning text-white">
                                    <a class="text-decoration-none text-white" href="{{ route('editData', $lists->id) }}">Update</a>
                                </button>
                                <form action="{{ route('deleteData', $lists->id) }}" method="POST" class="d-inline">
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
