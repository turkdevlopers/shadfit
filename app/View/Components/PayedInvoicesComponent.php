<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class PayedInvoicesComponent extends Component
{
    public $payments;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Auth $auth)
    {
        $user = $auth::user();
        $this->payments = User::find($user->id)->order;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.payed-invoices-component');
    }
}
