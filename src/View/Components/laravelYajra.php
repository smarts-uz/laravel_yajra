<?php

namespace App\View\Components;

use App\Text\text;
use Illuminate\Http\Client\Request;
use Illuminate\View\Component;
use ReflectionClass;

class laravelYajra extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $tableTitle;
    public $getData;
    public $languageRu;
    public $dom;

    public function __construct($tableTitle,$getData,$languageRu = null,$dom = 'Qlfrtip')
    {
        $text = new text();
        $this->languageRu = isset($languageRu) ? $text->language_ru() : $languageRu;
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
