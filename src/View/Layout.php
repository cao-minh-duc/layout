<?php
namespace UiBuilder\Layout\View;

use Illuminate\View\Component;

class Layout extends Component
{
    

    public function render()
    {
        return view('layout::basic');
    }
}