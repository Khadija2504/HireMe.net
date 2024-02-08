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
        <form action="{{route('company.register.create')}}" method="POST">
            @csrf
            <h1>Create Account</h1>
            <div class="flex_div">
                <input type="text" name="nom" placeholder="nom" required>
                @error('nom')
                    <p class="error">{{ $message }}</p>
                @enderror
                <input type="email" name="email" placeholder="Email" required>
                @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
                <input type="text" name="adresse" placeholder="Adresse" required>
                @error('adresse')
                    <p class="error">{{ $message }}</p>
                @enderror
                <input type="text" name="description" placeholder="give us an idea about your company" required>
                @error('description')
                    <p class="error">{{ $message }}</p>
                @enderror
            <div class="flex_div">
                <input type="text" name="slogan" placeholder="chose your slogan" required>
                @error('slogan')
                    <p class="error">{{ $message }}</p>
                @enderror
                <input type="text" name="industrie" placeholder="industrie" required>
                @error('industreie')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
                <input type="password" name="password" placeholder="Mot de passe" required>
                @error('password')
                    <p class="error">{{ $message }}</p>
                @enderror
                {{-- <input type="password" name="password" placeholder="Mot de passe autre foi" required> --}}
                {{-- @error('password')
                    <p class="error">{{ $message }}</p>
                @enderror --}}
                <button type="submit" name="register">S'inscrire</button>
        </form>
</div>
<script  src="../../js/script.js"></script>
</body>
</html>