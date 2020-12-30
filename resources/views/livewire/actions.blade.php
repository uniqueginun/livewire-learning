<div class="row" x-data="{ show: false }" x-init="() => {
        window.addEventListener('listenForDropdown', ({detail}) => detail.value ? alert(detail.value + ' is always a good choice!') : null);
        window.addEventListener('listenForCheckbox', ({detail}) => show = detail.value);
    }">

    <div x-show="show">
        <div class="col-10">
            <p>{{ $post->content }}</p>
            <p>Liked {{ $post->likes_count }} times</p>
            <p>{{ $post->created_at->diffForHumans() }}</p>
        </div>
        <div class="col-2">
            <button wire:click="like({{ $post->id }})" class="btn btn-lg btn-primary">Like</button>
        </div>
        <div class="col-12 mt-4">
            <select wire:change="listenForDropdown($event.target.value)" class="form-control">
                <option value=""></option>
                <option>Laravel</option>
                <option>Livewire</option>
                <option>Inertia</option>
                <option>Something else</option>
            </select>
        </div>
    </div>

    <div class="col-12 mt-4">
        <label x-text="show ? 'hide component' : 'show component'"></label>
        <input type="checkbox" class="form-check" wire:change="handleCheckboxStatus($event.target.checked)" />
    </div>
</div>
