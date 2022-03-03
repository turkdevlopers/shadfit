<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\LoginController as LG;
use App\Models\Order;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            }else{
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
    public function show(Order $order)
    {
        //
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
