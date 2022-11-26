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
    public $language;
    public $dom;
    public $pageLength;
    public $buttonLanguage;

    public function __construct(string $tableTitle = null,$getData = null,$language = null,$dom = 'Qlfrtip',$pageLength = 10,$buttonLanguage = null)
    {
        $text = new text();
        $this->tableTitle = $tableTitle;
        $this->getData = $getData;
        $this->language = isset($language) ? $text->language() : $language;
        $this->dom = $dom;
        $this->pageLength = $pageLength;
        $this->buttonLanguage = isset($buttonLanguage) ? $text->language_button($tableTitle) : $buttonLanguage;
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
