<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FieldCheckbox extends Component
{
    public $value;
    public $label;
    public $name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label, $value = '')
    {
        $this->value = $value;
        $this->label = $label;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.field-checkbox');
    }
}
