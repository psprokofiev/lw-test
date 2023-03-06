<div>
    <span class="badge bg-secondary">{{ now()->toDateTimeLocalString() }}</span>
    <br />
    @dump($children->pluck('name'))
    <button type="button" class="btn btn-primary" wire:click="$refresh">Refresh</button>
</div>
