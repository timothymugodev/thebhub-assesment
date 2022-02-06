<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/register.css') }}" />


</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="POST" action="{{ route('register') }}">
       @csrf
        <h3>Register Here</h3>
        <label for="name">Name</label>
        <input type="text" placeholder="Name" id="name" name="name" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label for="email">Email</label>
        <input type="email" placeholder="user@email.com" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password" class="@error('password') is-invalid @enderror">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label for="confirm_password">Confirm Password</label>
        <input type="password" placeholder="Password" id="confirm_password" name="confirm_password">

        <button>Register</button>
        <p class="alt-auth">Already have an account? <a href="{{ route('login') }}">Login</a></p>
    </form>
</body>
</html>

