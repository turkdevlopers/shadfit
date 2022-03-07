<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/usercheck/{username}', function($username){
    $user = User::firstOrNew(array('username' => $username));
    if ($user->id) {
        return response()->json([
            "Qualification" => "used" ,
            "Message" => "این نام کاربری قبلا انتخاب شده" ,
            "Username" => $username
        ]);
    }
    return response()->json([
        "Qualification" => "free" ,
        "Message" => ""
    ]);
})->name("UserCheckApi");

route::get('/offcheck/{code}/user/{userId}', function($code, $userId){
    $user = User::find($userId);
    if ($user and $order = $user->order->where('satuse','=','0')->first()) {
        $discounts = new App\Models\Off;
        if ($discount = $discounts->where('code','=',$code)->first()) {
            if ($discount->upto >= $order->students_number) {//discount can be or no
                $FinalPrice = $order->order_price - (($order->order_price * $discount->Percentage) / 100) ; //math formul
                return response()->json([
                    "Satuse" => "success" ,
                    "Discount" => "$discount->Percentage%" ,
                    "Message" => "کد تخفیف اعمال شد",
                    "OldPrice" => $order->order_price,
                    "FinalPrice" => $FinalPrice
                ]);
            }
            if ($discount->upto == 0 and $order->students_number > 100) {//discount can be or no
                $FinalPrice = $order->order_price - (($order->order_price * $discount->Percentage) / 100) ; //math formul
                return response()->json([
                    "Satuse" => "success" ,
                    "Discount" => "$discount->Percentage%" ,
                    "Message" => "کد تخفیف اعمال شد",
                    "OldPrice" => $order->order_price,
                    "FinalPrice" => $FinalPrice
                ]);
            }
            
            return response()->json([
                "satuse" => "error" ,
                "LastPrice" => $order->order_price + 3000 ,
                "Message" => "این کد تخفیف مشمول شما نمی شود"
            ]);

        }else{
            return response()->json([
                "satuse" => "error" ,
                "LastPrice" => $order->order_price + 3000 ,
                "Message" => "کد تخفیف پیدا نشد"
            ]);
        }
    }
    return response()->json([
        "satuse" => "error" ,
        "Message" => "خطایی رخ داد لطفا با پشتیبان در ارتباط باشید"
    ]);
})->name('offcheck');