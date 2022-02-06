<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!--Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}" />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="POST" action="{{ route('login')}}">
        @csrf
        <h3>Login Here</h3>

        <label for="email">Email</label>
        <input type="text" placeholder="user@email.com" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="email" name="email">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password" class="@error('password') is-invalid @enderror" name="password" required>

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <button type="submit"> {{ __('Login') }}</button>
        <p class="alt-auth">Don't have an account? <a href="{{ route('register') }}">Register</a></p>
    </form>
</body>
</html>

