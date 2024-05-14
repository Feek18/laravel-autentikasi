<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    {{-- navbar --}}
    <header class="shadow">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center p-2">
          <h1 class="fw-bold">Amandemy Market</h1>
          <nav>
              <button class="btn btn-primary">
                  <a class="text-decoration-none text-white fw-bold p-2" href="{{ route('login') }}">Login</a>
              </button>
              <button class="btn btn-outline-primary">
                  <a class="text text-decoration-none text-dark fw-bold p-2"
                      href="{{ route('register') }}">Register</a>
              </button>
          </nav>
      </div>
      </div>
    </header>

    {{-- hero --}}
    <section class="mt-5">
        <div class="container pt-5">
            <div class="d-flex justify-content-between align-items-center gap-4">
                <div>
                    <h1 class="fw-semibold">Dapatkan Produk terbaik di Amandemy Market</h1>
                    <p>Kami menyediakan kualitas produk yang berkualitas dan telah banyak di beli oleh perusahaan luar
                    </p>
                    <button class="btn btn-primary">Learn More</button>
                </div>
                <img style="width: 50%"
                    src="https://images.unsplash.com/photo-1665686310429-ee43624978fa?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="">
            </div>
        </div>
    </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
