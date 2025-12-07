<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Modal extends Component
{
    public $id;
    public $title;
    public $size;
    public $showClose;

    /**
     * Create a new component instance.
     *
     * @param string $id       Identifiant unique du modal (ex: 'deleteModal')
     * @param string $title    Titre du modal
     * @param string $size     'sm'|'md'|'lg' (taille du contenu)
     * @param bool   $showClose Affiche le bouton fermer (true/false)
     */
    public function __construct(string $id = 'modal', string $title = '', string $size = 'md', bool $showClose = true)
    {
        $this->id = $id;
        $this->title = $title;
        $this->size = $size;
        $this->showClose = $showClose;
    }

    public function render()
    {
        return view('components.modal');
    }
}
