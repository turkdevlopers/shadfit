@extends('panel.root')
@section('title')
صورت حساب
@endsection
@section('invoice')
    active
@endsection
@section('content')

<div class="container-fluid pt-4 px-4">  
        <div class="d-flex align-items-center justify-content-between rounded-top shadow-sm p-4 text-white bg-primary" style="opacity: 0.75;">
                <h4 class="text-light mb-0">فاکتور نهایی شما</h4> 
                 <h6 class="text-light mb-0">شماره فاکتور &nbsp;&nbsp;<span>145122078854</span></h6>
        </div>
    <div class="bg-light text-center rounded-bottom p-4 shadow-sm">
        <form action=""> 
        <div class="d-flex justify-content-between col-lg-12">
            <div class="user col-lg-4">
                <div class="name d-flex"><h5>خریدار</h5>&nbsp;&nbsp;<span class="f-2">مدرسه علی بن ابیطالب</span></div><br>
                <div class="tariff d-flex"><h5>نوع تعرفه</h5>&nbsp;&nbsp;<span class="f-2">تعرفه سه ماهه عادی 1.600 تومان</span></div><br>
                <div class="num-student d-flex"><h5>تعداد دانش آموز</h5>&nbsp;&nbsp;<span class="f-2">200</span></div><br>
            </div>
            <div class="prices col-lg-4">
                <div class="name d-flex"><h5>مبلغ کل</h5>&nbsp;&nbsp;<span class="f-2">320.000 تومان</span></div><br>
                <div class="tariff d-flex"><h5>مالیات و ارزش افزوده</h5>&nbsp;&nbsp;<span class="f-2">3.000 تومان</span></div><br>
                <div class="num-student d-flex"><h5>مبلغ قابل پرداخت</h5>&nbsp;&nbsp;<span class="f-2">323.000 تومان</span></div><br>
            </div>
            <div class="discount col-lg-4">
                <div class="name d-flex align-items-center">
                    <img width="10%" src="{{ asset('panel/img/discount.svg') }}" alt="school">&nbsp;&nbsp;
                   <span class="f-2">کد تخفیف دارید ؟</span></div><br>
                <div class="tariff"><h5 class="text-end">استفاده از سرویس های خاص</h5><p class="f-2 text-end">(پین تخفیف، قرار داد های سازمانی،...)</p></div>
                    <div class="d-flex align-items-baseline col-lg-12">  
                    <input class="form-control" type="text" placeholder="کد تخفیف را وارد کنید" aria-label="default input example">
                     <button type="button" class="btn btn-sm btn-sm-square btn-primary m-2 col-lg-5"><i class="fa fa-check-circle h5 mb-0 text-white"></i></button>               
                    </div>
            </div>
             </div>
    <div class="d-flex justify-content-center pt-5 col-lg-12">
        <button type="button" class="btn btn-warning btn-lg m-2 p-3 col-lg-4"><h5 class="mb-0" style="opacity: 0.85;">تایید و پرداخت&nbsp;<i class="fa fa-chevron-circle-left" aria-hidden="true"></i></h5></button>
      </div>
    </form>
    </div>
</div>

<div class="container-fuild pt-4 px-4">
    <div class="d-inline-flex justify-content-around bg-light rounded p-4 shadow-sm scrolly-div col-lg-12">
        <div class="bg-white rounded p-4 col-lg-5">
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
                     <h6 class="mb-0 text-end ">145122078854</h6>
                     <small class="small-text">شماره فاکتور</small>
                </div>
                <div class="num-Factor text-center line-hight">
                    <i class="fa fa-history h4 text-primary"></i>
                    <h6 class="mb-0">1400/12/1</h6>
                    <small class="small-text">تاریخ ایجاد</small>
               </div>
               <div class="num-Factor text-center line-hight">
                <i class="fa fa-credit-card h4 text-primary"></i>
                <h6 class="mb-0">323.000 تومان</h6>
                <small class="small-text">مبلغ قابل پرداخت</small>
              </div>
        </div>
       </div>
       <div class="bg-white rounded p-4 col-lg-5">
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
                 <h6 class="mb-0 text-end ">145122078854</h6>
                 <small class="small-text">شماره فاکتور</small>
            </div>
            <div class="num-Factor text-center line-hight">
                <i class="fa fa-history h4 text-primary"></i>
                <h6 class="mb-0">1400/12/1</h6>
                <small class="small-text">تاریخ ایجاد</small>
           </div>
           <div class="num-Factor text-center line-hight">
            <i class="fa fa-credit-card h4 text-primary"></i>
            <h6 class="mb-0">323.000 تومان</h6>
            <small class="small-text">مبلغ قابل پرداخت</small>
          </div>
    </div>
   </div>
   
    </div>
</div>
@endsection