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
        return view('panel.profile');
    }
}
