<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> @yield('title') - پنل شادفیت</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="panel/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="{{asset("https://fonts.googleapis.com")}}">
    <link rel="preconnect" href="{{asset("https://fonts.gstatic.com")}}" crossorigin>
    <link href="{{asset("https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap")}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("https://cdnjs.cloudflare.com/ajax/libs/vazir-font/30.1.0/font-face.min.css")}}"
        integrity="sha512-FOp1/1tT19/xw6wkob5zvDLQUPFTgmYy6fXIKpo/nvZyMiyhe72YNhgSRlrE/FLS8OgYFONMGvqazSVLbO2/6Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Icon Font Stylesheet -->
    <link href="{{asset("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css")}}" rel="stylesheet">
    <link href="{{asset("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css")}}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset("lib/owlcarousel/asset/owl.carousel.min.css")}}" rel="stylesheet">
    <link href="{{asset("lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css")}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset("panel/css/bootstrap.min.css")}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset("panel/css/style.css")}}" rel="stylesheet">

</head>

<body>
    <div class=" position-relative bg-white d-flex p-0">

        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3 shadow-sm">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">پنل شادفیت</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('panel/img/school.png') }}" alt="school">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">&ThinSpace; {{ Auth::user()->school_name }} </h6>
                        <span>&ThinSpace; مدرسه </span>
                    </div>
                </div>
                <div class="navbar-nav w-100 menu pjaxmenu">
                    <br><a href="{{route("panel")}}" class="nav-item nav-link @yield('dashboard')"><i class="fa fa-tachometer-alt me-2"></i>داشبورد </a><br>
                    <a href="{{route("botsetting")}}" class="nav-item nav-link @yield('botsetting')"><i class="fa fa-laptop me-2"></i>تنظیمات ربات</a><br>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i> مشاهده آمار</a><br>
                    <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i> صورت حساب</a><br>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-plus me-2"></i> افزودن دانش آموز
                    </a><br>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0 height-sm shadow-sm">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    {{-- <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2> --}}
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4 p-3 col-lg-6">
                    <input class="form-control border-0" type="search" placeholder="جستوجو">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{ asset('panel/img/school.png') }}" alt=""
                                style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">{{ Auth::user()->school_name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">پروفایل</a>
                            <form action="{{ route('logout') }}" method="post">@csrf<button type="submit"
                                    class="dropdown-item">خروج</button></form>

                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            <div class="container" id="pjax-container">
                <br>
                <h1 class="text-center">@yield('title')</h1>
                @yield('content')



            </div>
            <!-- Content End -->
            <!-- Footer Start -->
            <div class="container-fuild pt-4 px-4">
                <div class="bg-light rounded-top p-4 shadow-sm">
                    <div class="row">
                        <div class="col-12 col-sm-12 text-center text-sm-start">
                            <p class="text-center font-weight-bold" id="copyright"> © همه حقوق مادی و معنوی برای گروه <a
                                    href="#" target="_blank">ناینس</a> می باشد </p>
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->

                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="{{asset("https://code.jquery.com/jquery-3.4.1.min.js")}}"></script>
    <script src="{{asset("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("lib/chart/chart.min.js")}}"></script>
    <script src="{{asset("lib/easing/easing.min.js")}}"></script>
    <script src="{{asset("lib/waypoints/waypoints.min.js")}}"></script>
    <script src="{{asset("lib/owlcarousel/owl.carousel.min.js")}}"></script>
    <script src="{{asset("lib/tempusdominus/js/moment.min.js")}}"></script>
    <script src="{{asset("lib/tempusdominus/js/moment-timezone.min.js")}}"></script>
    <script src="{{asset("lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js")}}"></script>
    
    <!-- Template Javascript -->
    <script src="{{asset("panel/js/main.js")}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.min.js" integrity="sha512-7G7ueVi8m7Ldo2APeWMCoGjs4EjXDhJ20DrPglDQqy8fnxsFQZeJNtuQlTT0xoBQJzWRFp4+ikyMdzDOcW36kQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('document').ready(function() {
            $(document).pjax('.pjaxmenu a', '#pjax-container', {
                timeout: 10000
            });
        $(document).on('pjax:send', function() {
            $('#pjax-container').css("filter","blur(10px)");
        });
        $(document).on('pjax:end', function() {
            $('#pjax-container').css("filter","blur(0px)");
        });

        $(".pjaxmenu a").click(function () {
            $(".pjaxmenu a").removeClass("active");
            $(this).addClass("active");
        });
    });
    </script>

</body>

</html>
