<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/register.css') }}"/>


</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form>
        <h3>Register Here</h3>
         <label for="name">Name</label>
         <input type="text" placeholder="Name" id="name" name="name">

        <label for="email">Email</label>
        <input type="email" placeholder="user@email.com" id="email" name="email">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password">

        <label for="confirm_password">Confirm Password</label>
        <input type="password" placeholder="Password" id="confirm_password" name="confirm_password">

        <button>Register</button>
         <p class="alt-auth">Already have an account? <a href="{{ route('login') }}">Login</a></p>
    </form>
</body>
</html>