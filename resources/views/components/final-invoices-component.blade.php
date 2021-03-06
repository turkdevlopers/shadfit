@if ($invoice)
@php
    $serviceType = $invoice->package->type;
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
@endphp

    <div class="d-flex align-items-center justify-content-between rounded-top shadow-sm p-4 text-white bg-primary"style="opacity: 0.75;">

        <h4 class="text-light mb-0">فاکتور نهایی شما</h4>
        <h6 class="text-light mb-0">شماره فاکتور &nbsp;&nbsp;<span>{{$invoice->id}}</span></h6>
        <div class="dropdown">
            <a class="btn btn-warning dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
               بیشتر
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" target="_blank" href="{{route('invoicePrint',$invoice->id)}}"><i class="fa fa-print"></i> چاپ</a></li>
              <li><a class="dropdown-item" href="{{route('invoicePdf',$invoice->id)}}"><i class="fa fa-download"></i> دانلود صورت حساب</a></li>
              <li><a class="dropdown-item bg-danger text-white" href="{{route('invoiceDelete')}}"><i class="fa fa-trash"></i> حذف صورت حساب</a></li>
            </ul>
          </div>
    </div>
    <div class="bg-light text-center rounded-bottom p-4 shadow-sm">
        <form action="" method="POST">
            @csrf
            <input type="hidden" value="sadad" name="mode">
            <div class="d-flex justify-content-between col-lg-12">
                <div class="user col-lg-4">
                    <div class="name d-flex">
                        <h5>خریدار</h5>&nbsp;&nbsp;<span class="f-2">{{$user->school_name}}</span>
                    </div><br>
                    <div class="tariff d-flex">
                        <h5>نوع تعرفه</h5>&nbsp;&nbsp;<span class="f-2">تعرفه {{$invoice->package->plan->period}} روزه {{$serviceType}} {{$invoice->package->price}} تومان</span>
                    </div><br>
                    <div class="num-student d-flex">
                        <h5>تعداد دانش آموز</h5>&nbsp;&nbsp;<span class="f-2">{{$invoice->students_number}}</span>
                    </div><br>
                </div>
                <div class="prices col-lg-4">
                    <div class="name d-flex">
                        <h5>مبلغ کل</h5>&nbsp;&nbsp;<span class="f-2">{{number_format($invoice->order_price, 0, '','،')}} تومان</span>
                    </div><br>
                    <div class="tariff d-flex">
                        <h5>مالیات و ارزش افزوده</h5>&nbsp;&nbsp;<span class="f-2">3.000 تومان</span>
                    </div><br>
                    <div class="num-student d-flex">
                        <h5>مبلغ قابل پرداخت</h5>&nbsp;&nbsp;<span id="final-price" class="f-2">{{number_format($invoice->order_price + 3000, 0, '','،')}} تومان</span>
                    </div><br>
                </div>
                <div class="discount col-lg-4">
                    <div class="name d-flex align-items-center">
                        <img width="10%" src="{{ asset('panel/img/discount.svg') }}" alt="school">&nbsp;&nbsp;
                        <span class="f-2">کد تخفیف دارید ؟</span>
                    </div><br>
                    <div class="tariff">
                        <h5 class="text-end">استفاده از سرویس های خاص</h5>
                        <p class="f-2 text-end">(پین تخفیف، قرار داد های سازمانی،...)</p>
                    </div>
                    <div class="d-flex align-items-baseline col-lg-12">
                        <input id="off-input" class="form-control" type="text" name="off" placeholder="کد تخفیف را وارد کنید"
                            aria-label="default input example">
                        <button id="off-button" type="button" class="btn btn-sm btn-sm-square btn-primary m-2 col-lg-5"><i
                                class="fa fa-check-circle h5 mb-0 text-white"></i></button>
                    </div>
                    <span id="offresult"></span>
                </div>
            </div>
            <div class="d-flex justify-content-center pt-5 col-lg-12">
                <button type="submit" class="btn btn-warning btn-lg m-2 p-3 col-lg-4">
                    <h5 class="mb-0" style="opacity: 0.85;">تایید و پرداخت&nbsp;<i
                            class="fa fa-chevron-circle-left" aria-hidden="true"></i></h5>
                </button>
            </div>
        </form>
    </div>
    <script>
        var weburl = "{{route('service.shadfit')}}" ;
        var userId = "{{$user->id}}";
    </script>
@else
    <div class="text-center bg-light rounded p-4 shadow-sm scrolly-div col-lg-12">
        شما هیچ سرویس  جدیدی انتخاب نکردید. 
        <a href="{{route('plans')}}">سرویس ها</a>
    </div>
@endif
