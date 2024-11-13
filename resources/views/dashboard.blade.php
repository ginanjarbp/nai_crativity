<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin NAI</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
.navbar-admin {
    background: linear-gradient(45deg, #7a7a7a, #a0a0a0); /* Gradien abu-abu yang lebih pekat */
    color: #222; /* Warna teks abu gelap untuk kontras yang lebih baik */
    backdrop-filter: blur(5px); /* Efek blur pada latar belakang */
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.8); /* Bayangan teks yang lebih gelap */
}

    .navbar-brand img {
    /* Menambahkan bayangan yang mengikuti bentuk gambar */
    filter: drop-shadow(0px 4px 10px rgba(0, 0, 0, 0.5)); /* Bayangan mengikuti bentuk gambar */
    transition: filter 0.3s ease; /* Efek transisi pada bayangan */
}
    .navbar-admin .navbar-brand {
        display: flex;
        align-items: center;
        color: #ffffff;
        font-size: 1.2em;
    }

    .navbar-admin .navbar-brand img {
        width: 90px;
        height: 50px;
        margin-right: 10px;
    }

    .navbar-admin .navbar-brand span {
        font-weight: bold;
    }

    .navbar-admin .navbar-nav .nav-link {
        color: #ffffff;
        padding: 10px 20px;
    }

    .navbar-admin .navbar-nav .nav-link:hover {
        background-color: #495057; /* Warna latar pada hover */
        color: #ffffff;
    }

    .navbar-admin .navbar-nav .nav-link i {
        margin-right: 5px;
    }

    .navbar-admin .navbar-toggler {
        border-color: #ffffff;
    }

    .navbar-admin .navbar-toggler-icon {
        color: #ffffff;
    }

    .footer-admin {
    background: linear-gradient(45deg, #7a7a7a, #a0a0a0); /* Sama dengan navbar */
    color: #222;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.8);
    padding: 20px;
    text-align: center;
}

/* Wrapper untuk mengatur layout agar footer tetap di bawah */
        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content {
            flex: 1;
        }

        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 20px;
        }
        .neon-btn {
        background-color: #fff8dc; /* Kuning keputihan */
        color: #000;
        border: 2px solid #FFD700; /* Border neon */
        box-shadow: 0 0 5px #FFD700, 0 0 10px #FFD700, 0 0 15px #FFD700, 0 0 20px #FFD700;
        text-align: center;
        padding: 20px;
        transition: 0.3s;
        text-decoration: none; /* Hilangkan garis bawah pada teks */
    }

    .neon-btn i {
        margin-bottom: 10px;
    }

    .neon-btn:hover {
        box-shadow: 0 0 10px #FFD700, 0 0 20px #FFD700, 0 0 30px #FFD700, 0 0 40px #FFD700;
    }

    /* Gaya tombol logout */
.btn-logout {
    background: none;
    border: none;
    color: #ffffff;
    padding: 10px 20px;
    font-size: 1em;
    cursor: pointer;
    transition: background-color 0.3s ease, color 0.3s ease;
    display: flex;
    align-items: center;
}

/* Efek hover untuk tombol logout */
.btn-logout:hover {
    background-color: #495057; /* Sesuaikan dengan warna hover navbar lainnya */
    color: #ffffff;
    text-decoration: none; /* Menghilangkan garis bawah jika ada */
}

/* Efek aktif saat ditekan */
.btn-logout:active {
    transform: scale(0.95); /* Efek responsif saat ditekan */
}


    </style>
</head>
<body>

<div class="wrapper">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-admin">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/page1/logo.png') }}" alt="Admin Logo">
            <span>Hallo Admin</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <i class="fas fa-home"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-cogs"></i> Settings
                    </a>
                </li>

                <!-- Tombol Logout -->
<li class="nav-item">
    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit" class="nav-link btn-logout">
            <i class="fas fa-sign-out-alt"></i> Logout
        </button>
    </form>
</li>



            </ul>
        </div>
    </div>
</nav>

    <!-- Main content -->
    <div class="content container mt-4">
    <div class="row">
    <div class="content container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-4 mb-3">
            <a href="#" class="neon-btn w-100 d-flex flex-column align-items-center justify-content-center" style="height: 300px;">
                <i class="fas fa-newspaper fa-3x"></i>
                <span style="font-size: 1.5em;">Daftar Artikel</span>
            </a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="#" class="neon-btn w-100 d-flex flex-column align-items-center justify-content-center" style="height: 300px;">
            <i class="fas fa-images fa-3x custom-icon"></i>
                <span style="font-size: 1.5em;">Daftar Gambar</span>
            </a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="#" class="neon-btn w-100 d-flex flex-column align-items-center justify-content-center" style="height: 300px;">
                <i class="fas fa-database fa-3x"></i>
                <span style="font-size: 1.5em;">Data</span>
            </a>
        </div>
    </div>
</div>
      </div>
    </div>



    <!-- Optional Footer -->
    <footer class="footer-admin">
      <div class="container">
          <p>&copy; 2024 My Website. All rights reserved.</p>
      </div>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
