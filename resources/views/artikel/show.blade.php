<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Artikel</title>
    <!-- Link ke CSS, misalnya Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link untuk ikon (misalnya menggunakan Bootstrap Icons) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <title>NAI Creative</title>
    <!-- Pastikan link ke styles.css yang ada di folder public/css -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/page1/logo.png') }}" />

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <style>
        .center {
        display: block;
        margin-left: auto;
        margin-right: auto;width="50%" height="50%" 
        }
        #about{
            position: relative;
            top: -180px; /* Angka negatif menggeser ke atas */
        }
    </style>
    <style>
        .separator {
        display: flex;
        align-items: center;
        text-align: center;
        }
        .separator::after {
        content: '';
        flex: 1;
        border-bottom: 1px solid #000;
        }
        .separator:not(:empty)::before {
        margin-right: .25em;
        }
        .separator:not(:empty)::after {
        margin-left: .25em;
        }
        .col-color {
        background-color: #ffffff;
        }
        .breadcrumb-container {
        margin-top: 20px; /* Menambahkan jarak atas */
        margin-bottom: 20px; /* Menambahkan jarak bawah */
        }
    </style>

</head>
<body>
    @include('includes.navbar')

    <!-- Content -->
    <div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <!-- Card untuk artikel -->
            <div class="card shadow-lg">
                <div class="breadcrumb-container">
                    <a href="{{ route('welcome')}}" class="breadcrumb-link">Home</a>
                    <span class="breadcrumb-divider">→</span>
                    <span class="breadcrumb-current">Artikel</span>
                </div>
                <!-- content artikel -->
                <div class="card-header text-center bg-primary text-white">
                    <h2>{{ $artikel->judul }}</h2>
                </div>
                <div class="card-body">
                    <p class="text-muted text-center">
                        <strong>Published on:</strong> {{ $artikel->created_at->format('d-m-Y') }}
                    </p>

                    <!-- Menampilkan gambar artikel jika ada -->
                    <div class="text-center mb-4">
                        @if($artikel->gambar)
                            <img src="{{ Storage::url($artikel->gambar) }}" alt="Gambar Artikel" class="img-fluid rounded">
                        @else
                            <p>Tidak ada gambar untuk artikel ini.</p>
                        @endif
                    </div>

                    <!-- Menampilkan konten artikel -->
                    <div class="mt-3">
                        {!! $artikel->konten !!}
                    </div>

                    <!-- Tombol untuk kembali ke halaman artikel -->
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Footer -->
    @include('includes.footer')

</body>
</html>
