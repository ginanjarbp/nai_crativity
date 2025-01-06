<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>NAI Creative</title>
        <link href="{{asset('css/home.css')}}" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="assets/page1/logo.png" />
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
        </style>
</head>
<body>
    @include('includes.navbar') <!-- Include Navbar -->

    <main>
    <div class="container" style="margin-top: 100px; text-align: left; background-color: #f8f9fa; padding: 40px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <div class="breadcrumb-container">
            <a href="{{ route('welcome')}}" class="breadcrumb-link">Home</a>
            <span class="breadcrumb-divider">→</span>
            <span class="breadcrumb-current">Artikel</span>
        </div>
         <!-- Menampilkan Judul Artikel -->
<!-- ArtikelHome.blade.php -->
<h1>P</h1>
<p>P</p>
<!-- Tampilkan konten artikel jika ada -->
<p></p>  <!-- Misalnya jika Anda memiliki kolom 'content' -->



        <hr style="margin: 20px 0; border-top: 1px solid #ddd;">
    </div>

    </main>

    @include('includes.footer') <!-- Include Footer -->
</body>
</html>
