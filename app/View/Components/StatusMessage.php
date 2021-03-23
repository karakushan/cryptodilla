<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StatusMessage extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $message = session('message');
        $status = session('status');
        if ($message)
            return view('components.status-message', compact('message', 'status'));
    }
}
