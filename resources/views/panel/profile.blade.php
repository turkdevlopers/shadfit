@extends('panel.root')
@section('title')
    پروفایل
@endsection
@section('content')
<div class="container-fuild pt-4 px-4">
    <div class="bg-light rounded-top p-5 shadow-sm">
        <div class="bg-white p-4 shadow-sm">
            <form action="" method="post">
            <div class="container">
                <div class="avatar-upload">
                    <div class="avatar-edit">

                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload"><div class="icon-camera"><i class="fa fa-camera h4" aria-hidden="true"></i></div></label>
                    </div>
                    <div class="avatar-preview">
                        <div id="imagePreview" style="background-image: url('{{ asset('panel/img/school2.jpeg') }}');">
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="bg-light rounded-top p-4 shadow-sm">
            <div class="row">
                <div class="col-12 col-sm-12 text-center text-sm-start">
                    
                </div>
                <div class="col-12 col-sm-6 text-center text-sm-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->

                </div>
            </div>
        </div>

        </div>
    </div>
</div>
@endsection