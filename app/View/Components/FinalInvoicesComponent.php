<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class FinalInvoicesComponent extends Component
{
    public $invoice;
    public $user;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Auth $auth)
    {
        $user = $auth::user();
        $this->user = $user;
        $this->invoice = User::find($user->id)->order->where('satuse','=','0')->first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.final-invoices-component');
    }
}
