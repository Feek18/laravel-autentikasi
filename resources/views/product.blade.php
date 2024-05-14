<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products Page View</title>
    <style>
        .head-card {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            margin: 24px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    {{-- Product Section --}}
    <section>
        <div class="container mt-4">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1 class="fs-1 fw-bold">Products</h1>
                    <p class="fs-6">Produk yang kami miliki memiliki kualitas terbaik dan terbaru</p>
                </div>
                <div>
                    @if(Auth::User()->HasRole('superadmin'))
                    <button class="btn btn-primary">
                        <a class="text-decoration-none text-white" href="{{ route('admin-table') }}">Halaman Admin</a>
                    </button>
                    @endif
                    <button class="btn btn-danger">
                        <a class="text-decoration-none text-white" href="{{ route('logout') }}">Logout</a>
                    </button>
                </div>
            </div>
            <div class="d-flex justify-content-around align-items-center mt-4">
                <div class="head-card gap-4">
                    @foreach ($product as $lists)
                    <div class="card" style="width: 330px">
                        @if (isset($lists->gambar))
                            <img src="{{ Storage::url($lists->gambar) }}" alt="Gambar Produk">
                        @else
                            <p>Tidak ada gambar</p>
                        @endif
                        <div class="p-3">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h1 class="fs-3 fw-bold">{{ $lists->nama }}</h1>
                                <button class="btn btn-success fw-semibold border border-0" style="font-size: 12px">{{ $lists->kondisi }}</button>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <button class="btn btn-secondary fs-6 fw-normal rounded">Rp. {{ $lists->harga }}</button>
                                <button class="btn btn-secondary fs-6 fw-normal rounded">{{ $lists->berat }} gr</button>
                            </div>
                            <p class="fs-6 mb-4">{{ $lists->deskripsi }}</p>
                            <button class="btn btn-primary" style="width: 100%">Pesan Sekarang</button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div> 
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>