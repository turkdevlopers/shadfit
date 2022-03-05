<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsActiveOrder
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($user = Auth::user()) {
            $orders = User::find($user->id)->order;
            foreach ($orders as $order) {
                if ($order->satuse == 0 or $order->payed->activeservice) {
                    return redirect(route('invoice'))->with('failmessage','شما یک سرویس فعال و یا یک فاکتور پرداخت نشده دارید');
                }
            }
        }

        return $next($request);
    }
}
