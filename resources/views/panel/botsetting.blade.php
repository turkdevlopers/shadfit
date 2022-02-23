@extends('panel.root')
@section('title')
تنظیمات ربات
@endsection
@section('botsetting')
    active
@endsection
@section('content')
<div class="bot-setting">
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
    <div class="bg-light text-center rounded p-4 shadow-sm scrolly-div" id="items">
        {{-- <div class="bg-white shadow-sm text-center rounded p-4 mt-4">     
            <details>
                <summary class="sum">
                    <h4>مشاهده کارنامه</h4>
                </summary>
                <br>
                <form class="d-md-flex ms-4">
                    <input class="form-control mb-3 border-0 bg-light" type="text" placeholder="عنوان گزینه" aria-label="default input example">
                </form>
                <div class="d-flex justify-content-between align-items-center">
                    <button type="button" class="btn btn-danger m-2">حذف این بخش</button>
                    <button type="button" class="btn btn-outline-link m-2 mt-4">راهنمای استفاده</button>
                </div>
              </details>

        </div> --}}
{{-- 
        <div class="bg-white shadow-sm text-center rounded p-4 mt-4">     
            <details>
                <summary class="sum">
                    <h4>نظرسنجی</h4>
                </summary>
                <br>
                <form class="ms-4">
                    <input class="form-control mb-3 border-0 bg-light" type="text" placeholder="عنوان گزینه" aria-label="default input example">
                    <div class="d-md-flex col-lg-12">
                        <div class="col-lg-8 col-md-6">
                            <input class="form-control mb-3 border-0 bg-light" type="text" placeholder="مورد گزینه" aria-label="default input example">
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <button type="button"  class="btn btn-outline-success  m-2 border-delet add-btn">افزودن مورد <i class="fa fa-plus ms-2"></i></button>
                            <button type="button" class="btn btn-outline-danger m-2 border-delet remove-btn">حذف مورد <i class="fa fa-minus ms-2"></i></button>
                        </div>
                    </div>
                </form>
                <div class="d-flex justify-content-between align-items-center">
                    <button type="button" class="btn btn-danger m-2">حذف این بخش</button>
                    <button type="button" class="btn btn-outline-link m-2 mt-4">راهنمای استفاده</button>
                </div>
              </details>

        </div> --}}

    </div>
</div>

</div>
<br>
<div class="d-block text-center">
    <button type="button" class="btn btn-primary btn-lg m-2 col-lg-2">ثبت تغییرات</button>
</div>
<br><br>
</div>
<script>

</script>

@endsection