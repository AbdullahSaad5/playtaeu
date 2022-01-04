<?php

namespace App\View\Components;

use Illuminate\View\Component;

class selectCard extends Component
{

    public $cardID;
    public $cardType;
    public $ownerName;
    public $endingNumber;
    public $expireMonth;
    public $expireYear;
    public function __construct($cardID, $cardType, $ownerName, $endingNumber, $expireMonth, $expireYear)
    {
        $this->cardID = $cardID;
        $this->cardType = $cardType;
        $this->ownerName = $ownerName;
        $this->endingNumber = $endingNumber;
        $this->expireMonth = $expireMonth;
        $this->expireYear = $expireYear;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.select-card');
    }
}
