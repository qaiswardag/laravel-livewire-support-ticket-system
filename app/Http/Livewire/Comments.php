<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{

    public $comments =
        [
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, molestiae.'
        ];

    public function render()
    {
        return view('livewire.comments');
    }
}
