<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin NAI</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    /* Responsif untuk perangkat mobile */
    @media (max-width: 768px) {
        footer {
            padding: 20px 0;
        }
    }

    /* Responsif untuk perangkat desktop */
    @media (min-width: 769px) {
        footer {
            padding: 40px 0;
        }
    }
</style>
<style>
        html, body {
            height: 100%;
            margin: 0;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            height: 100%;
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
    </style>

</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand text-center" href="#">
    <img src="{{ asset('assets/page1/logo.png') }}" alt="Admin Logo" class="d-block mx-auto" style="width: 90px; height: 50px; margin-bottom: 5px;">
    <span>Hallo Admin</span>
</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Manage Articles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Settings</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Main content -->
<div class="container mt-4">
  <h2>Tambah Artikel Baru</h2>
  <form action="{{ route('storeArticle') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Judul Artikel</label>
      <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">Isi Artikel</label>
      <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
    </div>
    <div class="mb-3">
      <label for="category" class="form-label">Kategori</label>
      <select class="form-select" id="category" name="category" required>
        <option value="">Pilih Kategori</option>
        <option value="Tech">Teknologi</option>
        <option value="Lifestyle">Gaya Hidup</option>
        <option value="Health">Kesehatan</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Simpan Artikel</button>
  </form>
</div>

<!-- Optional Footer -->
<footer class="bg-dark text-white text-center py-4 mt-5">
            <div class="container">
                <p>&copy; 2024 My Website. All rights reserved.</p>
            </div>
        </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
