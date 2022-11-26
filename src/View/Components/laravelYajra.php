<?php

namespace App\View\Components;

use Illuminate\Http\Client\Request;
use Illuminate\View\Component;

class laravelYajra extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $tableTitle;
    public $getData;
    public $dom;

    public function __construct($getData,$tableTitle,$dom)
    {
        $this->tableTitle = $tableTitle;
        $this->getData = $getData;
        $this->dom = $dom;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.laravelYajra');
    }
}
