<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Morilog\Jalali\Jalalian;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(OrderController $order, Auth $auth)
    {
        $user = $auth::user();
        $service = User::find($user->id)->order->first();
        
        return view('panel.dashboard',compact('service'));
    }
    public function profile()
    {
        $user = Auth::user();
        return view('panel.profile',compact('user'));
    }
    public function botsetting()
    {
        return view('panel.botsetting');
    }
    public function profileUpdate(Request $request){
        //validation rules

        $request->validate([
            'school_name' =>'required|min:4|string|max:45',
            'address'=>'required|min:10|string|max:255',
            'mobile'=>'required|numeric|min:11|unique:users',
            'phone'=>'required|numeric|min:11|unique:users',
            'password'=>'required|min:8|string|max:50',

        ]);
        $user = Auth::user();
        $user->school_name = $request['school_name'];
        $user->address = $request['address'];
        $user->mobile = $request['mobile'];
        $user->phone = $request['phone'];
        $user->password = bcrypt($request['password']);

        $user->save();
        return back()->with('message','پروفایل شما با موفقیت بروز رسانی شد');
    }
}
