<?php

namespace App\View\Components;

use Illuminate\View\Component;

class OrderOptionsComponent extends Component
{
    public $options;
    public $selected;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($selected)
    {
        $this->options = [
            ["تعرفه یک ماهه عادی 600 تومان","600"] ,
            ["تعرفه یک ماهه معمولی 800 تومان","800"] ,
            ["تعرفه یک ماهه حرفه ای 1000 تومان","1000"] ,
            ["تعرفه سه ماهه عادی 1600 تومان","1600"] ,
            ["تعرفه سه ماهه معمولی 2200 تومان","2200"] ,
            ["تعرفه سه ماهه حرفه ای 2800 تومان","2800"] ,
            ["تعرفه یک ساله عادی 6900 تومان","6900"] ,
            ["تعرفه یک ساله معمولی 9300 تومان","9300"] ,
            ["تعرفه یک ساله حرفه ای 11700 تومان","11700"] ,
        ];
        $this->selected = $selected;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.order-options-component');
    }
}
