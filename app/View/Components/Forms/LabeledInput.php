<?php

namespace App\View\Components\Forms;

use Closure;
use App\Models\User;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class LabeledInput extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public string $type = "text",
        public bool $required = false,
        public string $label = "Label",
        public string $placeholder = "Write here...",
        public string $model
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.labeled-input');
    }
}
