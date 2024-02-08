<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Sign in/up Form</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link rel="stylesheet" href="../../css/style.css">
    
</head> 
<body>
<div class="container" id="container">
    <div class="form-container sign-in-container">
        <form action="{{route('company.login')}}" method="post">
            @csrf
            <h1>Sign in</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your account</span>
            <input type="email" name="email" placeholder="Email" required>
            @error('email')
                <p class="error">{{ $message }}</p>
            @enderror
            <input type="password" name="password" placeholder="Password" required>
            @error('password')
                <p class="error">{{ $message }}</p>
            @enderror
            <button type="submit" name="login">Se Connecter</button>
        </form>
    </div>
</div>
</body>
</html>