<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WZP Opole</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('assets/ver1/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/ver1/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/ver1/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/ver1/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/ver1/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/ver1/css/style.css')}}" rel="stylesheet">
</head>

<body>
<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Ładowanie...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Header Start -->
    <div class="container-fluid bg px-0" >
        <div class="row gx-0">
            <div class="col-lg-2 bg d-none d-lg-block" >
                <a href="/1" class="navbar-brand w-150 h-150 m-20 p-0 d-flex align-items-center justify-content-center" >
                    <img src="{{asset('assets/ver1/img/logo.png') }}" style="height: 170px; margin-top: 20px; margin-bottom: 30px;">

                </a>
            </div>
            <div class="col-lg-9" >
                <div class="row gx-0 bg-white d-none d-lg-flex">
                    <div class="col-lg-10 px-5 text-start" style="margin-left: 60px;">
                        <div class="h-100 d-inline-flex align-items-center py-2 me-3">
                            <i class="fa fa-envelope text-primary me-2"></i>
                            <p class="mb-0">op.barc_wzp@wp.pl</p>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2 me-3">
                            <i class="fa fa-phone-alt text-primary me-2"></i>
                            <p class="mb-0">77 442 56 80</p>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2 me-3">
                            <i class="fa fa-mobile-alt text-primary me-2"></i>
                            <p class="mb-0">662 025 538</p>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2 me-3">
                            <i class="fa fa-fax text-primary me-2"></i>
                            <p class="mb-0">77 445 50 75</p>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2 me-3">
                            <a href="https://www.facebook.com/WZPwOpolu"><i class="fab fa-facebook-f"></i>acebook</a>
                            {{--                            <a class="me-3" href=""><i class="fab fa-twitter"></i></a>--}}
                            {{--                            <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>--}}
                            {{--                            <a class="me-3" href=""><i class="fab fa-instagram"></i></a>--}}
                            {{--                            <a class="" href=""><i class="fab fa-youtube"></i></a>--}}
                        </div>

                    </div>
                </div>

                <div class="align-items-center justify-content-center">

                    <br><h1 class=" text-primary text-uppercase" style="margin-right: 90px; margin-top: 30px; margin-bottom: 30px; text-align: center;" >Wojewódzki Związek Pszczelarzy<br> w Opolu </h1>

                    {{--                   <h2 class="m-0 text-primary text-uppercase" ><img src="{{asset('assets/ver1/img/herb.png') }}" style="height:120px;" > </h2>--}}

                </div>

            </div>
            <div class="col-lg-1 bg d-none d-lg-block" >
                <a href="/1" class="navbar-brand w-150 h-150 m-0 p-0 d-flex align-items-center justify-content-center">
                    <img src="{{asset('assets/ver1/img/herb.png') }}" style="height:150px; margin-right: 90px; margin-top: 40px; margin-bottom: 30px;">

                </a>
            </div>

            <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-2 p-lg-0" style="background-image: url({{ asset('assets/ver1/img/nav_2c.jpg')}});">


                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="nav-item dropdown">

                    </div>
                    <div class="navbar-nav mr-auto py-1">
                        <a href="/" class="nav-item nav-link active">Strona główna</a>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">O nas</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="/build" class="dropdown-item">Statut</a>
                                <a href="http://wzp.opole.pl/wladze/" class="dropdown-item">Władze</a>
                                <a href="http://wzp.opole.pl/kola-pszczelarzy/" class="dropdown-item">Koła pszczelarskie</a>
                            </div>
                        </div>

                        <a href="/build" class="nav-item nav-link">Edukacja</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Zdrowie pszczół</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="http://wzp.opole.pl/zdrowie-pszczol-leki/" class="dropdown-item">Lista leków</a>
                                <a href="/build" class="dropdown-item">Zatrucie pszczół</a>

                            </div>
                        </div>
                        <a href="http://wzp.opole.pl/dokumenty/" class="nav-item nav-link">Dokumenty</a>
                        <a href="http://wzp.opole.pl/category/aktualnosci/pomoc-dotacje/" class="nav-item nav-link">Pomoc dotacje</a>
                        <a href="/build" class="nav-item nav-link">Giełda</a>
                        <a href="/contact" class="nav-item nav-link">Kontakt</a>
                    </div>
                    <a href="/build" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block" style="font-weight: bold; "> Do sklepu<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </nav>
        </div>
    </div>
    <!-- Header End -->


        <!-- Video Start -->
            <div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
                <div class="row g-0">
                    <div class="col-md-6 d-flex align-items-center" style="background-image: url({{ asset('assets/ver1/img/bg_1a.jpg')}});">
                        <div class="p-5">
{{--                            <h6 class="section-title text-start text-white text-uppercase mb-3">Luxury Living</h6>--}}
                            <h1 class="text-black mb-4" style="text-align: center; ">Strona w budowie</h1>
                            <h1 class="text-black mb-4" style="text-align: center;">Zapraszamy wkrótce!!!</h1>
{{--                            <p class="text-white mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>--}}
{{--                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Our Rooms</a>--}}
{{--                            <a href="" class="btn btn-light py-md-3 px-md-5">Book A Room</a>--}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="video">

{{--                            <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">--}}
{{--                                <span></span>--}}
{{--                            </button>--}}
                        </div>
                    </div>
                </div>
            </div>

{{--            <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                <div class="modal-dialog">--}}
{{--                    <div class="modal-content rounded-0">--}}
{{--                        <div class="modal-header">--}}
{{--                            <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>--}}
{{--                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
    </div>
    <!-- Video Start -->


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/ver1/lib/wow/wow.min.js')}}"></script>
<script src="{{ asset('assets/ver1/lib/easing/easing.min.js')}}"></script>
<script src="{{ asset('assets/ver1/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{ asset('assets/ver1/lib/counterup/counterup.min.js')}}"></script>
<script src="{{ asset('assets/ver1/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{ asset('assets/ver1/lib/tempusdominus/js/moment.min.js')}}"></script>
<script src="{{ asset('assets/ver1/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
<script src="{{ asset('assets/ver1/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{ asset('assets/ver1/js/main.js')}}"></script>
</body>

</html>
