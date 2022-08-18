<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class publisherRecord extends Component
{
    public $pubs;
    public function __construct()
    {
        $this->pubs = DB::select('SELECT * FROM publisher');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.publisher-record', ['pubs' => $this->pubs]);
    }
}
