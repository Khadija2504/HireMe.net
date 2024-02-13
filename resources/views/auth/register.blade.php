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
        <form action="{{route('user.register.create')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>Create Account</h1>
            <div class="flex_div">
                <input type="text" name="nom" placeholder="nom" required>
                @error('nom')
                    <p class="error">{{ $message }}</p>
                @enderror
                <input type="text" name="prenom" placeholder="prenom" required>
                @error('prenom')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex_div">
                <input type="email" name="email" placeholder="Email" required>
                @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror
                <input type="number" name="age" placeholder="age" required>
                @error('age')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex_div">
                <input type="text" name="contact_information" placeholder="contact informations" required>
                @error('contact_information')
                    <p class="error">{{ $message }}</p>
                @enderror
                <input type="text" name="poste_actuel" placeholder="poste_actuel" required>
                @error('poste_actuel')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
                <input type="text" name="about_me" placeholder="give us an idea about you" required>
                @error('about_me')
                    <p class="error">{{ $message }}</p>
                @enderror
            <div class="flex_div">
                <input type="text" name="titre" placeholder="chose your title" required>
                @error('titre')
                    <p class="error">{{ $message }}</p>
                @enderror
                <input type="text" name="industrie" placeholder="industrie" required>
                @error('industreie')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex_div">
                <input type="file" name="background" placeholder="background" required>
                @error('background')
                    <p class="error">{{ $message }}</p>
                @enderror
                <input type="file" name="photo" placeholder="Chose your photo profile" required>
                @error('photo')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex_div">
                <input type="text" name="adresse" placeholder="Adresse" required>
                @error('adresse')
                    <p class="error">{{ $message }}</p>
                @enderror
                <input type="password" name="password" placeholder="Mot de passe" required>
                @error('password')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
                <button type="submit" style="margin-top: 0" name="registerUser">S'inscrire</button>
        <div style="margin-top: 20px">Already have an account? <a href="{{ route('login') }}">Log in</a></div>
        </form>
    </div>
    <div class="form-container sign-up-container">
        <form action="{{route('company.register.create')}}" method="POST" enctype="multipart/form-data">
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
            <div class="flex_div">
                <input type="file" name="background" placeholder="background" required>
                @error('background')
                    <p class="error">{{ $message }}</p>
                @enderror
                <input type="file" name="photo" placeholder="Chose your photo profile" required>
                @error('photo')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
                <input type="password" name="password" placeholder="Mot de passe" required>
                @error('password')
                    <p class="error">{{ $message }}</p>
                @enderror
                <button type="submit" style="margin-top: 0" name="registerCompany">S'inscrire</button>
            <div style="margin-top: 20px">Already have an account? <a href="{{ route('login') }}">Log in</a></div>

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