<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Single Pos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;800&display=swap" rel="stylesheet">
    {{-- end font --}}
    <style>
        body {
            background-color: #f8fefae4
        }

        *{
            font-family: 'Poppins', 'sans-serif';
        }

        .atas {
            margin: 200px;
        }

    </style>
</head>

  <body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-success bg-opacity-50 navbar-dark mb-5">
      <div class="container">
        <a class="navbar-brand" href="#">CEG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Log Out</a>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    {{-- End Navbar --}}

    {{-- Pos --}}
    <div class="container">
        <div class="row">
            <div class="card p-0">

              {{-- Header --}}
              <div class="card-header text-center" style="background-color:#ffffff;">
                <h2 class="fw-semibold" style="color:rgba(0, 0, 0, 0.704);">Single Pos</h2>
              </div>
              {{-- End Header --}}

              {{-- Body --}}
              <div class="card-body">
                <div class="row d-flex justify-content-center mb-4 pt-4" style="text-align: center; font-weight: bold;">
                    <div class="col-2" style="font-size: 18px;">
                        Nama Tim :
                    </div>
                    <div class="col-3">
                        <select class="form-select" style="text-align: center;">
                            <option selected>-- Pilih Pemain --</option>
                            <option value="1">Pemain 1</option>
                            <option value="2">Pemain 2</option>
                            <option value="3">Pemain 3</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <select class="form-select" style="text-align: center;">
                            <option selected>-- Input Koin --</option>
                            <option value="1">25</option>
                            <option value="2">50</option>
                            <option value="3">75</option>
                            <option value="4">100</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <button type="button" class="btn btn-info px-3 mx-1 text-white">Cek</button>
                        <button type="button" class="btn btn-info mx-1 text-white">Reset</button>
                    </div>
                </div>
              </div>
              {{-- End Body --}}

              {{-- Result --}}
              <div class="d-flex justify-content-center pt-4 pb-4" style="border-top: 1px solid #d9d3d3;">
                    <button type="button" class="btn btn-success px-2 mx-2">Menang</button>
                    <button type="button" class="btn btn-danger px-3 mx-2">Kalah</button>
              </div>
              {{-- End Result --}}

              {{-- Footer --}}
              <div class="card-footer pt-3 pb-3 text-center bg-danger bg-opacity-75">
                <p class="d-inline text-white fw-semibold">Status Pos : <span id="status">Kosong</span></p>
              </div>
              {{-- End Footer --}}
            </div>
        </div>
    </div>
    {{-- End Pos --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>

</html>
