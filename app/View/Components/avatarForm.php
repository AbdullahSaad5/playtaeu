<?php

namespace App\View\Components;

use Illuminate\View\Component;

class avatarForm extends Component
{
    public function __construct()
    {
    }
    public function render()
    {
        return view('components.avatar-form');
    }
}
