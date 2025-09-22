<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class messageBanner extends Component
{
   

    public $msg  ; 
    public $class;

    public function __construct($msg , $class)
    {
        $this->msg=$msg ; 
        $this->class=$class ; 

    }


    public function render(): View|Closure|string
    {
        return view('components.message-banner');
    }
}
