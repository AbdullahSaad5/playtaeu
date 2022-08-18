<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class developerRecord extends Component
{
    public $devs;
    public function __construct()
    {
        $this->devs = DB::select('SELECT * FROM developer');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.developer-record', ['devs' => $this->devs]);
    }
}
