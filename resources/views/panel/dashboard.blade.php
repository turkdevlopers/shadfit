@php
if ($service) {
    $endTime = $service->payed->activeservice->end;
    $serviceType = $service->package->type;

    $futur = strtotime($endTime); //Future date.
    $timefromdb = strtotime('today');
    $timeleft = $futur-$timefromdb;
    $daysleft = round((($timeleft/24)/60)/60);

    $period = $service->package->plan->period;
    $chartDegree = (( $daysleft* 360 ) / $period) / 2 ;

    switch ($serviceType) {
    case "simple":
    $serviceType = 'عادی';
        break;
    case "normal":
    $serviceType = 'معمولی';
        break;
    case "professional":
    $serviceType = 'حرفه ای';
        break;
    }
}
@endphp
@extends('panel.root')
@section('title')
    داشبورد
@endsection
@section('dashboard')
    active
@endsection
@section('content')
@if ($service)
    @if ($service->satuse == 0)
        <!-- Recent Sales Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-light text-center rounded p-4 shadow-sm">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h5 class="mb-0">فاکتور پرداخت نشده</h5>
                    <button type="button" class="btn btn-primary m-2">پرداخت <i class="fa fa-caret-left ms-2"></i></button>
                </div>
                <h6>{{number_format($service->order_price, 0, '','،')}} تومان از {{$service->package->plan->name}} {{$serviceType}} شادفیت</h6>
            </div>
        </div>
        <!-- Recent Sales End -->
    @else
        <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4 shadow-sm">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="position-relative active-div shadow-sm">
                    <div
                        class="rounded-circle border border-2 border-white position-absolute end-0 circle-active p-1 shadow-sm">
                    </div>
                    <h6 style="margin-right: 15px">فعال</h6>
                </div>
                <h6 class="mb-0">تاریخ پایان <span>{{jdate($endTime)->format('Y/m/d')}}</span></h6>
            </div>
            <div class="d-flex justify-content-around">
                <div>
                    <h5>{{$service->package->price}} تومان از {{$service->package->plan->name}} {{$serviceType}} شادفیت</h5>
                <img src="{{asset("panel/img/cloud.png")}}" alt="cloud" style="width: 161px;margin-top: 27px;">
                </div>
                <style>
                    .mask.full, .circle .fill {
                        transform: rotate({{$chartDegree}}deg) !important;
                    }
                    @keyframes fill{
                        0% {
                            transform: rotate(0deg);
                        }
                        100% {
                            transform: rotate({{$chartDegree}}deg);
                        }
                    }
                </style>
                <div class="d-block">
                    <div class="circle-wrap shadow-sm">
                        <div class="circle">
                            <div class="mask full">
                                <div class="fill"></div>
                            </div>
                            <div class="mask half">
                                <div class="fill"></div>
                            </div>
                            <div class="inside-circle"><span>{{$daysleft}}</span>
                                <p>روز مانده</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="all-Time">
                        <h5>روز باقیمانده</h5>
                        <p class="bold">زمان کل سرویس : {{$period}} روز</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->
    @endif

@else
        <!-- Recent Sales Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-light text-center rounded p-4 shadow-sm">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h5 class="mb-0">شما سرویس فعال ندارید <i class="bi bi-emoji-frown-fill"></i></h5>
                    <a href="{{route('plans')}}" type="button" class="btn btn-primary m-2">خرید سرویس <i
                            class="bi bi-emoji-sunglasses-fill"></i></a>
                </div>
            </div>
        </div>
        <!-- Recent Sales End -->
@endif
@endsection
