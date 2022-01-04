<?php

namespace App\View\Components;

use Illuminate\View\Component;

class cartItem extends Component
{

    public $gameID;
    public $itemImage;
    public $itemTitle;
    public $windowsSupport;
    public $macSupport;
    public $linuxSupport;
    public $itemPrice;
    public function __construct($gameID, $itemImage, $itemTitle, $windowsSupport, $macSupport, $linuxSupport, $itemPrice)
    {
        $this->gameID = $gameID;
        $this->itemImage = $itemImage;
        $this->itemTitle = $itemTitle;
        $this->windowsSupport = $windowsSupport;
        $this->macSupport = $macSupport;
        $this->linuxSupport = $linuxSupport;
        $this->itemPrice = $itemPrice;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cart-item');
    }
}
