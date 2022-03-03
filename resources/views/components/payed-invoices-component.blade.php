@php
    $IsAnyPayed = false;
@endphp
<div>
    <div class="d-inline-flex justify-content-around flex-wrap bg-light rounded p-4 shadow-sm scrolly-div col-lg-12">
        @foreach ($payments as $payment)
            @if ($payment->satuse)
            @php $IsAnyPayed = true; @endphp
            <div class="bg-white rounded p-4 col-lg-5 m-3">
                <div class="head d-flex justify-content-between align-items-center">
                    <img width="10%" src="{{ asset('panel/img/planning.svg') }}" alt="school">
                    <h5>تمدید تعرفه</h5>
                    <div class="active-div shadow-sm bg-primary text-center" style="width: 150px !important">
                        <p class="text-white fw-bold" style="font-size: 20px;">پرداخت شده</p>
                    </div>
                </div>
                <br><br>
                <div class="fotter d-flex justify-content-around">
                    <div class="num-Factor text-center line-hight">
                        <i class="fa fa-list-ol h4 text-primary"></i>
                        <h6 class="mb-0 text-center ">{{ $payment->id }}</h6>
                        <small class="small-text">شماره فاکتور</small>
                    </div>
                    <div class="num-Factor text-center line-hight">
                        <i class="fa fa-history h4 text-primary"></i>
                        <h6 class="mb-0">{{ jdate($payment->payed->created_at)->format('Y/m/d') }}</h6>
                        <small class="small-text">تاریخ ایجاد</small>
                    </div>
                    <div class="num-Factor text-center line-hight">
                        <i class="fa fa-credit-card h4 text-primary"></i>
                        <h6 class="mb-0">{{ $payment->order_price }} تومان</h6>
                        <small class="small-text">مبلغ قابل پرداخت</small>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
        @if (!$IsAnyPayed)
            هیچ فاکتور پرداخت شده ای یافت نشد
        @endif
    </div>
</div>
