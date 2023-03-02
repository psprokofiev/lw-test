<div class="card">
    <div class="card-body">
        @dump($model->getAttributes())
        <button type="button" class="btn btn-primary" wire:click="$emit('load', {{ $model->getKey() }})">Load</button>
        <hr />
        @livewire('widget', compact('model'))
    </div>
</div>
