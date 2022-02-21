@extends('panel.root')
@section('title')
تنظیمات ربات
@endsection
@section('botsetting')
    active
@endsection
@section('content')
<div class="d-flex col-lg-12">
<div class="col-lg-2 tu user-select-none" id="bars">
<div option_id="1"  option_name="مشاهده کارنامه" class="bg-light text-center rounded p-4 shadow-sm col-lg-12 mb-2 opt">
       <h5 class="mb-0">مشاهده کارنامه</h5>
</div>

<div option_id="2"  option_name="سامانه همگام" class="bg-light text-center rounded p-4 shadow-sm col-lg-12 mb-2 opt">
    <h5 class="mb-0">سامانه همگام</h5>
</div>

<div option_id="3"  option_name="سرویس آموزشی" class="bg-light text-center rounded p-4 shadow-sm col-lg-12 mb-2 opt">
    <h5 class="mb-0">سرویس آموزشی</h5>
</div>

<div option_id="4"  option_name="شماره صندلی" class="bg-light text-center rounded p-4 shadow-sm col-lg-12 mb-2 opt">
    <h5 class="mb-0">شماره صندلی</h5>
</div>

<div option_id=""  option_name="پیش ثبت نام" class="bg-light text-center rounded p-4 shadow-sm col-lg-12 mb-2 disabled-div opt">
    <h5 class="mb-0">پیش ثبت نام</h5>
</div>
<div option_id="5"  option_name="برنامه هفتگی" class="bg-light text-center rounded p-4 shadow-sm col-lg-12 mb-2 opt">
    <h5 class="mb-0">برنامه هفتگی</h5>
</div>

<div  option_id="6"  option_name="رای گیری"class="bg-light text-center rounded p-4 shadow-sm col-lg-12 mb-2 opt">
    <h5 class="mb-0">رای گیری</h5>
</div>



<div option_id="7"  option_name="نظرسنجی" class="bg-light text-center rounded p-4 shadow-sm col-lg-12 mb-2 opt">
    <h5 class="mb-0">نظرسنجی</h5>
</div>

</div>
<div class="container-fluid pt-4 px-4 col-lg-10">
    <div class="bg-light text-center rounded p-4 shadow-sm" id="items">
        {{-- <div class="bg-white shadow-sm text-center rounded p-4 mt-4">     
            <details>
                <summary class="sum">
                    <h4>نظرسنجی</h4>
                </summary>
                <br>
                <form class="d-md-flex ms-4">
                    <input class="form-control mb-3 border-0 bg-light" type="text" placeholder="عنوان گزینه" aria-label="default input example">
                </form>
                <div class="d-flex">
                    <button type="button" class="btn btn-outline-link m-2 mt-4">راهنمای استفاده</button>
                </div>
              </details>


        </div> --}}

    </div>
</div>
</div>

<script>

</script>

@endsection