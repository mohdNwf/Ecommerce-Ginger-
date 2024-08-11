<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('css/productlisting.css') }}">
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <script src="{{ asset('js/pastel.js') }}" defer></script>


</head>
<body>
    <nav class="navbar" id="nav1">
        <div class="navbar-left">
            <a href="#">Helpline : +000 00 000 +000 000 000</a>
        </div>
        <div class="navbar-right">
            <a href="#">For inquiry: xxxxxxxxx@xxxxxxx xxxx.com</a>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand me-auto ms-lg-5" href="#">
                <img src="{{ asset('storage/images/image.png')}}" alt="Bootstrap">
            </a>
            <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <div class="search-container">
                            <input class="form-control ms-5" type="search" placeholder="Type to Search" aria-label="Search">
                            <button class="search-button" type="submit"><i class="fas fa-search"></i></button>
                        </div>                </ul>
                <ul class="navbar-nav">
                    <div class="d-flex align-items-center ms-auto ">
                        <div class="icon-container me-5 mt-2">
                            <i class="fas fa-wallet fa-xl"></i>
                            <p class="mb-0" style="font-size: 14px;">Wallet</p>
                        </div>
                        <div class="icon-container me-2 mt-2">
                            <i class="fas fa-cart-shopping fa-xl" ></i>
                            <p class="mb-0"style="font-size: 14px;">Cart</p>
                        </div>

                <img style="width: 40px;height: 40px;" src="https://www.realmenrealstyle.com/wp-content/uploads/2023/03/Classic-Pompadour.jpg" class="rounded-circle profile" alt="Profile Image">


                    <li class="nav-item">
                        <a class="nav-link active fs-6" href="#">
                            Welcome<br>
                            <p class="d-inline fw-semibold">Michele Tony</p>
                        </a>
                    </li>

                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">

                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>

                <img id="img" class="country" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSakyD6ipmNZjd8YZL6KDqa6hNTit1IW2FZrw&s" alt="Country Image">
                <li class="nav-item">
                        <p class="d-inline ms-1 mt-1">En</p>
                    </a>
                </li>
                <div class="dropdown ">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">

                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </div>

            </div>
        </div>
    </nav>

    @yield('content1')
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 column1">
                    <div class="footer-content">
                        <p class="fs-1" id="h1ft">LOGO</p>
                        <h5 class="underline">Contact Us</h5>
                        <p><i class="fa-solid fa-phone fa-lg me-3"></i>  +90 7034859858</p>
                        <p><i class="fa-solid fa-envelope fa-lg me-3"></i> GingerTech@gmail.com</p>
                    </div>
                </div>
                <div class="col-md-2 column2">
                    <div class="footer-content">
                        <h5 class="underline">Get to know</h5>
                        <ul>
                            <li><a href="{{ route('Aboutus') }}"style="color: white; text-decoration: none;">About Us</a></li>                            <li>Centres</li>
                            <li>Wholesale</li>
                            <li>Corporate Information</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 column3">
                    <div class="footer-content">
                        <h5 class="underline">Consumer Policy</h5>
                        <ul>
                            <li>Terms & Policy</li>
                            <li>Security</li>
                            <li>Privacy</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 column4">
                    <div class="footer-content">
                        <h5 class="underline">HELP</h5>
                        <ul>
                            <li>Enquire</li>
                            <li>FAQ</li>
                            <li>Payment</li>
                            <li>Helpdesk</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 column5">
                    <div class="footer-content">
                        <h5 class="underline">Follow Us</h5>
                        <p>follow us for more information<br>and for tech related queries</p>
                            <i class="fab fa-facebook mx-3 fs-5"></i>
                            <i class="fa-brands fa-youtube mx-3 fs-5"></i>
                            <i class="fa-brands fa-twitter  mx-3 fs-5"></i>
                            <i class="fa-brands fa-instagram mx-1 fs-5"></i>
                        </p>
                    </div>
                </div>
            </div>
            <hr>
            <p class="text-centre" style="text-align: center;">
                Copyright &copy; 2017 Car Rental Portal. All Rights Reserved, Developed by Ginger Technologies
            </p>

