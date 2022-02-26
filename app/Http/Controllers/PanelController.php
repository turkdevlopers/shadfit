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
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $user = Auth::user();
        return view('panel.profile',compact('user'));
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function botsetting(OrderController $order, Auth $auth)
    {
        $user = $auth::user();
        $service = User::find($user->id)->order->first();
        $package = $service->package;
        return view('panel.botsetting', compact('package'));
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function invoice()
    {
        return view('panel.invoice');
    }
         /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function results()
    {
        return view('panel.results');
    }     /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function add()
    {
       return view('panel.add');
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profileUpdate(Request $request){
        //validation rules
        $user = Auth::user();
        $request->validate([
            'school_name' =>'required|min:4|string|max:45',
            'address'=>'required|min:10|string|max:255',
            'mobile'=>"required|numeric|min:11|unique:users,mobile,$user->id",
            'phone'=>"required|numeric|min:11|unique:users,phone,$user->id",
            'password'=>'required|min:8|string|max:50',

        ]);
        $user->school_name = $request['school_name'];
        $user->address = $request['address'];
        $user->mobile = $request['mobile'];
        $user->phone = $request['phone'];
        $user->password = bcrypt($request['password']);

        $user->save();
        return back()->with('message','پروفایل شما با موفقیت بروز رسانی شد');
    }
}
