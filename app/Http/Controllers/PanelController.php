<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Morilog\Jalali\Jalalian;
use App\Models\User;
use App\Http\Controllers\PayController as PC;
use App\Models\ActiveService;
use App\Models\Payed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $PayedServices = User::find($user->id)->order->where('satuse','=','1');
        $NotPayedService = User::find($user->id)->order->where('satuse','=','0')->first();

        foreach ($PayedServices as $service) {
            if($active = $service->payed->activeservice){
                if(strtotime($active->end) >= strtotime('today')){
                    return view('panel.dashboard',compact('service'));
                }else{
                    $active->delete();
                    $service = $NotPayedService;
                    return view('panel.dashboard',compact('service'));
                }
            }
        }
        $service = $NotPayedService;
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
     * redirect to Payment gateway
     */
    public function payinvoice(PC $PC, Request $request){
        $user = Auth::user();
        $Service = User::find($user->id)->order->where('satuse','=','0')->first();
        $PC->Amount = $Service->order_price * 10 ;
        if ($offcode = $request->off) {
            $result = $request->get(route('offcheck',[$offcode,$user->id]));
            if($result->Satuse == 'success'){
                $PC->Amount = $result->FinalPrice * 10 ;
            }
        }
        $PC->OrderId = $Service->id ;
        $PC->ReturnUrl = route('verifyPay') ;
        $PC->MerchantId = 1 ;
        $PC->TerminalId = $Service->id ;

        switch ($request->mode) {
            case 'sadad':
                $result = $PC->SendSadad('');//******************  null  ********************* pay key
                if ($result) {
                    return back()->with('failmessage',$result);
                }
                break;
            
            default:
            return back()->with('failmessage','درگاه پرداخت باید انتخاب شود');
            
                break;
        }
    }
    public function verifypay(PC $PC){
        $result = $PC->VerifySadad('');//******************  null  ********************* pay key
        if ($result->Satuse == 'payed') {
            $payed = Payed::create(
                [
                    'order_id' => $result->OrderId,
                    'SystemTraceNo' => $result->SystemTraceNo,
                    'RetrivalRefNo' => $result->RetrivalRefNo,
                ]
            );
            $order = Order::find($result->OrderId);
            $period = $order->package->plan->period;
            ActiveService::create(
                [
                    'start' => strtotime('today') ,
                    'end' => date('Y-m-d',strtotime("+$period days")),
                    'payed_id' => $payed->id,
                ]
            );
            $order->satuse = 1;
            $order->save();
            return redirect(route('invoice'))->with('message','فاکتور مورد نظر پرداخت شد و سرویس فعال شد');
        }
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
            'password'=>'required|min:8|string|max:50|confirmed',

        ]);
        $user->school_name = $request['school_name'];
        $user->address = $request['address'];
        $user->mobile = $request['mobile'];
        $user->phone = $request['phone'];
        $user->password = Hash::make($request['password']);

        $user->save();
        return back()->with('message','پروفایل شما با موفقیت بروز رسانی شد');
    }

    public function invoiceDelete(){
        $user = Auth::user();
        $order = $user->order->where('satuse','=','0')->first();
        $order->delete();
        return redirect(route('invoice'))->with('message','فاکتور نهایی شما حذف شد الان می توانید سفارش جدید ثبت کنید');
    }
}
