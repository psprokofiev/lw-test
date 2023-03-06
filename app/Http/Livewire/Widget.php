<?php

namespace App\Http\Livewire;

use App\Models\ModelA;
use App\Models\ModelB;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Widget extends Component
{
    /** @var ModelA */
    public $model;

    /** @var ModelB[]|Collection */
    public $children;

    protected $listeners = [
        'load',
    ];

    public function mount()
    {
        $this->children = collect();
    }

    public function refresh()
    {
        //
    }

    public function load(int $id)
    {
        $this->children = ModelB::query()->where('a_id', $id)
            ->with(['a', 'c'])
            ->get();
    }

    public function render()
    {
        return view('livewire.widget');
    }
}
