@extends('panel.root')
@section('title')
تنظیمات ربات
@endsection
@section('botsetting')
    active
@endsection
@section('content')
<div class="d-flex col-lg-12">
<div class="col-lg-2">
<div class="bg-light text-center rounded p-4 shadow-sm col-lg-12">
       <h5 class="mb-0">مشاهده کارنامه</h5>
</div>
<br>
<div class="bg-light text-center rounded p-4 shadow-sm col-lg-12">
    <h5 class="mb-0">سامانه همگام</h5>
</div>
<br>
<div class="bg-light text-center rounded p-4 shadow-sm col-lg-12">
    <h5 class="mb-0">سرویس آموزشی</h5>
</div>
<br>
<div class="bg-light text-center rounded p-4 shadow-sm col-lg-12">
    <h5 class="mb-0">شماره صندلی</h5>
</div>
<br>
<div class="bg-light text-center rounded p-4 shadow-sm col-lg-12 disabled-div">
    <h5 class="mb-0">پیش ثبت نام</h5>
</div>
<br>
<div class="bg-light text-center rounded p-4 shadow-sm col-lg-12">
    <h5 class="mb-0">رای گیری</h5>
</div>
<br>
<div class="bg-light text-center rounded p-4 shadow-sm col-lg-12">
    <h5 class="mb-0">برنامه هفتگی</h5>
</div>
<br>
<div class="bg-light text-center rounded p-4 shadow-sm col-lg-12">
    <h5 class="mb-0">نظرسنجی</h5>
</div>
<br>
</div>
<div class="container-fluid pt-4 px-4 col-lg-10">
    <div class="bg-light text-center rounded p-4 shadow-sm">
        <div class="bg-white shadow-sm text-center rounded p-4 mt-4">     
            <details>
                <summary class="sum">
                    <h4>مشاهده کارنامه</h4>
                </summary>
                <br>
                <form class="d-md-flex ms-4">
                    <input class="form-control mb-3 border-0 bg-light" type="text" placeholder="عنوان گزینه" aria-label="default input example">
                </form>
                <div class="d-flex">
                    <button type="button" class="btn btn-outline-link m-2 mt-4">راهنمای استفاده</button>
                </div>
              </details>


        </div>
        <div class="bg-white shadow-sm text-center rounded p-4 mt-4">     
            <details>
                <summary class="sum">
                    <h4>مشاهده کارنامه</h4>
                </summary>
                <br>
                <form class="d-md-flex ms-4">
                    <input class="form-control mb-3 border-0 bg-light" type="text" placeholder="عنوان گزینه" aria-label="default input example">
                </form>
                <div class="d-flex">
                    <button type="button" class="btn btn-outline-link m-2 mt-4">راهنمای استفاده</button>
                </div>
              </details>


        </div>
        <br>
    </div>
</div>
</div>

@endsection