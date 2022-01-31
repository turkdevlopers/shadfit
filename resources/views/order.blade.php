<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ثبت سفارش - شادفیت</title>
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
    <div class="page-section">
        <div class="container">
            <div class="text-center">
                <h2 class="title-section">ثبت سفارش</h2>
                <div class="divider mx-auto"></div>

                <div class="container">
                    <div class="page-banner bg-white b-radi a-height shadow-sm">
                        <div class="row p-5">
                            {{-- <hr class="hr-st shadow-sm"> --}}
                                <form class="form-d" id="form">
                                    <div class="flex-kon">
                                    {{-- part one --}}
                                    <div class="part1">
                                    <div class="form-inline col-lg-12 taraz">
                                        <div class="control-form form-group d-block col-lg-6">
                                            <h5 class="d-flex">نام مدرسه: </h5>
                                            <input type="text" class="form-control" id="schoolName" placeholder="نام مدرسه را وارد کنید" aria-label="Sizing example input"aria-describedby="inputGroup-sizing-sm"minlength="5">
                                            <small class="errortxt"></small>
                                        </div>
                                        <div class="control-form form-group d-block col-lg-6 ">
                                            <h5 class="d-flex">تعداد دانش آموز :</h5>
                                            <input type="number" class="form-control" id="numOff" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="تعداد"min="0" />
                                            <small class="errortxt"></small>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="control-form form-block d-block col-lg-12">
                                        <h5 class="d-flex">آدرس مدرسه: </h5>
                                        <input type="text" class="form-control" id="address" placeholder="آدرس مدرسه را وارد کنید" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                            <small class="errortxt"></small>
                                    </div>
                                    <br>
                                    <div class="form-inline col-lg-12 taraz">
                                        <div class="control-form form-group d-block col-lg-6">
                                            <h5 class="d-flex">شماره تلفن مدرسه: </h5>
                                            <input type="tel" class="form-control" id="numSchool" aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-sm" placeholder="شماره را وارد کنید"
                                            pattern="(0|\+98)?([ ]|-|[()]){0,2}9[1|2|3|4]([ ]|-|[()]){0,2}(?:[0-9]([ ]|-|[()]){0,2}){8}" />
                                            <small class="errortxt"></small>
                                        </div>
                                        <div class="control-form form-group d-block col-lg-6">
                                            <h5 class="d-flex">شماره تلفن مدیر مدرسه :</h5>
                                            <input type="tel" class="form-control" id="numPerson" aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-sm" placeholder="شماره را وارد کنید"
                                            pattern="(0|\+98)?([ ]|-|[()]){0,2}9[1|2|3|4]([ ]|-|[()]){0,2}(?:[0-9]([ ]|-|[()]){0,2}){8}" />
                                            <small class="errortxt"></small>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-inline col-lg-12 taraz">
                                        <div class="control-form form-group d-block col-lg-6">
                                            <h5 class="d-flex">نام کاربری: </h5>
                                            <input type="text" class="form-control" id="username"
                                                placeholder="نام کاربری را وارد کنید" aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-sm">
                                                <small class="errortxt"></small>
                                            </div>
                                        <div class="control-form form-group d-block col-lg-6">
                                            <h5 class="d-flex">رمز عبور :</h5>
                                            <input type="password" class="form-control" id="password"
                                                aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-sm" placeholder="رمز عبور"
                                                min="0" />
                                                <small class="errortxt"></small>
                                            </div>
                                        
                                    </div>
                                    <br>
                                    <div class="control-form form-block d-block col-lg-12">
                                        <h5 class="d-flex">تکرار رمز عبور: </h5>
                                        <input type="password" class="form-control" id="password2" placeholder="تکرار رمز عبور" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        <small class="errortxt"></small>
                                    </div>
                                    <br>
                                </div>
                                <br><br>
                                {{-- part two --}}
                                <div class="part2">
                                    <div class="d-block">
                                <h3 class="d-flex">بسته انتخابی</h3>
                                <br>
                                <select class="form-control" aria-label="Default select example">
                                    <option selected>تعرفه یک ماهه عادی 600 تومان</option>
                                    <option value="1">تعرفه یک ماهه معمولی 800 تومان</option>
                                    <option value="2">تعرفه یک ماهه حرفه ای 1000 تومان</option>
                                    <option value="3">تعرفه سه ماهه عادی 1600 تومان</option>
                                    <option value="4">تعرفه سه ماهه معمولی 2200 تومان</option>
                                    <option value="5">تعرفه سه ماهه حرفه ای 2800 تومان</option>
                                    <option value="6">تعرفه یک ساله عادی 6900 تومان</option>
                                    <option value="7">تعرفه یک ساله معمولی 9300 تومان</option>
                                    <option value="8">تعرفه یک ساله حرفه ای 11700 تومان</option>
                                  </select>

                                  </div>
                                  <br>
                                  <div class="form-group d-block col-lg-12">
                                    <h5 class="d-flex">مبلغ خالص: </h5>
                                    <h6>220000 تومان</h6>
                                </div>
                                <br>
                                <div class="form-group d-block col-lg-12">
                                    <h5 class="d-flex">ارزش افزوده: </h5>
                                    <h6>30000 تومان</h6>
                                </div>
                                <div class="form-group d-block col-lg-12 green-price">
                                    <h5 class="d-flex">مبلغ نهایی: </h5>
                                    <h6>225000 تومان</h6>
                                </div>
                                <br>
                                <button class="custom-btn btn-11">ثبت سفارش</button>

                            </div>
                        </div>
                        </form>
                        </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div> <!-- .container -->
    </div>
    <p class="text-center" id="copyright"> © همه حقوق مادی و معنوی برای گروه <a href="#" target="_blank">ناینس</a> می باشد </p>
    
    <script src="{{asset('assets/js/order.js')}}"></script>
</body>

</html>
