
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ asset('js/admin.js') }}" defer></script>
</head>
<body>

<nav class="navbar navbar-default no-margin">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header fixed-brand">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" id="menu-toggle">
            <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
        </button>
        <a class="navbar-brand" href="#"><i class="fa fa-rocket fa-4"></i> Admin products</a>
    </div>
    <!-- navbar-header-->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="active">
                <button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2">
                    <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
                </button>
            </li>
        </ul>
    </div>
    <!-- bs-example-navbar-collapse-1 -->
</nav>
<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav nav-pills nav-stacked" id="menu">


            </li>
            <li>
                <a href="{{route('product')}}"><span class="fa-stack fa-lg pull-left"><i class="fa fa-cloud-download fa-stack-1x "></i></span>Products</a>
            </li>
            <li>
                <a href="{{route('category')}}"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-cart-plus fa-stack-1x "></i></span>category</a>
            </li>
            <li>
                <a href="{{route('banner')}}"><span class="fa-stack fa-lg pull-left"><i class="fa fa-youtube-play fa-stack-1x "></i></span>Banners</a>
            </li>
            <li>
                <a href="{{route('carousel')}}"><span class="fa-stack fa-lg pull-left"><i class="fa fa-youtube-play fa-stack-1x "></i></span>Carousel</a>
            </li>

        </ul>
    </div>
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
@yield('content')
    <!-- /#page-content-wrapper -->
</div>
</body>
</html>
