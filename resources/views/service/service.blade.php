@extends('root')
@section('title')
    سرویس
@endsection
@section('description')
    سرویس های ناینس
@endsection
@section('content')
    <div class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 wow bounceInUp">
                    <div class="card-service">
                        <div class="header">
                            <i class="mai-construct-outline h1 text-primary"></i>
                        </div>
                        <div class="body">
                            <h5 class="text-secondary">شادفیت</h5>
                            <p>سرویس هوشمند سازی مدارس با شبکه شاد با قابلیت های قدرتمند</p>
                            <a href="{{ route('service.shadfit') }}" class="btn btn-primary">مشاهده</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow bounceInUp">
                    <div class="card-service">
                        <div class="header">
                            <i class="mai-construct-outline h1 text-primary"></i>
                        </div>
                        <div class="body">
                            <h5 class="text-secondary">طراحی وبسایت</h5>
                            <p>طراحی انواع وب سایت برای تمام کسب و کار ها به صورت حرفه ای توسط ناینس</p>
                            <a href="#" class="btn btn-primary">به زودی</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow bounceInUp">
                    <div class="card-service">
                        <div class="header">
                            <i class="mai-construct-outline h1 text-primary"></i>
                        </div>
                        <div class="body">
                            <h5 class="text-secondary">طراحی لوگو</h5>
                            <p>طراحی لوگو های حرفه ای و بروز با انواع مدل های مختلف طراحی</p>
                            <a href="#" class="btn btn-primary">به زودی</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow bounceInUp">
                    <div class="card-service">
                        <div class="header">
                            <i class="mai-construct-outline h1 text-primary"></i>
                        </div>
                        <div class="body">
                            <h5 class="text-secondary">طراحی کاتالوگ</h5>
                            <p>طراحی کاتالوگ و پوستر کسب کار به صورت حرفه ای توسط گروه ناینس</p>
                            <a href="#" class="btn btn-primary">به زودی</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .container -->
    </div> <!-- .page-section -->
@endsection
