@extends('root')
@section('title')
    شادفیت
@endsection
@section('description')
    ربات شادفیت
@endsection

@section('content')
<div class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 wow bounceInRight">
                <div class="card-service">
                    <div class="header">
                        <img src="{{asset('assets/img/services/service-2.svg')}}" alt="">
                    </div>
                    <div class="body">
                        <h5 class="text-secondary">پشتیبانی 24 ساعت</h5>
                        <p>تیم پشتیبانی ناینس با افتخار به صورت 24 ساعت پاسخگوی سوالات و مشکلات شما عزیزان هستند</p>
                        <i class="mai-checkmark-circle h2 text-primary"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow bounceInUp">
                <div class="card-service">
                    <div class="header">
                        <img src="{{asset('assets/img/services/service-1.svg')}}" alt="">
                    </div>
                    <div class="body">
                        <h5 class="text-secondary">مستندات آموزشی</h5>
                        <p>ما برای راحتی شما مطالب مفید و فیلم آموزشی تهیه و در اختیارتان گذاشتیم تا به شادفیت مسلط
                            شوید البته استفاده از شادفیت عین آب خوردن آسان هست</p>
                        <i class="mai-checkmark-circle h2 text-primary"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow bounceInLeft">
                <div class="card-service">
                    <div class="header">
                        <img src="{{asset('assets/img/services/service-3.svg')}}" alt="">
                    </div>
                    <div class="body">
                        <h5 class="text-secondary">بدون نیاز به برنامه جانبی</h5>
                        <p>دانش آموز نیاز به نصب برنامه یا مراجع به جایی ندارد بلکه می تواند تمام خدمات را از شبکه شاد
                            با شادفیت دریافت کند.</p>
                        <i class="mai-checkmark-circle h2 text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .container -->
</div> <!-- .page-section -->

<div class="page-section bg-light">
    <div class="container">
        <div class="text-center">
            <div class="subhead">سرویس های شادفیت</div>
            <h2 class="title-section">شاد فیت چطور کمک می کند ؟</h2>
            <div class="divider mx-auto"></div>

            <div class="row">
                <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
                    <div class="features">
                        <div class="header mb-3">
                            <span class="mai-business"></span>
                        </div>
                        <h5>مشاهده کارنامه</h5>
                        <p> دانش آموزان می توانند سریع لینک مشاهده کارنامه خودرا همراه با نام کاربری و رمز عبور سامانه
                            پادا دریافت کنند </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
                    <div class="features">
                        <div class="header mb-3">
                            <span class="mai-business"></span>
                        </div>
                        <h5>سامانه همگام</h5>
                        <p>دانش آموز می تواند به آسانی آدرس سایت همگام را همراه با نام کاربری و رمز عبور خود از شادفیت
                            دریافت کند</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
                    <div class="features">
                        <div class="header mb-3">
                            <span class="mai-business"></span>
                        </div>
                        <h5>سیستم آموزشی</h5>
                        <p>مدرسه با هر گونه سامانه آموزشی آنلاین قرارداد داشته باشد شادفیت قابلیت ارسال نام کاربری و
                            رمز عبور آن سامانه را دارد</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
                    <div class="features">
                        <div class="header mb-3">
                            <span class="mai-business"></span>
                        </div>
                        <h5>پیش ثبت نام</h5>
                        <p>دانش آموزشان برای شرکت و ثبت نام در مسابقات فرهنگی هنری و غیره و همچنین کاندیدا شورا دانش
                            آموزی میتوانند از شاد فیت استفاده کنند</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
                    <div class="features">
                        <div class="header mb-3">
                            <span class="mai-business"></span>
                        </div>
                        <h5>رای گیری</h5>
                        <p>امکان رای گیری توسط شادفیت برای شورای دانش آموزی و موارد دیگر ...</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
                    <div class="features">
                        <div class="header mb-3">
                            <span class="mai-business"></span>
                        </div>
                        <h5>برنامه هفتگی</h5>
                        <p>دانش آموز قادر خواهد بود که برنامه هفتگی خود را از شادفیت دریافت کند</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
                    <div class="features">
                        <div class="header mb-3">
                            <span class="mai-business"></span>
                        </div>
                        <h5>شماره صندلی</h5>
                        <p>دانش آموز می تواند شماره صندلی خود در کلاس و فصل های امتحانی دریافت کند</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
                    <div class="features">
                        <div class="header mb-3">
                            <span class="mai-business"></span>
                        </div>
                        <h5>پیغام به مدیریت</h5>
                        <p>دانش آموزان می توانند یک صندوق پیشنهاد آنلاین داشته باشند تا با مدرسه در ارتباط باشند</p>
                    </div>
                </div>
            </div>

        </div>
    </div> <!-- .container -->
</div> <!-- .page-section -->

<!-- Banner info -->
<div class="page-section banner-info">
    <div class="wrap bg-image" style="background-image: url(../assets/img/bg_pattern.svg);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-3 pr-lg-5 wow fadeInUp">
                    <h2 class="title-section">شادفیت برای توسعه ی مدارس <br></h2>
                    <div class="divider"></div>
                    <p>گروه پژوهش ناینس با مطالعه مدارس ایران به نتایجی رسیده تا به کمک گروه فنی محصولی به نام شادفیت
                        ساخته شود.</p>

                    <ul class="theme-list theme-list-light text-white">
                        <li>
                            <div class="h5">اصلی ترین وظیفه محصول</div>
                            <p>این محصول فقط با هدف یاری رساندن به کادر مدرسه ساخته شده تا با خدمات خاص خود کار
                                مسئولان مدرسه را در جمع آوری و پوشش اطلاعات آسان تر سازد</p>
                        </li>
                        <li>
                            <div class="h5">پیشرفت</div>
                            <p>تحویل بعضی اطلاعات برای دانش آموزان کار نفس گیری است ولی با شادفیت دانش آموزان اطلاعات
                                مورد نیاز را در مورد سامانه های مختلف مانند (همگام ، پادا و ...) به صورت 24 ساعت در
                                شاد از طریق شاد فیت می توانند دریافت کنند.این یعنی پیشرفت</p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 py-3 wow fadeInRight">
                    <div class="img-fluid text-center">
                        <img src="{{asset('assets/img/banner_image_2.svg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .wrap -->
</div> <!-- .page-section -->

<div class="page-section">
    <div class="container">
        <div class="text-center wow fadeInUp">
            <div class="subhead">تعرفه های شادفیت</div>
            <h3 class="title-section">تعرفه های یک ماهه</h3>
            <div class="divider mx-auto"></div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 py-3 wow zoomIn">
                <div class="card-pricing">
                    <div class="header">
                        <div class="pricing-type">عادی</div>
                        <div class="price">
                            <span class="dollar">تومان</span>
                            <h1>٦٠٠<span class="suffix"></span></h1>
                        </div>
                        <h6>هر دانش آموز</h6>
                    </div>
                    <div class="body d-flex justify-content-center">
                        <div class="d-flex flex-column">
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span></p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span></p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span></p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span></p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span></p>

                        </div>
                        <div> &ThinSpace;&ThinSpace;&ThinSpace; </div>
                        <div class="text-right">
                            <p>سامانه همگام </p>
                            <p> سامانه پادا </p>
                            <p> شماره صندلی </p>
                            <p> پیغام به مدیریت </p>
                            <p> ٢٤/٧ پشتیبانی </p>
                        </div>
                    </div>
                    <div class="footer">
                        <a href="{{ route('order','0') }}" class="btn btn-pricing btn-block">ثبت سفارش</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 py-3 wow zoomIn">
                <div class="card-pricing marked">
                    <div class="header">
                        <div class="pricing-type">معمولی</div>
                        <div class="price">
                            <span class="dollar">تومان</span>
                            <h1>٨٠٠<span class="suffix"></span></h1>
                        </div>
                        <h6>هر دانش آموز</h6>
                    </div>
                    <div class="body d-flex justify-content-center">
                        <div class="d-flex flex-column">
                            <p><span class="suffix"><i class="mai-checkmark-circle"></i></span></p>
                            <p><span class="suffix"><i class="mai-checkmark-circle"></i></span></p>
                            <p><span class="suffix"><i class="mai-checkmark-circle"></i></span></p>
                            <p><span class="suffix"><i class="mai-checkmark-circle"></i></span></p>
                            <p><span class="suffix"><i class="mai-checkmark-circle"></i></span></p>
                            <p><span class="suffix"><i class="mai-checkmark-circle"></i></span></p>
                            <p><span class="suffix"><i class="mai-checkmark-circle"></i></span></p>

                        </div>
                        <div> &ThinSpace;&ThinSpace;&ThinSpace; </div>
                        <div class="text-right">
                            <p>سامانه همگام </p>
                            <p>سامانه پادا </p>
                            <p>شماره صندلی </p>
                            <p>پیغام به مدیریت </p>
                            <p>برنامه هفتگی </p>
                            <p>سیستم آموزشی </p>
                            <p>٢٤/٧ <span class="suffix">پشتیبانی</span></p>
                        </div>
                    </div>
                    <div class="footer">
                        <a href="{{ route('order','1') }}" class="btn btn-pricing btn-block">ثبت سفارش</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 py-3 wow zoomIn">
                <div class="card-pricing">
                    <div class="header">
                        <div class="pricing-type">حرفه ای</div>
                        <div class="price">
                            <span class="dollar">تومان</span>
                            <h1>١٠٠٠<span class="suffix"></span></h1>
                        </div>
                        <h6>هر دانش آموز</h6>
                    </div>
                    <div class="body d-flex justify-content-center">
                        <div class="d-flex flex-column">
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span></p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span></p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span></p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span></p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span></p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span></p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span></p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span></p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span></p>

                        </div>
                        <div> &ThinSpace;&ThinSpace;&ThinSpace; </div>
                        <div class="text-right">
                            <p>سامانه همگام </p>
                            <p>سامانه پادا </p>
                            <p>شماره صندلی </p>
                            <p>پیغام به مدیریت </p>
                            <p>پیش ثبت نام </p>
                            <p>رای گیری </p>
                            <p>برنامه هفتگی </p>
                            <p>سیستم آموزشی </p>
                            <p>٢٤/٧ </p>
                        </div>
                    </div>
                    <div class="footer">
                        <a href="{{ route('order','2') }}" class="btn btn-pricing btn-block">ثبت سفارش</a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .container --><br><br><br><br>
    <div class="container">
        <div class="text-center wow fadeInUp">
            <div class="subhead">تعرفه های شادفیت</div>
            <h3 class="title-section">تعرفه های سه ماهه</h3>
            <div class="divider mx-auto"></div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 py-3 wow zoomIn">
                <div class="card-pricing">
                    <div class="header">
                        <div class="pricing-type">عادی</div>
                        <div class="price">
                            <span class="dollar">تومان</span>
                            <h1>١٦٠٠<span class="suffix"></span></h1>
                        </div>
                        <h6>هر دانش آموز</h6>
                    </div>
                    <div class="body d-flex justify-content-center">
                        <div class="d-flex flex-column">
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span>
                            </p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span>
                            </p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span>
                            </p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span>
                            </p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span>
                            </p>

                        </div>
                        <div> &ThinSpace;&ThinSpace;&ThinSpace; </div>
                        <div class="text-right">
                            <p>سامانه همگام </p>
                            <p> سامانه پادا </p>
                            <p> شماره صندلی </p>
                            <p> پیغام به مدیریت </p>
                            <p> ٢٤/٧ پشتیبانی </p>
                        </div>
                    </div>
                    <div class="footer">
                        <a href="{{ route('order','3') }}" class="btn btn-pricing btn-block">ثبت سفارش</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 py-3 wow zoomIn">
                <div class="card-pricing marked">
                    <div class="header">
                        <div class="pricing-type">معمولی</div>
                        <div class="price">
                            <span class="dollar">تومان</span>
                            <h1>٢٢٠٠<span class="suffix"></span></h1>
                        </div>
                        <h6>هر دانش آموز</h6>
                    </div>
                    <div class="body d-flex justify-content-center">
                        <div class="d-flex flex-column">
                            <p><span class="suffix"><i class="mai-checkmark-circle"></i></span></p>
                            <p><span class="suffix"><i class="mai-checkmark-circle"></i></span></p>
                            <p><span class="suffix"><i class="mai-checkmark-circle"></i></span></p>
                            <p><span class="suffix"><i class="mai-checkmark-circle"></i></span></p>
                            <p><span class="suffix"><i class="mai-checkmark-circle"></i></span></p>
                            <p><span class="suffix"><i class="mai-checkmark-circle"></i></span></p>
                            <p><span class="suffix"><i class="mai-checkmark-circle"></i></span></p>

                        </div>
                        <div> &ThinSpace;&ThinSpace;&ThinSpace; </div>
                        <div class="text-right">
                            <p>سامانه همگام </p>
                            <p>سامانه پادا </p>
                            <p>شماره صندلی </p>
                            <p>پیغام به مدیریت </p>
                            <p>برنامه هفتگی </p>
                            <p>سیستم آموزشی </p>
                            <p>٢٤/٧ <span class="suffix">پشتیبانی</span></p>
                        </div>
                    </div>
                    <div class="footer">
                        <a href="{{ route('order','4') }}" class="btn btn-pricing btn-block">ثبت سفارش</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 py-3 wow zoomIn">
                <div class="card-pricing">
                    <div class="header">
                        <div class="pricing-type">حرفه ای</div>
                        <div class="price">
                            <span class="dollar">تومان</span>
                            <h1>٢٨٠٠<span class="suffix"></span></h1>
                        </div>
                        <h6>هر دانش آموز</h6>
                    </div>
                    <div class="body d-flex justify-content-center">
                        <div class="d-flex flex-column">
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span>
                            </p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span>
                            </p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span>
                            </p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span>
                            </p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span>
                            </p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span>
                            </p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span>
                            </p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span>
                            </p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span>
                            </p>

                        </div>
                        <div> &ThinSpace;&ThinSpace;&ThinSpace; </div>
                        <div class="text-right">
                            <p>سامانه همگام </p>
                            <p>سامانه پادا </p>
                            <p>شماره صندلی </p>
                            <p>پیغام به مدیریت </p>
                            <p>پیش ثبت نام </p>
                            <p>رای گیری </p>
                            <p>برنامه هفتگی </p>
                            <p>سیستم آموزشی </p>
                            <p>٢٤/٧ </p>
                        </div>
                    </div>
                    <div class="footer">
                        <a href="{{ route('order','5') }}" class="btn btn-pricing btn-block">ثبت سفارش</a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .container --><br><br><br><br>
    <div class="container">
        <div class="text-center wow fadeInUp">
            <div class="subhead">تعرفه های شادفیت</div>
            <h3 class="title-section">تعرفه های یک ساله</h3>
            <div class="divider mx-auto"></div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 py-3 wow zoomIn">
                <div class="card-pricing">
                    <div class="header">
                        <div class="pricing-type">عادی</div>
                        <div class="price">
                            <span class="dollar">تومان</span>
                            <h1>٦٩٠٠<span class="suffix"></span></h1>
                        </div>
                        <h6>هر دانش آموز</h6>
                    </div>
                    <div class="body d-flex justify-content-center">
                        <div class="d-flex flex-column">
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span>
                            </p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span>
                            </p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span>
                            </p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span>
                            </p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span>
                            </p>

                        </div>
                        <div> &ThinSpace;&ThinSpace;&ThinSpace; </div>
                        <div class="text-right">
                            <p>سامانه همگام </p>
                            <p> سامانه پادا </p>
                            <p> شماره صندلی </p>
                            <p> پیغام به مدیریت </p>
                            <p> ٢٤/٧ پشتیبانی </p>
                        </div>
                    </div>
                    <div class="footer">
                        <a href="{{ route('order','6') }}" class="btn btn-pricing btn-block">ثبت سفارش</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 py-3 wow zoomIn">
                <div class="card-pricing marked">
                    <div class="header">
                        <div class="pricing-type">معمولی</div>
                        <div class="price">
                            <span class="dollar">تومان</span>
                            <h1>٩٣٠٠<span class="suffix"></span></h1>
                        </div>
                        <h6>هر دانش آموز</h6>
                    </div>
                    <div class="body d-flex justify-content-center">
                        <div class="d-flex flex-column">
                            <p><span class="suffix"><i class="mai-checkmark-circle"></i></span></p>
                            <p><span class="suffix"><i class="mai-checkmark-circle"></i></span></p>
                            <p><span class="suffix"><i class="mai-checkmark-circle"></i></span></p>
                            <p><span class="suffix"><i class="mai-checkmark-circle"></i></span></p>
                            <p><span class="suffix"><i class="mai-checkmark-circle"></i></span></p>
                            <p><span class="suffix"><i class="mai-checkmark-circle"></i></span></p>
                            <p><span class="suffix"><i class="mai-checkmark-circle"></i></span></p>

                        </div>
                        <div> &ThinSpace;&ThinSpace;&ThinSpace; </div>
                        <div class="text-right">
                            <p>سامانه همگام </p>
                            <p>سامانه پادا </p>
                            <p>شماره صندلی </p>
                            <p>پیغام به مدیریت </p>
                            <p>برنامه هفتگی </p>
                            <p>سیستم آموزشی </p>
                            <p>٢٤/٧ <span class="suffix">پشتیبانی</span></p>
                        </div>
                    </div>
                    <div class="footer">
                        <a href="{{ route('order','7') }}" class="btn btn-pricing btn-block">ثبت سفارش</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 py-3 wow zoomIn">
                <div class="card-pricing">
                    <div class="header">
                        <div class="pricing-type">حرفه ای</div>
                        <div class="price">
                            <span class="dollar">تومان</span>
                            <h1>١١٧٠٠<span class="suffix"></span></h1>
                        </div>
                        <h6>هر دانش آموز</h6>
                    </div>
                    <div class="body d-flex justify-content-center">
                        <div class="d-flex flex-column">
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span>
                            </p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span>
                            </p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span>
                            </p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span>
                            </p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span>
                            </p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span>
                            </p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span>
                            </p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span>
                            </p>
                            <p><span class="suffix"><i class="mai-checkmark-circle text-primary"></i></span>
                            </p>

                        </div>
                        <div> &ThinSpace;&ThinSpace;&ThinSpace; </div>
                        <div class="text-right">
                            <p>سامانه همگام </p>
                            <p>سامانه پادا </p>
                            <p>شماره صندلی </p>
                            <p>پیغام به مدیریت </p>
                            <p>پیش ثبت نام </p>
                            <p>رای گیری </p>
                            <p>برنامه هفتگی </p>
                            <p>سیستم آموزشی </p>
                            <p>٢٤/٧ </p>
                        </div>
                    </div>
                    <div class="footer">
                        <a href="{{ route('order','8') }}" class="btn btn-pricing btn-block">ثبت سفارش</a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .container --><br><br><br><br>
</div> <!-- .page-section -->

<div class="page-section">
    <div class="container">
        
    </div>
    
</div>

@endsection