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
<x-bot-options-component packageId="{{$package->id}}"/>
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