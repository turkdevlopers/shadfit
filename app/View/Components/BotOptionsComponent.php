<?php

namespace App\View\Components;

use App\Models\Package;
use Illuminate\View\Component;

class BotOptionsComponent extends Component
{
    public $options;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($packageId)
    {
        $this->options =json_decode(Package::find($packageId)->options);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.bot-options-component');
    }
}
