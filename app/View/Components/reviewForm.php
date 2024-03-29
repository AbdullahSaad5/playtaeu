<?php

namespace App\View\Components;

use Illuminate\View\Component;

class reviewForm extends Component
{
    public $gameTitle;
    public function __construct($gameTitle)
    {
        $this->gameTitle = $gameTitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.review-form');
    }
}
