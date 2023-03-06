<?php

namespace App\Http\Livewire;

use App\Models\ModelA;
use Livewire\Component;

class Card extends Component
{
    /** @var ModelA */
    public $model;

    public function render()
    {
        $this->model = ModelA::query()
            ->with(['b', 'd'])
            ->find(3);

        return view('livewire.card')
            ->layout('welcome');
    }
}
