<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MainPage extends Component
{
    public $what;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($what)
    {
      //
      $this->what = $what;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.main-page');
    }
}
