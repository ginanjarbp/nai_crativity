<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
<div class="login-container">
    <img src="{{ asset('assets/page1/logo.png') }}" alt="Logo" class="logo" style="width: 90px; height: 50px;"> 
    <h2>Login</h2>
    <form action="{{ route('admin.login') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email"></label>
            <input type="text" name="email" id="email" placeholder="Email" required>
        </div>


        <div class="form-group">
            <label for="password"></label>
            <input type="text" name="password" id="password" placeholder="Password" required>
        </div>

        <button type="submit">Login</button>
    </form>

    <!-- Tampilkan error jika ada -->
    @if(session('error'))
        <div>{{ session('error') }}</div>
    @endif
</div>

<!-- Tambahkan JavaScript untuk menampilkan alert sukses -->
@if(session('success'))
<script>
    alert("{{ session('success') }}"); // Alert "Login berhasil"
    setTimeout(function() {
        window.location.href = "{{ route('admin.dashboard') }}"; // Ganti dengan route dashboard admin
    }, 2000); // Redirect setelah 2 detik
</script>
@endif

</body>
</html>
