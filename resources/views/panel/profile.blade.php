@extends('panel.root')
@section('title')
    پروفایل
@endsection
@section('content')
    <div class="container-fuild pt-4 px-4">
        <div class="bg-light rounded-top p-5 shadow-sm">
            <div class="bg-white p-4">
                <form action="" method="post" class="form-d" id="form">
                    <div class="container">
                        <div class="avatar-upload">
                            <div class="avatar-edit">

                                <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload" class="shadow-sm">
                                    <div class="icon-camera"><i class="fa fa-camera h4" aria-hidden="true"></i></div>
                                </label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview"
                                    style="background-image: url('{{ asset('panel/img/school-icon.png') }}');">
                                </div>
                            </div>
                        <small class="form__label">لوگوی مدرسه</small>
                        </div>
                    </div>

                    <div class="bg-light rounded-top p-4">
                        <div class="row">
                            <div class="col-12 col-sm-12 text-center text-sm-start">
                                <h3 class="text-center text-primary">ویرایش حساب</h3>

                                <div class="part1 p-5">
                                    <div class="d-flex justify-content-between col-lg-12 taraz">
                                        <div class="control-form form-group d-block col-lg-5 col-md-12 col-sm-10 col-7">
                                            <h5 class="d-flex edit-color">نام مدرسه: </h5>
                                            <input type="text" class="form-control shadow-sm border-0" id="schoolName"
                                                placeholder="نام مدرسه را وارد کنید" aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-sm" minlength="5">
                                            <small class="errortxt float-end mt-2"></small>
                                        </div>
                                        <div class="control-form form-group d-block col-lg-5 col-md-12 col-sm-10 col-7">
                                            <h5 class="d-flex edit-color">آدرس مدرسه: </h5>
                                            <input type="text" class="form-control shadow-sm border-0" id="address"
                                                placeholder="آدرس مدرسه را وارد کنید" aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-sm">
                                            <small class="errortxt float-end mt-2"></small>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="d-flex justify-content-between col-lg-12 taraz">
                                        <div class="control-form form-group d-block col-lg-5 col-md-6 col-sm-10 col-7">
                                            <h5 class="d-flex edit-color">شماره تلفن مدرسه: </h5>
                                            <input type="tel" class="form-control shadow-sm border-0" id="numSchool"
                                                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                                placeholder="شماره را وارد کنید"
                                                pattern="(0|\+98)?([ ]|-|[()]){0,2}9[1|2|3|4]([ ]|-|[()]){0,2}(?:[0-9]([ ]|-|[()]){0,2}){8}" />
                                            <small class="errortxt float-end mt-2"></small>
                                        </div>
                                        <div class="control-form form-group d-block col-lg-5 col-md-6 col-sm-10 col-7">
                                            <h5 class="d-flex edit-color">شماره تلفن مدیر مدرسه :</h5>
                                            <input type="tel" class="form-control shadow-sm border-0 " id="numPerson"
                                                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                                placeholder="شماره را وارد کنید"
                                                pattern="(0|\+98)?([ ]|-|[()]){0,2}9[1|2|3|4]([ ]|-|[()]){0,2}(?:[0-9]([ ]|-|[()]){0,2}){8}" />
                                            <small class="errortxt float-end mt-2"></small>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="d-flex justify-content-between col-lg-12 taraz">
                                        <div class="control-form form-group d-block col-lg-5 col-md-6 col-sm-10 col-7">
                                            <h5 class="d-flex edit-color">رمز عبور :</h5>
                                            <input type="password" class="form-control shadow-sm border-0" id="password"
                                                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                                placeholder="رمز عبور" min="0" />
                                            <small class="errortxt float-end mt-2"></small>
                                        </div>
                                        <div class="control-form form-block d-block col-lg-5 col-md-6 col-sm-10 col-7">
                                            <h5 class="d-flex edit-color">تکرار رمز عبور: </h5>
                                            <input type="password" class="form-control shadow-sm border-0" id="password2"
                                                placeholder="تکرار رمز عبور" aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-sm">
                                            <small class="errortxt float-end mt-2"></small>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <div class="text-center">
                                 <button class="btn btn-primary m-2 shadow-sm col-lg-2">ثبت تغییرات</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
