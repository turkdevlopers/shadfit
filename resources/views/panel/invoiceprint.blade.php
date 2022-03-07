<html dir="rtl" lang="fa-IR" prefix="og: https://ogp.me/ns#" class="js">

<head>
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v30.1.0/dist/font-face.css" rel="stylesheet"
        type="text/css">
</head>

<body dir="rtl" style="
    font-family: Vazir,sans-serif;
">



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>فاکتور فروش</title>


    <div class="container-xl" style="margin-top: 100px;">
        <div class="row">
            <div class="col-3 text-center"></div>
            <div class="col-6 text-center">
                <h3 class="font-weight-bold">صورتحساب سرویس شادفیت</h3>
            </div>
            <div class="col-3 text-right">

                <p style="
    color: #6C55F9;
">تاریخ سفارش:
                    <span style="
    color: black;
">{{ jdate(time())->format('Y/m/d') }}</span>
                </p>
                <p style="
    color: #6C55F9;
">شماره سفارش: <span style="
    color: black;
">{{ $order->id }}</span></p>
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>

                    </tr>
                </thead>
                <tbody>
                    <tr>

                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th class="text-center" colspan="11" style="
    background-color: #6C55F9;
    color: white;
">مشخصات خریدار</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="11" class="text-right">
                            <div class="row">
                                <div class="col-4">
                                    <p>نام مدرسه خریدار: {{ $user->school_name }}</p>
                                    <p>آدرس کامل:</p>
                                </div>
                                <div class="col-4">


                                </div>
                                <div class="col-4">

                                    <p>تلفن / نمابر: {{ $user->mobile }}</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th class="text-center" colspan="11" style="
    background-color: #6C55F9;
    color: white;
">مشخصات کالا یا خدمات مورد معامله</th>
                    </tr>
                </thead>
                <thead>
                    <tr class="text-center">
                        <th>ردیف</th>
                        <th>کد کالا</th>
                        <th>شرح کالا یا خدمات</th>
                        <th>تعداد / مقدار</th>

                        <th>مبلغ واحد (تومان)</th>
                        <th>مبلغ کل (تومان)</th>


                        <th>جمع مالیات و عوارض (تومان)</th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td>۱</td>
                        <td>{{ $order->package->id }}</td>
                        <td>تعرفه {{ $order->package->plan->period }} روزه {{ $serviceType }}
                            {{ $order->package->price }} تومان</td>
                        <td>{{ $order->students_number }}</td>

                        <td>{{ $order->package->price }}</td>
                        <td>{{ number_format($order->order_price, 0, '', '،') }}</td>


                        <td>3000</td>

                    </tr>
                    <tr>
                        <th colspan="5" class="text-right" style="
    color: #6C55F9;
">جمع کل</th>





                        <th class="text-center" style="
    color: #6C55F9;
">{{ number_format($order->order_price + 3000, 0, '', '،') }}</th>
                    </tr>
                    <tr>
                        <th colspan="5" class="text-right">شرایط و نحوه فروش: &nbsp;&nbsp;&nbsp;&nbsp; نقدی </th>
                        <th colspan="6" class="text-right">توضیحات:</th>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
<script>
    window.print();
</script>
