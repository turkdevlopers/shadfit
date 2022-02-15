@extends('panel.root')
@section('title')
داشبورد
@endsection
@section('content')

    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4 shadow-sm">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h5 class="mb-0">فاکتور پرداخت نشده</h5>
                <button type="button" class="btn btn-primary m-2">پرداخت <i class="fa fa-caret-left ms-2"></i></button>
            </div>
            <h6>11700تومان تعرفه یک ساله حرفه ای شادفیت</h6>
        </div>
    </div>
    <!-- Recent Sales End -->
        <!-- Recent Sales Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-light text-center rounded p-4 shadow-sm">
                <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="position-relative active-div shadow-sm">
                    <div class="rounded-circle border border-2 border-white position-absolute end-0 circle-active p-1 shadow-sm"></div>
                    <h6 style="margin-right: 15px">فعال</h6>
                </div>
                    <h6 class="mb-0">تاریخ پایان <span>1400/12/10</span></h6>
                </div>
                <div class="d-flex justify-content-around">
                    <h5>2800 تومان تعرفه سه ماهه حرفه ای شادفیت</h5>
                    <div class="d-block">
                <div class="circle-wrap shadow-sm">
                    <div class="circle">
                      <div class="mask full">
                        <div class="fill"></div>
                      </div>
                      <div class="mask half">
                        <div class="fill"></div>
                      </div>
                      <div class="inside-circle"><span>10</span><p>روز مانده</p></div>
                    </div>
                  </div>
                  <br>
                  <div class="all-Time">
                    <h5>روز باقیمانده</h5><p class="bold">زمان کل سرویس : 30 روز</p>
                </div>
            </div>
                </div>
            </div>
        </div>
        <!-- Recent Sales End -->
    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4 shadow-sm">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h5 class="mb-0">شما سرویس فعال ندارید <i class="bi bi-emoji-frown-fill"></i></h5>
                <button type="button" class="btn btn-primary m-2">خرید سرویس <i class="bi bi-emoji-sunglasses-fill"></i></button>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->
@endsection
