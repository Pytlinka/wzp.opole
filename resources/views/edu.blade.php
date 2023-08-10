<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WZP w Opolu</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('assets/ver1/img/favicon.ico')}}" rel="icon">

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
<div class="container-xxl bg-white p-0" style="background-image: url{{ asset('assets/ver1/img/news_1.jpg')}})">
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

            <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-2 p-lg-0" style="background-image: url({{ asset('assets/ver1/img/nav_2c.jpg')}});" title="Obraz autorstwa pikisuperstar na Freepik">
                <a href="/" class="navbar-brand d-block d-lg-none">
                    {{--                    <h1 class="m-0 text-primary text-uppercase">WZP w Opolu</h1>--}}
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="nav-item dropdown">

                    </div>
                    <div class="navbar-nav mr-auto py-1">
                        <a href="/" class="nav-item nav-link">Strona główna</a>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">O nas</a>
                            <div class="dropdown-menu rounded-0 m-0">

                                <a href="/władze" class="dropdown-item">Władze</a>
                                <a href="/build" class="dropdown-item">Koła pszczelarskie</a>
                            </div>
                        </div>

                        <a href="#" class="nav-item nav-link active">Edukacja</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Zdrowie pszczół</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="/leki" class="dropdown-item">Lista leków</a>
                                <a href="/build" class="dropdown-item">Zatrucie pszczół</a>

                            </div>
                        </div>
                        <a href="/dokumenty" class="nav-item nav-link">Dokumenty</a>
                        <a href="/build" class="nav-item nav-link">Pomoc dotacje</a>
                        <a href="/build" class="nav-item nav-link">Giełda</a>
                        <a href="/kontakt" class="nav-item nav-link">Kontakt</a>
                    </div>
                    <a href="/build" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block" style="font-weight: bold; "> Do sklepu<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </nav>
        </div>
    </div>
    <!-- Header End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{ asset('assets/ver1/img/news_1.jpg')}});" title="Obraz autorstwa dgim-studio na Freepik">
        <div class="container-fluid page-header py-5">
            <div class="container text-center pb-5">
                <h1 class="display-3 text-dark mb-3 animated slideInDown" style="margin-top: 30px;" id="edukacja">Edukacja</h1>

            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- hex img Start -->
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h4 class="section-title text-center text-primary text-uppercase" style="margin-bottom: 30px;">Materiały edukacyjne </h4>


    </div>


    <!-- Video Start -->
    <div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
        <div class="row g-0">
            <div class="col-md-6 d-flex align-items-center" style="background-image: url({{ asset('assets/ver1/img/bg_1a.jpg')}});" title= "Obraz autorstwa starlinena Freepik">
                <div class="p-5">
                    <h6 class="section-title text-start text-black text-uppercase mb-3">Materiał video</h6>
                    <h1 class="text-black mb-4">Zgnilec amerykański - Andrzej Bober</h1>
                    <p class="text-black mb-4">Akademia Pszczelarza zaprasza na "Rozmowy o pszczołach", w tym odcinku rozmawiamy z lek. wet. Andrzejem Boberem z Zakładu Chorób Pszczół Państwowego Instytutu Weterynarii w Puławach. Z naszym gościem o zgnilcu europejskim, amerykańskim, diagnostyce oraz leczeniu rozmawia Michał Kolasa. </p>
{{--                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Our Rooms</a>--}}
{{--                    <a href="" class="btn btn-light py-md-3 px-md-5">Book A Room</a>--}}
                </div>
            </div>
            <div class="col-md-6">
                <div class="video">
                    <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/watch?v=sImzl42vGBM" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/sImzl42vGBM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Start -->



    <!-- Newsletter Start -->
    <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="row justify-content-center">
            <div class="">
                <div class="">
                    <div class="bg-black rounded text-center p-5">
                        {{--                        <h4 class="mb-4">Subscribe Our <span class="text-primary text-uppercase">Newsletter</span></h4>--}}
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            {{--                            <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">--}}
                            {{--                            <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Start -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-dark footer wow fadeIn" data-wow-delay="0.1s" style="background-image: url({{ asset('assets/ver1/img/news_1.jpg')}});">

        <div class="container pb-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-4">
                    <div class="bg-primary rounded p-4">
                        <a href="/"><h1 class="text-black text-uppercase mb-3">Wojewódzki Związek Pszczelarzy w Opolu</h1></a>

                    </div>
                </div>
                <div class="col-md-6 col-lg-3" style="color: black; font-weight: bold;">
                    <h6 class="section-title text-start text-dark text-uppercase mb-4" >Kontakt</h6>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>ul. Haliny Poświatowskiej 3-5,</br> 45-002 Opole</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>77 442 56 80</p>
                    <p class="mb-2"><i class="fa fa-mobile-alt me-3"></i>662 025 538</p>
                    <p class="mb-2"><i class="fa fa-fax me-3"></i>77 445 50 75</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>op.barc_wzp@wp.pl</p>
                    <div class="d-flex pt-2">
                        {{--                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>--}}
                        <a class="btn btn-outline-light btn-social text-lowercase" href=""><i class="fab fa-facebook-f"></i>acebook</a>
                        {{--                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>--}}
                        {{--                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>--}}
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="row gy-5 g-4">
                        <div class="col-md-6">
                            <h6 class="section-title text-start text-dark text-uppercase mb-4">Związek</h6>

                            <a class="btn btn-link" href="/władze">Władze</a>
                            <a class="btn btn-link" href="http://wzp.opole.pl/kola-pszczelarzy/">Koła terenowe</a>
                            <a class="btn btn-link" href="/">Aktualności</a>

                            <a class="btn btn-link" href="/kontakt">Kontakt</a>

                        </div>
                        <div class="col-md-6">
                            <h6 class="section-title text-start text-dark text-uppercase mb-4">Usługi</h6>
                            <a class="btn btn-link" href="http://wzp.opole.pl/category/aktualnosci/pomoc-dotacje/">Pomoc przy dotacjach</a>
                            <a class="btn btn-link" href="/build">Sklep "Opolska Barć"</a>
                            <a class="btn btn-link" href="/dokumenty">Dokumenty</a>
                            <a class="btn btn-link" href="/leki">Lista leków</a>
                            <a class="btn btn-link" href="#edukacja">Edukacja</a>
                            <a class="btn btn-link" href="/build">Giełda</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0" style="color: black; font-weight: bold;">
                        &copy; <a class="border-bottom" href="#">wzp.opole.pl</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Template By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a></br>
                        Modified by Aleksandra Pytlińska
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#top" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

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
