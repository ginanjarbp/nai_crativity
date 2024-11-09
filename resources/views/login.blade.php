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
<img src="{{ asset('assets/page1/logo.png') }}" alt="Logo" class="logo" style="width: 50px; height: 50px;"> 
    <h2>Login</h2>
    <form action="{{ route('login.submit') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for=""></label>
            <input type="text" name="username" id="username" placeholder="Username" required>
        </div>

        <div class="form-group">
            <label for="password"></label>
            <input type="password" name="password" id="password" placeholder="Password" required>
        </div>

        <button type="submit">Login</button>
    </form>

    <!-- Tampilkan error jika ada -->
    @if($errors->any())
        <div class="error-messages">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
</body>
</html>
