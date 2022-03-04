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

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg  navbar-light shadow-sm px-5 py-3 py-lg-0" style="background: #BCD4FF; height:100px;"> 
        <a href="/index/{lang}" class="navbar-brand p-0" style="text-position: center">
           <h1 style="margin-left: 80vh;">Amazing E-Book</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <!-- Navbar End -->
    
    <!-- Main -->
    <div class="container-fluid py-5 " >
        <div class="container"> 
            <div class="row ">
                <div class="col">
                    <div class="section-title">
                        <h5 class="text-dark">{{__('signup.signup')}}</h5> <br>
                    </div>
                     <!-- message error validation -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    <form  action="/signup/create" method="POST"  enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group row">
                                    <label for="FirstName" class="col-sm-2 col-form-label">{{__('signup.frst')}}<span class="required">:</span></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="first_name" name="first_name">
                                    </div>
                                    <label for="MiddleName" class="col-sm-2 col-form-label">{{__('signup.mddl')}}:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="middle_name" name="middle_name">
                                    </div>
                            </div>
									<br>
                            <div class="form-group row">
                                <label for="LastName" class="col-sm-2 col-form-label">{{__('signup.lst')}}<span class="required">:</span></label>
                                <div class="col-sm-4">
                                 <input type="text" class="form-control" id="last_name" name="last_name">
                                </div>
                                <label for="Email" class="col-sm-2 col-form-label">{{__('signup.email')}}<span class="required">:</span></label>
                                <div class="col-sm-4">
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
								<label class="control-label col-md-2 col-sm-2 ">{{__('signup.gender')}} <span class="required">:</span></label>
							    <div class="col-sm-4 ">
								    <div id="gender">
									    <label >
										    <input type="radio" name="gender_id" value="1" class="join-btn" data-parsley-multiple="gender"> &nbsp; {{__('signup.male')}} &nbsp;
									    </label>
									    <label>
										    <input type="radio" name="gender_id" value="2" class="join-btn" data-parsley-multiple="gender"> {{__('signup.fem')}}
									    </label>
								    </div>
							    </div>
                                <label class="control-label col-md-2 col-sm-2 ">{{__('signup.role')}} <span
										class="required">:</span></label>
								<div class="col-sm-4 ">
                                        <select name ="role_id" class="custom-select col-md-4 col-sm-4 " required>
                                            <option selected disabled value=""></option>
                                            <option value="1">{{__('signup.user')}}</option>
										    <option value="2">Admin</option>
                                        </select>
								</div>
                                <br>
                                <br>
                                <div class="form-group row">
                                    <label for="Password" class="col-sm-2 col-form-label">{{__('signup.password')}} <span class="required">:</span></label>
                                    <div class="col-sm-4">
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                    <label for="Picture" class="col-sm-2 col-form-label">{{__('signup.picture')}} <span
										class="required">:</span></label>
                                    <div class="col-sm-4">
                                        <input type="file" class="form-control-file" id="display_picture_link" name="display_picture_link">
                                        
                                    </div>
                                </div>
								<div class="form-group clearfix">
									<br>
                                    <br>
								</div>

								<button type="submit" class="btn btn-primary">{{__('signup.submit')}}</button>
								<center><a href="/login/{lang}" ><u>{{__('signup.already')}}</u></a></center>

					</form>
                </div>
            </div>
        </div>
    </div>
    <!-- Endmain -->

    <!-- Footer Start -->
    <div class="container-fluid text-dark" style="background: #BCD4FF; position:absolute; bottom:0; height:60px;">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-12 text-center text-md-start"> <center>
                    <p class="mb-md-0" >&copy; <a class="text-dark border-bottom" style="font-color:black;" href="#">Amazing E-Book 2022</a></p>
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