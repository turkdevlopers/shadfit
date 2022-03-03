<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul style="text-align: right;">
                                    @foreach ($errors->all() as $error)
                                        <li>
                                            {{ $error }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if ($message = session()->get('message'))
                            <div class="alert alert-danger" role="alert" style="text-align: right;">
                                <strong>خطا </strong>{{ $message }}
                            </div>
                        @endif
                            {{-- <hr class="hr-st shadow-sm"> --}}
                            <form action="{{route('orderstore')}}" method="POST" class="form-d" id="form">
                                @csrf
                                <div class="flex-kon">
                                    {{-- part one --}}
                                    {{-- when user loged in --}}
                                    @auth
                                    <div class="part1">
                                        <div class="form-inline col-lg-12 taraz">
                                            <div
                                                class="control-form form-group d-block col-lg-6 col-md-6 col-sm-10 col-7">
                                                <h5 class="d-flex">نام مدرسه: </h5>
                                                <input type="text" class="form-control" id="schoolName" name="school_name"
                                                    value="{{ Auth::user()->school_name }}"
                                                    placeholder="نام مدرسه را وارد کنید"
                                                    aria-label="Sizing example input"
                                                    aria-describedby="inputGroup-sizing-sm" minlength="5">
                                                <small class="errortxt"></small>
                                            </div>
                                            <div
                                                class="control-form form-group d-block col-lg-6 col-md-6 col-sm-10 col-7">
                                                <h5 class="d-flex">تعداد دانش آموز :</h5>
                                                <input type="number" class="form-control" id="numOff" name="students_number"
                                                    aria-label="Sizing example input" value="{{old("students_number")}}"
                                                    aria-describedby="inputGroup-sizing-sm" placeholder="تعداد"
                                                    min="0" />
                                                <small class="errortxt"></small>
                                            </div>
                                        </div>
                                        <br>
                                        <div
                                            class="control-form form-block d-block col-lg-12 col-md-12 col-sm-10 col-7">
                                            <h5 class="d-flex">آدرس مدرسه: </h5>
                                            <input type="text" class="form-control" id="address" name="address"
                                                value="{{ Auth::user()->address }}"
                                                placeholder="آدرس مدرسه را وارد کنید" aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-sm">
                                            <small class="errortxt"></small>
                                        </div>
                                        <br>
                                        <div class="form-inline col-lg-12 taraz">
                                            <div
                                                class="control-form form-group d-block col-lg-6 col-md-6 col-sm-10 col-7">
                                                <h5 class="d-flex">شماره تلفن مدرسه: </h5>
                                                <input type="tel" class="form-control" id="numSchool" name="phone"
                                                    value="{{ Auth::user()->phone }}"
                                                    aria-label="Sizing example input"
                                                    aria-describedby="inputGroup-sizing-sm"
                                                    placeholder="شماره را وارد کنید"
                                                    pattern="(0|\+98)?([ ]|-|[()]){0,2}9[1|2|3|4]([ ]|-|[()]){0,2}(?:[0-9]([ ]|-|[()]){0,2}){8}" />
                                                <small class="errortxt"></small>
                                            </div>
                                            <div
                                                class="control-form form-group d-block col-lg-6 col-md-6 col-sm-10 col-7">
                                                <h5 class="d-flex">شماره تلفن مدیر مدرسه :</h5>
                                                <input type="tel" class="form-control"
                                                    value="{{ Auth::user()->mobile }}" id="numPerson" name="mobile"
                                                    aria-label="Sizing example input"
                                                    aria-describedby="inputGroup-sizing-sm"
                                                    placeholder="شماره را وارد کنید"
                                                    pattern="(0|\+98)?([ ]|-|[()]){0,2}9[1|2|3|4]([ ]|-|[()]){0,2}(?:[0-9]([ ]|-|[()]){0,2}){8}" />
                                                <small class="errortxt"></small>
                                            </div>
                                        </div>
                                        <br>
                                            <script>
                                                var Islogin = true;
                                            </script>
                                        <br>
                                    </div>
                                    @endauth
                                    {{-- when user loged out --}}
                                    @guest
                                    <div class="part1">
                                        <div class="form-inline col-lg-12 taraz">
                                            <div
                                                class="control-form form-group d-block col-lg-6 col-md-6 col-sm-10 col-7">
                                                <h5 class="d-flex">نام مدرسه: </h5>
                                                <input type="text" class="form-control" id="schoolName" name="school_name"
                                                value="{{old("school_name")}}"
                                                    placeholder="نام مدرسه را وارد کنید"
                                                    aria-label="Sizing example input"
                                                    aria-describedby="inputGroup-sizing-sm" minlength="5">
                                                <small class="errortxt"></small>
                                            </div>
                                            <div
                                                class="control-form form-group d-block col-lg-6 col-md-6 col-sm-10 col-7">
                                                <h5 class="d-flex">تعداد دانش آموز :</h5>
                                                <input type="number" class="form-control" id="numOff" name="students_number"
                                                value="{{old("students_number")}}"
                                                    aria-label="Sizing example input"
                                                    aria-describedby="inputGroup-sizing-sm" placeholder="تعداد"
                                                    min="0" />
                                                <small class="errortxt"></small>
                                            </div>
                                        </div>
                                        <br>
                                        <div
                                            class="control-form form-block d-block col-lg-12 col-md-12 col-sm-10 col-7">
                                            <h5 class="d-flex">آدرس مدرسه: </h5>
                                            <input type="text" class="form-control" id="address" name="address"
                                            value="{{old("address")}}"
                                                placeholder="آدرس مدرسه را وارد کنید" aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-sm">
                                            <small class="errortxt"></small>
                                        </div>
                                        <br>
                                        <div class="form-inline col-lg-12 taraz">
                                            <div
                                                class="control-form form-group d-block col-lg-6 col-md-6 col-sm-10 col-7">
                                                <h5 class="d-flex">شماره تلفن مدرسه: </h5>
                                                <input type="tel" class="form-control" id="numSchool" name="phone"
                                                value="{{old("phone")}}"
                                                    aria-label="Sizing example input"
                                                    aria-describedby="inputGroup-sizing-sm"
                                                    placeholder="شماره را وارد کنید"
                                                    pattern="(0|\+98)?([ ]|-|[()]){0,2}9[1|2|3|4]([ ]|-|[()]){0,2}(?:[0-9]([ ]|-|[()]){0,2}){8}" />
                                                <small class="errortxt"></small>
                                            </div>
                                            <div
                                                class="control-form form-group d-block col-lg-6 col-md-6 col-sm-10 col-7">
                                                <h5 class="d-flex">شماره تلفن مدیر مدرسه :</h5>
                                                <input type="tel" class="form-control" id="numPerson" name="mobile"
                                                value="{{old("mobile")}}"
                                                    aria-label="Sizing example input"
                                                    aria-describedby="inputGroup-sizing-sm"
                                                    placeholder="شماره را وارد کنید"
                                                    pattern="(0|\+98)?([ ]|-|[()]){0,2}9[1|2|3|4]([ ]|-|[()]){0,2}(?:[0-9]([ ]|-|[()]){0,2}){8}" />
                                                <small class="errortxt"></small>
                                            </div>
                                        </div>
                                        <br>
                                            <div class="form-inline col-lg-12 taraz">
                                                <div
                                                    class="control-form form-group d-block col-lg-6 col-md-6 col-sm-10 col-7">
                                                    <h5 class="d-flex">نام کاربری: </h5>
                                                    <input type="text" class="form-control" id="username" name="username"
                                                        placeholder="نام کاربری را وارد کنید"
                                                        aria-label="Sizing example input"
                                                        aria-describedby="inputGroup-sizing-sm">
                                                    <small class="errortxt"></small>
                                                </div>
                                                <div
                                                    class="control-form form-group d-block col-lg-6 col-md-6 col-sm-10 col-7">
                                                    <h5 class="d-flex">رمز عبور :</h5>
                                                    <input type="password" class="form-control" id="password" name="password"
                                                        aria-label="Sizing example input"
                                                        aria-describedby="inputGroup-sizing-sm" placeholder="رمز عبور"
                                                        min="0" />
                                                    <small class="errortxt"></small>
                                                </div>

                                            </div>
                                            <br>
                                            <div
                                                class="control-form form-block d-block col-lg-12 col-md-12 col-sm-10 col-7">
                                                <h5 class="d-flex">تکرار رمز عبور: </h5>
                                                <input type="password" class="form-control" id="password2" name="password_confirmation"
                                                    placeholder="تکرار رمز عبور" aria-label="Sizing example input"
                                                    aria-describedby="inputGroup-sizing-sm">
                                                <small class="errortxt"></small>
                                            </div>
                                        <br>
                                        <script>
                                            var Islogin = false;
                                        </script>
                                    </div>
                                    <br><br>
                                    @endguest
                                    {{-- part two --}}
                                    <div class="part2">
                                        <div class="d-block">
                                            <h3 class="d-flex">بسته انتخابی</h3>
                                            <br>
                                            <select class="form-control" id="plans" name="service"
                                                aria-label="Default select example">
                                                <x-order-options-component selected="{{$selected}}" />
                                            </select>

                                        </div>
                                        <br>
                                        <div class="form-group d-block">
                                            <h5 class="d-flex">مبلغ خالص: </h5>
                                            <h6><span id="first-price">0</span> تومان</h6>
                                        </div>
                                        <br>
                                        <div class="form-group d-block">
                                            <h5 class="d-flex">ارزش افزوده: </h5>
                                            <h6><span id="add-price">3,000</span> تومان</h6>
                                        </div>
                                        <div class="form-group d-block green-price">
                                            <h5 class="d-flex">مبلغ نهایی: </h5>
                                            <h6><span id="last-price">0</span> تومان</h6>
                                        </div>
                                        <br>
                                        <div class="col-xl-6 col-md-12 col-sm-12 sub-div"><button type="submit" class="custom-btn btn-11">ثبت سفارش</button></div>

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
    <p class="text-center font-weight-bold" id="copyright"> © همه حقوق مادی و معنوی برای گروه <a href="#"
            target="_blank">ناینس</a> می باشد </p>

    <script src="{{ asset('assets/js/order.js') }}"></script>
    <script>
        var UserCheckApiUrl = "{{ $UserCheckApi }}";
    </script>
</body>

</html>
