<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Noticia;

class NoticiaComponent extends Component
{
    
    public $noticias;

    public function __construct()
    {
        $this->noticias = Noticia::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.noticia-component');
    }
}
