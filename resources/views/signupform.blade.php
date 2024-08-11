<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <title>Document</title>
</head>
<body>
    <form action="{{route('usersave')}}" method="post">
        @csrf
    <div class="container mt-5">
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="login-container">
            <a href="{{route('login') }}"class="back-button" ><i class="fa-solid fa-arrow-left"></i></a>
        <img src="{{ asset('storage/images/logo.png')}}" alt="E-commerce Logo">
        <h2>sign Up</h2>
            <div class="input-container">
                <i class="fa fa-user"></i>
                <input type="text" name="name" placeholder=" Enter Username" required>
            </div>
            <div class="input-container">
                <i class="fa fa-lock"></i>
                <input type="password" name="password" placeholder="Enter Password" required>
            </div>
            <div class="input-container">
                <i class="fa fa-envelope"></i>
                <input type="text" name="email" placeholder="Enter Email" required>
            </div>

            <button type="submit">Submit</button>


        </form>

        <!-- Social Buttons -->
        <div class="social-buttons">
            <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" class="google"><i class="fab fa-google"></i></a>
        </div>

        <!-- Footer -->
        <div class="footer">
            Home Heaven &copy; 2024. All rights reserved.
        </div>
    </div>
</body>
</html>
