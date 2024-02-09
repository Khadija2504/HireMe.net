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
        <form action="{{route('loginUser')}}" method="post">
            @csrf
            <h1>login as a user</h1>
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
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
    
            </div>
        </form>
    </div>
    <div class="form-container sign-up-container">
        <form action="{{route('company.login')}}" method="post">
            @csrf
            <h1>Logoing as a company</h1>
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
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
    
            </div>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signIn">As a user</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start the journey with us</p>
                <button class="ghost" id="signUp">As a company</button>
            </div>
        </div>
    </div>
</div>
<script  src="../../js/script.js"></script>
</body>
</html>