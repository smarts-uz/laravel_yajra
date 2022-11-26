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
    public string $tableTitle;
    public string $getData;
    public string $language;
    public string $dom;
    public int $pageLength;
    public string $buttonLanguage;
    public string|bool $colReorder;
    public string|bool $responsive;
    public string|bool $select;

    public function __construct(string $tableTitle = null, string $getData = null, bool $language = null, string $dom = 'Qlfrtip', int $pageLength = 10, bool $buttonLanguage = null, string|bool $colReorder = 'false', string|bool $responsive = 'false', string|bool $select = 'false')
    {
        $text = new text();
        $this->tableTitle = $tableTitle;
        $this->getData = $getData;
        $this->language = isset($language) ? $text->language() : $language;
        $this->dom = $dom;
        $this->pageLength = $pageLength;
        $this->buttonLanguage = isset($buttonLanguage) ? $text->language_button($tableTitle) : $buttonLanguage;
        $this->colReorder = $colReorder;
        $this->responsive = $responsive;
        $this->select = $select;
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
