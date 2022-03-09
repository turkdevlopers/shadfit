@extends('panel.root')
@section('title')
افزودن دانش آموزان
@endsection
@section('add')
    active
@endsection
@section('content')
<form action="">
<div class="container-fuild pt-4 px-4">
    <div class="d-inline-flex justify-content-around flex-wrap bg-light rounded p-4 shadow-sm col-lg-12">
        {{-- hamgam --}}
         <div class="bg-white rounded shadow-sm p-4 col-lg-5 m-3">
                <button type="button" class="btn btn-square btn-primary position-absolute tags" gloss="راهنمای استفاده"><i class="fa fa-question"></i></button>
            <h4 class="text-center">سامانه همگام</h4>
            <div class="d-flex justify-content-center">
               <div class="d-flex justify-content-center bg-light rounded shadow-sm p-4 col-lg-7 m-3">   
                <img width="50%" src="{{ asset('panel/img/fileUpload.svg') }}" alt="fileUpload">
                </div>
           </div>
           <div class="d-flex justify-content-center m-3 align-items-center uploading">
            <input class="form-control" type="file" id="formFile">

        </div>
        <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-outline-link m-2 col-lg-7 fw-bold">جزئیات</button>
        </div>
            </div>
            {{-- pada --}}
            <div class="bg-white rounded shadow-sm p-4 col-lg-5 m-3">
                <button type="button" class="btn btn-square btn-primary position-absolute tags" gloss="راهنمای استفاده"><i class="fa fa-question"></i></button>
            <h4 class="text-center">پادا</h4>
            <div class="d-flex justify-content-center">
               <div class="d-flex justify-content-center bg-light rounded shadow-sm p-4 col-lg-7 m-3">   
                <img width="50%" src="{{ asset('panel/img/fileUpload.svg') }}" alt="fileUpload">
                </div>
           </div>
           <div class="d-flex justify-content-center m-3 align-items-center uploading">
            <input class="form-control" type="file" id="formFile">
           
        </div>
        <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-outline-link m-2 col-lg-7 fw-bold">جزئیات</button>
        </div>
            </div>
                        {{-- Seat number --}}
                        <div class="bg-white rounded shadow-sm p-4 col-lg-5 m-3">
                            <button type="button" class="btn btn-square btn-primary position-absolute tags" gloss="راهنمای استفاده"><i class="fa fa-question"></i></button>
                        <h4 class="text-center">شماره صندلی</h4>
                        <div class="d-flex justify-content-center">
                           <div class="d-flex justify-content-center bg-light rounded shadow-sm p-4 col-lg-7 m-3">   
                            <img width="50%" src="{{ asset('panel/img/fileUpload.svg') }}" alt="fileUpload">
                            </div>
                       </div>
                       <div class="d-flex justify-content-center m-3 align-items-center uploading">
                        <input class="form-control" type="file" id="formFile">
            
                    </div>
                    <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-outline-link m-2 col-lg-7 fw-bold">جزئیات</button>
                    </div>
                        </div>
                          {{-- education system--}}
                          <div class="bg-white rounded shadow-sm p-4 col-lg-5 m-3">
                            <button type="button" class="btn btn-square btn-primary position-absolute tags" gloss="راهنمای استفاده"><i class="fa fa-question"></i></button>
                        <h4 class="text-center">سیستم آموزشی</h4>
                        <div class="d-flex justify-content-center">
                           <div class="d-flex justify-content-center bg-light rounded shadow-sm p-4 col-lg-7 m-3">   
                            <img width="50%" src="{{ asset('panel/img/fileUpload.svg') }}" alt="fileUpload">
                            </div>
                       </div>
                       <div class="d-flex justify-content-center m-3 align-items-center uploading">
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-outline-link m-2 col-lg-7 fw-bold">جزئیات</button>
                    </div>
                        </div>
                        {{-- Weekly Schedule (part2) --}}
                        <div class="text-center bg-white rounded p-4 shadow-sm m-4 col-lg-11" id="class-div">
                            <div class="herder-div">
                            <h4 class="text-center">برنامه هفتگی</h4>
                            </div>
                            <div class="body-div scrolly-sm-div">
                            <div class="d-md-flex justify-content-between mt-4 col-lg-12">
                                 <div class="col-lg-5 col-md-6 new_chq">
                                      <input class="form-control mb-3 border-0 bg-light" type="text" placeholder="نام کلاس آموزشی" aria-label="default input example">
                                     </div>
                                     <div class="col-lg-5 col-md-6"> 
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                </div>
                                
                        </div>
                        <div class="fotter-div d-md-flex justify-content-between mt-4 col-lg-12">
                            <div class="add-remove">
                            <button type="button" add-placeholder="نام کلاس" class="btn btn-success m-2 border-delet add-class"> <i class="fa fa-plus ms-2"></i>افزودن کلاس</button> 
                            <button type="button" class="btn btn-danger m-2 border-delet remove-class"><i class="fa fa-minus ms-2"></i>حذف کلاس</button> 
                            </div>
                            <button type="button" class="btn btn-outline-link m-2 mt-4">راهنمای استفاده</button>
                        </div>
    </div>
    <div class="d-block text-center m-5 col-lg-12">
        <button type="button" class="btn btn-primary btn-lg m-2 col-lg-4">ثبت تغییرات</button>
    </div>
</div>
</form>
@endsection