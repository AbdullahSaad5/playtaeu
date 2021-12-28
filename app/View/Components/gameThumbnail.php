<?php

namespace App\View\Components;

use Illuminate\View\Component;

class gameThumbnail extends Component
{

    public $image;
    public $price;

    public function __construct($image, $price)
    {
        $this->image = $image;
        $this->price = $price;
    }

    public function render()
    {
        return view('components.game-thumbnail');
    }
}
