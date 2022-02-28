@extends('root')
@section('title')
    تعرفه ها
@endsection
@section('description')
    تعرفه های شادفیت
@endsection
@section('content')
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
                            <a href="{{ route('order','1') }}" class="btn btn-pricing btn-block">ثبت سفارش</a>
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
                            <a href="#" class="btn btn-pricing btn-block">ثبت سفارش</a>
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
                            <a href="#" class="btn btn-pricing btn-block">ثبت سفارش</a>
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
                            <a href="#" class="btn btn-pricing btn-block">ثبت سفارش</a>
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
                            <a href="#" class="btn btn-pricing btn-block">ثبت سفارش</a>
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
                            <a href="#" class="btn btn-pricing btn-block">ثبت سفارش</a>
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
                            <a href="#" class="btn btn-pricing btn-block">ثبت سفارش</a>
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
                            <a href="#" class="btn btn-pricing btn-block">ثبت سفارش</a>
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
                            <a href="#" class="btn btn-pricing btn-block">ثبت سفارش</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .container --><br><br><br><br>
    </div> <!-- .page-section -->
@endsection
