<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه ورود - شادفیت</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/vazir-font/30.1.0/font-face.min.css"
        integrity="sha512-FOp1/1tT19/xw6wkob5zvDLQUPFTgmYy6fXIKpo/nvZyMiyhe72YNhgSRlrE/FLS8OgYFONMGvqazSVLbO2/6Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/css/maicons.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/order.css') }}">
</head>
<body class="bg-light">
    <section class="vh-100">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black shadow-sm b-radi border-0">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">ورود</p>
      
                      <form action="{{route("login")}}" method="POST" class="mx-1 mx-md-4" id="form">
                        @csrf
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <h5 class="d-flex">نام کاربری: </h5>
                            <input type="text" name="username" class="form-control" id="username"
                                placeholder="نام کاربری را وارد کنید" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm">
                                <small class="errortxt">
                                  @error('username')
                                      {{$message}}
                                  @enderror
                                </small>
                          </div>
                        </div>
      
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <h5 class="d-flex">رمز عبور :</h5>
                            <input type="password" name="password" class="form-control" id="password"
                                aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm" placeholder="رمز عبور"
                                min="0" />
                                <small class="errortxt">
                                  @error('password')
                                  {{$message}}
                              @enderror
                                </small>
                          </div>
                        </div>

      
                        {{-- <div class="form-check mb-5">
                            <label class="form-check-label" for="form2Example3">
                             <a href="#!">شرایط و قوانین</a>  شادفیت را می پذیرم ! 
                              </label>
                          <input class="form-check-input" type="checkbox"value=""id="form2Example3c"/>
                        </div> --}}
      
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button type="submit" class="btn btn-primary btn-lg btn-block">ورود</button>
                        </div>
                        
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <span>
                            حساب ندارید ؟
                            <a href="{{route("register")}}">ثبت نام</a>
                            کنید
                          </span>
                        </div>
                      </form>
      
                    </div>
                    <div class="col-md-9 col-lg-6 col-xl-6 col-sm-10 col-10 d-flex align-items-center order-1 order-lg-2">    

                      <img src="assets/img/login&register/login.png" alt="" class="img-fluid">
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <p class="text-center font-weight-bold" id="copyright"> © همه حقوق مادی و معنوی برای گروه <a href="#" target="_blank">ناینس</a> می باشد </p>
        <br>
    </section>
    <script src="{{asset('assets/js/login.js')}}"></script>

</body>
</html>