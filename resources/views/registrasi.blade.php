<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    {{-- Register --}}
    <section class="container mt-5">
        <div class="d-flex justify-content-center ailgn-items-center my-4">
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <div class="card" style="width: 100%;">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="col-md-6" style="height: 100%;">
                        <img src="https://images.unsplash.com/photo-1459411552884-841db9b3cc2a?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" style="width: 550px; height: 100%;" alt="">
                    </div>
                    <div class="col-md-6 p-4">
                        <h1 class="fw-bold fs-2 text-center">Form Daftar</h1>
                        <p class="text-center">Create your account please!</p>
                        <form action="{{ route('register_user') }}" method="POST">
                            @csrf
                            <div class="mb-2">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" placeholder="Masukan Nama Kamu" name="nama" id="nama" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email Address</label>
                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukan Email Kamu" value="{{ old('email') }}">
                                @error('email')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Masukan Password Kamu" value="{{ old('password') }}">
                                @error('password')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="gender" class="form-label">Gender</label>
                                <input type="text" placeholder="Masukan Gender Kamu" name="gender" id="gender" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="umur" class="form-label">Umur</label>
                                <input type="text" placeholder="Masukan Umur Kamu" name="umur" id="umur" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" placeholder="Masukan Alamat Kamu" name="alamat" id="alamat" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="role">Role</label>
                                <select name="role" class="form-select" value="{{ old('role') }}">
                                    <option value="">Pilih Role</option>
                                    <option value="superadmin">Super Admin</option>
                                    <option value="user">User</option>
                                </select>
                                @error('role')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <button class="btn btn-primary py-1 px-4 w-100" type="submit">Daftar</button>
                        </form>                        
                    </div>
                </div>  
            </div>
        </div>
    </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>