<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class dealProduct extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $content;
    public $product;
    public function __construct($product, $title, $content)
    {
        //
        $this->product = $product;
        $this->title = $title;
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.deal-product');
    }
}
