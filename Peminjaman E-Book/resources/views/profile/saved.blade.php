<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Amazing E-Book</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('admin/assets/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('admin/assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/lib/twentytwenty/twentytwenty.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet">
</head>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg  navbar-light shadow-sm px-5 py-3 py-lg-0" style="background: #BCD4FF; height:100px;"> 
        <a href="/home/{lang}" class="navbar-brand p-0" style="text-align: center">
           <h1 style="margin-left: 80vh;">Amazing E-Book</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse" >
            
        </div>
            <button type="button" class="btn text-dark " style="float:right;"><a href="/logout" class="btn btn-warning btn-md ">{{__('save.logout')}}</a></button>
    </nav>
    <!-- Navbar End -->
    
    <!-- Main -->
    <div class="container-fluid py-5 " >
        <div class="container"> <center>
                    <p style="margin-top: 30vh; font-size: 40px; text-align:center;" class="text-center">{{__('save.save')}}</p>
                    <a href="/home/{lang}"> {{__('save.click')}}</a>
                    <img src="{{asset('admin/assets/img/foto.png')}}" style ="z-index: -1; margin-top: -45vh; position: absolute; margin-left: -25%;" height="500px" width="500px;" >
            </center>
        </div>
    </div>
    <!-- Endmain -->

    <!-- Footer Start -->
    <div class="container-fluid text-light py-4" style="background: #BCD4FF; position:absolute; height:60px; margin-top: 25vh;">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-12 text-center text-md-start"> <center>
                    <p class="mb-md-0">&copy; <a class="text-dark border-bottom" href="#">Amazing E-Book 2022</a></p>
                </div></center>
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