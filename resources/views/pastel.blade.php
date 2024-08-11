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
    <link rel="stylesheet" href="{{ asset('css/pastel.css') }}">
    <script src="{{ asset('js/pastel.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


</head>

    <script>
        $(document).ready(function() {
            @if(session('success'))
                toastr.options = {
                    "positionClass": "toast-top-center",
                    "preventDuplicates": true,
                    "timeOut": "3000", // Adjust timeout as needed
                    "extendedTimeOut": "1000", // Adjust extended timeout as needed
                    "showMethod": "slideDown",
                    "hideMethod": "slideUp",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showDuration": 300,
                    "hideDuration": 200,
                    "width": "320px", // Set custom width
                    "style": "ios" // Apply iOS style
                };
                toastr.success('{{ session('success') }}');
            @endif
        });
    </script>

    <nav class="navbar" id="nav1">
        <div class="navbar-left">
            <a href="#">Helpline : +000 00 000 +000 000 000</a>
        </div>
        <div class="navbar-right">
            <a href="#">For inquiry: xxxxxxxxx@xxxxxxx xxxx.com</a>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <img id="img" src="https://static.vecteezy.com/system/resources/previews/024/044/735/non_2x/shopping-cart-logo-design-cart-icon-ecommerce-logo-vector.jpg" alt="Image 1"><p class="mb-0">
                <span class="text-danger fw-bold">Home</span>
                <span class="text-dark fw-bold">Heaven</span>
            </p><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <form class="d-flex me-5">
                <div class="input-group">
                    <input type="text" class="form-control ms-4" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
                <img id="img" src="{{ asset('storage/images/image.png')}}" alt="Image 1">
                <ul class="navbar-nav mb-2 mb-lg-0 me-2">
                    <li class="nav-item me-4">
                        <a class="nav-link active fs-6 " href="#">
                             FOR SUPPORT MAIL US:<br>
                            <small class="text-muted d-inline">info@example.com</small></a>
                    </li>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

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
                </ul>
                <a href="{{ route('mycart') }}" class="icon-container me-2 mt-4 ms-4">
                    <div>
                        <i class="fa-solid fa-cart-shopping fa-xl " style="color: #000000;"></i>                        <p class="mb-3 text-dark" style="font-size: 14px;">Cart</p>
                    </div>
                </a>
                <a href="{{route('logout')}}" type="button" class="btn btn-danger  ms-5" >Logout</a>
            </form>
            </div>
        </div>
    </nav>


    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($carouselItems as $index => $item)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <img src="{{ asset('storage/images/' . $item->image) }}" height="380" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h1>{{strtoupper($item->title) }}</h1>
                    </div>
                    <div class="top-left-text fw-lighter">{{$item->heading}}<br><span class="fw-bold" style="font-size: 23px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;color: rgb(232, 220, 134);position: relative;bottom:6px;">{{ $item['starting_price'] }} QAR</span>
                    </div>
                    @php
        $description = $item['description'];
        $firstPart = '';
        $secondPart = '';
        $splitPosition = strpos($description, 'dining');
        if ($splitPosition !== false) {
            $firstPart = substr($description, 0, $splitPosition);
            $secondPart = substr($description, $splitPosition);
        } else {
            $firstPart = $description;
        }
    @endphp
    <div class="top-right-text" style="font-size: 30px; font-family: 'Great Vibes', cursive; color: {{ $index == 1 ? 'white' : 'rgb(111, 91, 91)' }};">
        {{ $firstPart }}<br>{{ $secondPart }}
                    </div>
                  <a href="{{ $item['button_link'] }}" class="btn btn-primary bottom-right-button fw-lighter">EXPLORE  <i class="fa-solid fa-arrow-right-long fa-lg"></i></a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="slider-nav">
        @foreach($carouselItems as $index => $item)
            <a href="#slide-{{ $index + 1 }}" data-bs-target="#carouselExample" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"></a>
        @endforeach
    </div>
<div class="bgimg">
<br><br><br>
<div class="container">
<div class="row">
<div class="col-6">
    @foreach($banners as $index => $banner)
            <div class="col-md-11">
                <div id="card{{ $index + 1 }}" class="card text-bg-dark ">

                    @if ($index == 1)
                        <div class="overlay1"></div>
                    @else
                        <div class="overlay"></div>
                    @endif
                    <img src="{{ asset('storage/images/' . $banner->image) }}" height="{{ ($index == 1) ? '170' : '150' }}" class="card-img" alt="{{ $banner->title }}">
                    <div class="card-img-overlay @if ($index == 1) text-start @else text-end @endif">
                        <p class="@if ($index == 1)underline-custom underline-custom-long @else underline-custom @endif card-title fw-bold mt-2 fs-2">{{ $banner->heading }}</p>
                        <p class="card-text fw-light fs-6">{{ $banner->description }}</p>
                    </div>
                </div>
                @if ($index == 0)
                <br><br>
            @endif
            </div>
        @endforeach
</div>
<div class="col-6 custom-container position-relative">
    <h2 class="fw-light mt-4">NEW ARRIVALS</h2>
    <p id="arrow-icon"><i class="fa-solid fa-arrow-right-long fa-xl"></i></p>
    <div class="row justify-content-center">
        @foreach($newest as $product)
        <div class="col-md-4 col-sm-6 col-12">
            <div class="card card-custom adjust-margin">
                <div class="card-body card-body-custom">
                    <img src="{{ asset('storage/images/' . $product->image) }}" class="card-img-custom" alt="{{ $product->name }}">
                    <a href="" id="but" class="btn btn-custom">VIEW PRODUCT</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

    </div>
</div>
<br><br>
</div>
<div class="card text-bg-dark">
<img src="https://t4.ftcdn.net/jpg/05/47/11/31/360_F_547113165_agXvFpsGNCLsc5LsR6qqkUmn0jANO5SX.jpg" height="70px" width="100%">
<div class="card-img-overlay d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                <a href="{{route('all')}}" class="btn btn-custom fw-semibold filter-btn ">ALL</a>
            </div>
            <div class="col-auto">
                <a href="{{ route('selectcategory', ['category_id' => 1]) }}" class="btn btn-custom fw-semibold filter-btn">KITCHEN WARES</a>
            </div>
            <div class="col-auto">
                <a href="{{ route('selectcategory', ['category_id' => 2]) }}" class="btn btn-custom fw-semibold filter-btn">HOME</a>
            </div>
            <div class="col-auto">
                <a href="{{ route('selectcategory', ['category_id' => 3]) }}" class="btn btn-custom fw-semibold filter-btn">MAJLIS</a>
            </div>
        </div>
    </div>
</div>
</div>

<form action="" method="post">
<div class="container">
<div class="row">
    @csrf
               @php
    $totalProducts = $products ? count($products) : 0;
    if ($totalProducts > 0) {
        $indexes = collect(range(0, $totalProducts - 1))->shuffle();
        $uniqueIndexes = $indexes->slice(0, min(4, $totalProducts))->values();
    }
@endphp

@if ($totalProducts > 0)
    @foreach($products as $index => $product)
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 product-card">
            <div class="card mt-5">
                <div class=" custom-card-body" id="boxcd">
                    <img id="imgpc" src="{{ asset('storage/images/' . $product->image) }}" class="product-card" alt="{{ $product->name }}">
                    <p class="card-title fw-bold" style="font-size: 13px;">{{ $product->name }}</p>
                    <p class="card-text mt-1" style="font-size: 10px;">{{ $product->description }}</p>
                    <div class="row">
                        <div class="col-4">
                            <p class="text-nowrap fw-bold me-2" style="font-size: 14px;">{{ number_format($product->price, 2) }} QAR</p>
                        </div>
                        <div class="col-4">
                            <p class="text-nowrap fw-semibold text-decoration-line-through mt-1 ms-2 text-muted" style="font-size: 11px;">{{ number_format($product->original_price, 2) }} QAR</p>
                        </div>
                        <div class="col-4">
                            <p class="card-notify-badge fw-semibold">{{ $product->discount }}% OFF</p>
                        </div>
                    </div>

                    <a href="{{route('add_cart',$product->id)}}" id="mmm" class="btn btn-primary"><i class="fa-solid fa-cart-shopping"></i> ADD TO CART</a>
                    <p class="card-badge fw-semibold">LIMITED COLLECTIONS</p>
                    @if (isset($uniqueIndexes))
                        @if ($index == $uniqueIndexes[0])
                            <div class="test rounded-circle text-center"></div>
                            <div class="test1 rounded-circle text-center"></div>
                        @elseif ($index == $uniqueIndexes[1])
                            <div class="test2 rounded-circle text-center"></div>
                            <div class="test3 rounded-circle text-center"></div>
                        @elseif ($index == $uniqueIndexes[2])
                            <div class="test rounded-circle text-center"></div>
                            <div class="test3 rounded-circle text-center"></div>
                        @elseif ($index == $uniqueIndexes[3])
                            <div class="test2 rounded-circle text-center"></div>
                            <div class="test3 rounded-circle text-center"></div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    @endforeach
@endif
</div>
</form>
</div>
<br>

    <div class="col-12 text-center">
        <a href="{{route('productlisting')}}" id="yes" class="btn btn-primary">View More</a>
    </div>

<br>
<br>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 column1">
                <div class="footer-content">
                    <p class="fs-1" id="h1ft">LOGO</p>
                    <h5 class="underline">Contact Us</h5>
                    <p><i class="fa-solid fa-phone fa-lg me-3"></i>  +90 7034859858</p>
                    <p><i class="fa-solid fa-envelope fa-lg me-3"></i> Homeheaven@gmail.com</p>
                </div>
            </div>
            <div class="col-md-2 column2">
                <div class="footer-content">
                    <h5 class="underline">Get to know</h5>
                    <ul>
                        <li>About Us</li>
                        <li>Centres</li>
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
            Copyright &copy; 2017 Car Rental Portal. All Rights Reserved, Developed by Home Heaven
        </p>


</body>
</html>
