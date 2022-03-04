<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Amazing E-Book</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('admin/assets/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('admin/assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="navbar justify-content-around" style="background: #BCD4FF; text-alight: center;"> 
        <a href="/home/{lang}" class="navbar-brand p-0 text-center" style="text-align: center;">
            <h1 style="margin-right: -60vh;">Amazing E-Book </h1> 
        </a>
        <a href="/logout/{lang}" class="btn btn-warning btn-sm" > Log Out</a>
</div>

    <div class="navbar navbar-expand bg-warning navbar-light shadow-sm  py-0 py-sm-0" style="height:40px;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarCollapse">

            <div class="navbar-nav mx-auto py-0 text-center">
                <a href="/home/{lang}" class="nav-item nav-link {{ request()->is('home/{lang}') ? 'active' : '' }}" >Home</a>
                <a href="/cart/{lang}" class="nav-item nav-link {{ request()->is('cart/{lang}') ? 'active' : '' }}">Cart</a>
                <a href="/profile/{lang}" class="nav-item nav-link {{ request()->is('profile/{lang}') ? 'active' : '' }}">Profile</a>
                @if($loggedIn->role_id == 2 )
                <a href="/account-maintenance/{lang}" class="nav-item nav-link {{ request()->is('account-maintenance/{lang}') ? 'active' : '' }}">Account Maintenance</a>
                @endif
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Main -->
    @yield('content')
    <!-- Endmain -->

    <!-- Footer Start -->
    <div class="container-fluid text-dark py-4" style="background: #BCD4FF; position:absolute; bottom:0; height:60px;">
        <div class=" container">
        <div class="row g-0">
            <div class="col-md-12 text-center text-md-start">
                <center>
                    <p class="mb-md-0">&copy; <a class="text-dark border-bottom" href="#">Amazing E-Book 2022</a></p>
            </div>
            </center>
        </div>
    </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('admin/assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('admin/assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('admin/assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('admin/assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('admin/assets/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('admin/assets/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('admin/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="{{asset('admin/assets/lib/twentytwenty/jquery.event.move.js')}}"></script>
    <script src="{{asset('admin/assets/lib/twentytwenty/jquery.twentytwenty.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('admin/assets/js/main.js')}}"></script>
</body>

</html>