<?php

namespace App\View\Components\frontend\User_Management;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sign_In extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.frontend.user_-management.sign_-in');
    }
}
