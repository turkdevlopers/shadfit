<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\LoginController as LG;
use App\Models\Order;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Morilog\Jalali\Jalalian;
use Spipu\Html2Pdf\Html2Pdf;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Order::all();
    }

    public function record_index($id)
    {
        $selected = $id;
        $UserCheckApi = route("UserCheckApi", "");
        return view('Order', compact("UserCheckApi", "selected"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Order $order, LG $lg)
    {
        if (Auth::user()) {
            //validation rules
            $user = Auth::user();
            $request->validate([
                'school_name' => 'required|min:4|string|max:45',
                'service' => 'required',
                'students_number' => 'required|min:40|max:2000|numeric',
                'address' => 'required|min:10|string|max:255',
                'mobile' => "required|numeric|min:11|unique:users,mobile,$user->id",
                'phone' => "required|numeric|min:11|unique:users,phone,$user->id",
            ]);

            if ($package = Package::where('price', '=', $request->service)->first()) {
                $user->school_name = $request['school_name'];
                $user->address = $request['address'];
                $user->mobile = $request['mobile'];
                $user->phone = $request['phone'];
                $user->save();

                $order->user_id = $user->id;
                $order->package_id = $package->id;
                $order->satuse = 0;
                $order->students_number = $request->students_number;
                $order->order_price = $package->price * $request->students_number;
                $order->save();
                return redirect(route('panel'));
            } else {
                return back()->with('message', 'سرویس مورد نظر یافت نشد');
            }
        } else {
            //validation rules
            $request->validate([
                'school_name' => 'required|min:4|string|max:45',
                'username' => ['required', 'string', 'max:20', 'min:4', 'unique:users'],
                'students_number' => 'required|min:40|max:2000|numeric',
                'service' => 'required',
                'address' => 'required|min:10|string|max:255',
                'mobile' => "required|numeric|min:11|unique:users,mobile",
                'phone' => "required|numeric|min:11|unique:users,phone",
                'password' => 'required|min:8|string|max:50|confirmed',

            ]);

            if ($package = Package::where('price', '=', $request->service)->first()) {
                $user = User::create([
                    'school_name' => $request['school_name'],
                    'username' => $request['username'],
                    'address' => $request['address'],
                    'mobile' => $request['mobile'],
                    'phone' => $request['phone'],
                    'password' => Hash::make($request['password']),
                ]);

                $order->user_id = $user->id;
                $order->package_id = $package->id;
                $order->satuse = 0;
                $order->students_number = $request->students_number;
                $order->order_price = $package->price * $request->students_number;
                $order->save();

                $lg->login($request);
                return redirect(route('panel'));
            } else {
                return back()->with('message', 'سرویس مورد نظر یافت نشد');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function showpdf(Order $order)
    {
 
        return redirect('https://selectpdf.com/api2/convert/?key=dc1062f8-061e-4c31-a909-1cce2e842e19&url=https://www.nic.ir/');

        // $invoice = new InvoicePrinter('A4','','fa');

        // $serviceType = $order->package->type;
        // switch ($serviceType) {
        // case "simple":
        // $serviceType = 'عادی';
        //     break;
        // case "normal":
        // $serviceType = 'معمولی';
        //     break;
        // case "professional":
        // $serviceType = 'حرفه ای';
        //     break;
        // }
        // $invoice->setLogo(asset('assets/img/shadfit.png'));
        // $invoice->setColor('#6C55F9');
        // $invoice->setType('ghj');
        // $invoice->setReference($order->id);
        // $invoice->setDate(jdate(time())->format('Y/m/d'));
        // $invoice->hide_tofrom();
        // /* Adding Items in table */
        // $invoice->addItem('yui', 'hjk', $order->students_number, false, $order->package->price, false, $order->package->price * $order->students_number);
        // /* Add totals */
        // $invoice->addTotal('ghj', $order->order_price);
        // $invoice->addTotal('ghj', $order->order_price + 3000, true);
        // /* Render */
        // $invoice->render('invoice.pdf', 'I'); /* I => Display on browser, D => Force Download, F => local path save, S => return document path */
    }

    public function showprint(Order $order)
    {
        $user = Auth::user();
        $serviceType = $order->package->type;
        switch ($serviceType) {
            case "simple":
                $serviceType = 'عادی';
                break;
            case "normal":
                $serviceType = 'معمولی';
                break;
            case "professional":
                $serviceType = 'حرفه ای';
                break;
        }
        return view('panel.invoiceprint', compact('serviceType', 'order', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
