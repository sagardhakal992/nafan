<?php

namespace App\View\Components;

use App\Models\Partner;
use Illuminate\View\Component;

class PartnerSlider extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $partners = Partner::where("show_in_home_page", 1)->get();
        return view('components.partner-slider',['partners'=>$partners]);
    }
}
