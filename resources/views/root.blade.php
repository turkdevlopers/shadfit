<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>گروه ناینس - @yield('title') </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/vazir-font/30.1.0/font-face.min.css" integrity="sha512-FOp1/1tT19/xw6wkob5zvDLQUPFTgmYy6fXIKpo/nvZyMiyhe72YNhgSRlrE/FLS8OgYFONMGvqazSVLbO2/6Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">

  <link rel="stylesheet" href="{{asset('assets/css/maicons.css')}}">

  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">

  <link rel="stylesheet" href="{{asset('assets/vendor/animate/animate.css')}}">

  <link rel="stylesheet" href="{{asset('assets/css/theme.css')}}">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>
  
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="300">
      <div class="container">
        <div class="row">
        <img class="rounded-circle" src="{{ asset('assets/img/Emams.png') }}" width="70%">
      </div>
        <img class="rounded-circle" src="{{ asset('assets/img/shadfit.png') }}" alt="school" width="9%">
        <a href="#" class="navbar-brand"><h4 class="font-weight-bold">شاد<span class="text-primary"> فیت </span></h4></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapsed" id="navbarContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{route('service.shadfit')}}">خانه</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="">تست شادفیت</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">درباره ما</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-primary text-white" href="{{route("panel")}}">حساب کاربری</a>
            </li>
          </ul>
        </div>

      </div>
    </nav>

    <div class="container">
      <div class="page-banner shadow-sm">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-md-6">
            <nav aria-label="Breadcrumb">
              <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                <li class="breadcrumb-item"><a href="index.html">خانه</a></li>
                <li class="breadcrumb-item active">@yield('title')</li>
              </ul>
            </nav>
            <h1 class="text-center">@yield('description')</h1>
          </div>
        </div>
      </div>
    </div>
  </header>

  @yield('content')
  <!---start GOFTINO code--->
<script type="text/javascript">
  !function(){var i="CUjXqV",a=window,d=document;function g(){var g=d.createElement("script"),s="https://www.goftino.com/widget/"+i,l=localStorage.getItem("goftino_"+i);g.async=!0,g.src=l?s+"?o="+l:s;d.getElementsByTagName("head")[0].appendChild(g);}"complete"===d.readyState?g():a.attachEvent?a.attachEvent("onload",g):a.addEventListener("load",g,!1);}();
</script>
<!---end GOFTINO code--->
  <footer class="page-footer bg-image" style="background-image: url(assets/img/world_pattern.svg);">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-3 py-3">
          <h3>ناینس</h3>
          <p>یک گروه فعال و متمایز و متشکل از کارمندان و متخصصان برای پیشرفت ایران عزیز</p>

          <div class="social-media-button">
            <a href="#"><span class="mai-logo-facebook-f"></span></a>
            <a href="#"><span class="mai-logo-twitter"></span></a>
            <a href="#"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#"><span class="mai-logo-instagram"></span></a>
            <a href="#"><span class="mai-logo-youtube"></span></a>
          </div>
        </div>
        <div class="col-lg-3 py-3">
          <h5>شرکت</h5>
          <ul class="footer-menu">
            <li><a href="#">درباره ما</a></li>
            <li><a href="#">ارتباط با ما</a></li>
            <li><a href="#">فرصت های شغلی در ناینس</a></li>
            <li><a href="#">سرویس ها</a></li>
            <li><a href="#">پشتیبانی</a></li>
          </ul>
        </div>
        <div class="col-lg-3 py-3">
          <h5>ارتباط با ما</h5>
          <p>آدرس: ما در همه جا هستیم</p>
          <a href="#" class="footer-link">+00 1122 3344 5566</a><br>
          <a href="#" class="footer-link">info@nines.ir</a>
        </div>
        <div class="col-lg-3 py-3">
          <h5>اخبار جدید</h5>
          <p>شماره تلفن خود را وارد کنید تا از اخبار های جدید ناینس مطلع شوید</p>
          <form action="#">
            <input type="text" class="form-control" placeholder="شماره تلفن">
            <button type="submit" class="btn btn-success btn-block mt-2">ثبت</button>
          </form>
        </div>
      </div>

      <p class="text-center font-weight-bold" id="copyright"> &copy; همه حقوق مادی و معنوی برای گروه <a href="#" target="_blank">ناینس</a> می باشد </p>
    </div>
  </footer>

<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>

<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets/js/google-maps.js')}}"></script>

<script src="{{asset('assets/vendor/wow/wow.min.js')}}"></script>

<script src="{{asset('assets/js/theme.js')}}"></script>

</body>
</html>