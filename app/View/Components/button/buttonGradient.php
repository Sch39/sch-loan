<?php

namespace App\View\Components\button;

use Illuminate\View\Component;

class buttonGradient extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $title, $icon, $href, $class;

    public function __construct($title = '', $href = '', $icon = '', $class = '')
    {
        $this->title = $title;
        $this->href = $href;
        $this->icon = $icon;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button.button-gradient');
    }
}
